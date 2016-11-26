<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreatevariableRequest;
use App\Http\Requests\UpdatevariableRequest;
use App\Repositories\variableRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class variableController extends AppBaseController
{
    /** @var  variableRepository */
    private $variableRepository;

    public function __construct(variableRepository $variableRepo)
    {
        $this->variableRepository = $variableRepo;
    }

    /**
     * Display a listing of the variable.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->variableRepository->pushCriteria(new RequestCriteria($request));
        $variables = $this->variableRepository->all();

        return view('variables.index')
            ->with('variables', $variables);
    }

    /**
     * Show the form for creating a new variable.
     *
     * @return Response
     */
    public function create()
    {
        return view('variables.create');
    }

    /**
     * Store a newly created variable in storage.
     *
     * @param CreatevariableRequest $request
     *
     * @return Response
     */
    public function store(CreatevariableRequest $request)
    {
        $input = $request->all();

        $variable = $this->variableRepository->create($input);

        Flash::success('Variable saved successfully.');

        return redirect(route('variables.index'));
    }

    /**
     * Display the specified variable.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $variable = $this->variableRepository->findWithoutFail($id);

        if (empty($variable)) {
            Flash::error('Variable not found');

            return redirect(route('variables.index'));
        }

        return view('variables.show')->with('variable', $variable);
    }

    /**
     * Show the form for editing the specified variable.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $variable = $this->variableRepository->findWithoutFail($id);

        if (empty($variable)) {
            Flash::error('Variable not found');

            return redirect(route('variables.index'));
        }

        return view('variables.edit')->with('variable', $variable);
    }

    /**
     * Update the specified variable in storage.
     *
     * @param  int              $id
     * @param UpdatevariableRequest $request
     *
     * @return Response
     */
    public function update($id, UpdatevariableRequest $request)
    {
        $variable = $this->variableRepository->findWithoutFail($id);

        if (empty($variable)) {
            Flash::error('Variable not found');

            return redirect(route('variables.index'));
        }

        $variable = $this->variableRepository->update($request->all(), $id);

        Flash::success('Variable updated successfully.');

        return redirect(route('variables.index'));
    }

    /**
     * Remove the specified variable from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $variable = $this->variableRepository->findWithoutFail($id);

        if (empty($variable)) {
            Flash::error('Variable not found');

            return redirect(route('variables.index'));
        }

        $this->variableRepository->delete($id);

        Flash::success('Variable deleted successfully.');

        return redirect(route('variables.index'));
    }
}
