<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreatevariableCualitativaRequest;
use App\Http\Requests\UpdatevariableCualitativaRequest;
use App\Repositories\variableCualitativaRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class variableCualitativaController extends AppBaseController
{
    /** @var  variableCualitativaRepository */
    private $variableCualitativaRepository;

    public function __construct(variableCualitativaRepository $variableCualitativaRepo)
    {
        $this->variableCualitativaRepository = $variableCualitativaRepo;
    }

    /**
     * Display a listing of the variableCualitativa.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->variableCualitativaRepository->pushCriteria(new RequestCriteria($request));
        $variableCualitativas = $this->variableCualitativaRepository->all();

        return view('variable_cualitativas.index')
            ->with('variableCualitativas', $variableCualitativas);
    }

    /**
     * Show the form for creating a new variableCualitativa.
     *
     * @return Response
     */
    public function create()
    {
        return view('variable_cualitativas.create');
    }

    /**
     * Store a newly created variableCualitativa in storage.
     *
     * @param CreatevariableCualitativaRequest $request
     *
     * @return Response
     */
    public function store(CreatevariableCualitativaRequest $request)
    {
        $input = $request->all();

        $variableCualitativa = $this->variableCualitativaRepository->create($input);

        Flash::success('Variable Cualitativa saved successfully.');

        return redirect(route('variableCualitativas.index'));
    }

    /**
     * Display the specified variableCualitativa.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $variableCualitativa = $this->variableCualitativaRepository->findWithoutFail($id);

        if (empty($variableCualitativa)) {
            Flash::error('Variable Cualitativa not found');

            return redirect(route('variableCualitativas.index'));
        }

        return view('variable_cualitativas.show')->with('variableCualitativa', $variableCualitativa);
    }

    /**
     * Show the form for editing the specified variableCualitativa.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $variableCualitativa = $this->variableCualitativaRepository->findWithoutFail($id);

        if (empty($variableCualitativa)) {
            Flash::error('Variable Cualitativa not found');

            return redirect(route('variableCualitativas.index'));
        }

        return view('variable_cualitativas.edit')->with('variableCualitativa', $variableCualitativa);
    }

    /**
     * Update the specified variableCualitativa in storage.
     *
     * @param  int              $id
     * @param UpdatevariableCualitativaRequest $request
     *
     * @return Response
     */
    public function update($id, UpdatevariableCualitativaRequest $request)
    {
        $variableCualitativa = $this->variableCualitativaRepository->findWithoutFail($id);

        if (empty($variableCualitativa)) {
            Flash::error('Variable Cualitativa not found');

            return redirect(route('variableCualitativas.index'));
        }

        $variableCualitativa = $this->variableCualitativaRepository->update($request->all(), $id);

        Flash::success('Variable Cualitativa updated successfully.');

        return redirect(route('variableCualitativas.index'));
    }

    /**
     * Remove the specified variableCualitativa from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $variableCualitativa = $this->variableCualitativaRepository->findWithoutFail($id);

        if (empty($variableCualitativa)) {
            Flash::error('Variable Cualitativa not found');

            return redirect(route('variableCualitativas.index'));
        }

        $this->variableCualitativaRepository->delete($id);

        Flash::success('Variable Cualitativa deleted successfully.');

        return redirect(route('variableCualitativas.index'));
    }
}
