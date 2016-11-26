<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreatetravelRequest;
use App\Http\Requests\UpdatetravelRequest;
use App\Repositories\travelRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class travelController extends AppBaseController
{
    /** @var  travelRepository */
    private $travelRepository;

    public function __construct(travelRepository $travelRepo)
    {
        $this->travelRepository = $travelRepo;
    }

    /**
     * Display a listing of the travel.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->travelRepository->pushCriteria(new RequestCriteria($request));
        $travels = $this->travelRepository->all();

        return view('travels.index')
            ->with('travels', $travels);
    }

    /**
     * Show the form for creating a new travel.
     *
     * @return Response
     */
    public function create()
    {
        return view('travels.create');
    }

    /**
     * Store a newly created travel in storage.
     *
     * @param CreatetravelRequest $request
     *
     * @return Response
     */
    public function store(CreatetravelRequest $request)
    {
        $input = $request->all();

        $travel = $this->travelRepository->create($input);

        Flash::success('Travel saved successfully.');

        return redirect(route('travels.index'));
    }

    /**
     * Display the specified travel.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $travel = $this->travelRepository->findWithoutFail($id);

        if (empty($travel)) {
            Flash::error('Travel not found');

            return redirect(route('travels.index'));
        }

        return view('travels.show')->with('travel', $travel);
    }

    /**
     * Show the form for editing the specified travel.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $travel = $this->travelRepository->findWithoutFail($id);

        if (empty($travel)) {
            Flash::error('Travel not found');

            return redirect(route('travels.index'));
        }

        return view('travels.edit')->with('travel', $travel);
    }

    /**
     * Update the specified travel in storage.
     *
     * @param  int              $id
     * @param UpdatetravelRequest $request
     *
     * @return Response
     */
    public function update($id, UpdatetravelRequest $request)
    {
        $travel = $this->travelRepository->findWithoutFail($id);

        if (empty($travel)) {
            Flash::error('Travel not found');

            return redirect(route('travels.index'));
        }

        $travel = $this->travelRepository->update($request->all(), $id);

        Flash::success('Travel updated successfully.');

        return redirect(route('travels.index'));
    }

    /**
     * Remove the specified travel from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $travel = $this->travelRepository->findWithoutFail($id);

        if (empty($travel)) {
            Flash::error('Travel not found');

            return redirect(route('travels.index'));
        }

        $this->travelRepository->delete($id);

        Flash::success('Travel deleted successfully.');

        return redirect(route('travels.index'));
    }
}
