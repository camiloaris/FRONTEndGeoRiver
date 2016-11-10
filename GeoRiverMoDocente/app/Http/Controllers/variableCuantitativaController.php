<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreatevariableCuantitativaRequest;
use App\Http\Requests\UpdatevariableCuantitativaRequest;
use App\Repositories\variableCuantitativaRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class variableCuantitativaController extends AppBaseController
{
    /** @var  variableCuantitativaRepository */
    private $variableCuantitativaRepository;

    public function __construct(variableCuantitativaRepository $variableCuantitativaRepo)
    {
        $this->variableCuantitativaRepository = $variableCuantitativaRepo;
    }

    /**
     * Display a listing of the variableCuantitativa.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->variableCuantitativaRepository->pushCriteria(new RequestCriteria($request));
        $variableCuantitativas = $this->variableCuantitativaRepository->all();

        return view('variable_cuantitativas.index')
            ->with('variableCuantitativas', $variableCuantitativas);
    }

    /**
     * Show the form for creating a new variableCuantitativa.
     *
     * @return Response
     */
    public function create()
    {
        return view('variable_cuantitativas.create');
    }

    /**
     * Store a newly created variableCuantitativa in storage.
     *
     * @param CreatevariableCuantitativaRequest $request
     *
     * @return Response
     */
    public function store(CreatevariableCuantitativaRequest $request)
    {
        $input = $request->all();

        $variableCuantitativa = $this->variableCuantitativaRepository->create($input);

        Flash::success('Variable Cuantitativa saved successfully.');

        return redirect(route('variableCuantitativas.index'));
    }

    /**
     * Display the specified variableCuantitativa.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $variableCuantitativa = $this->variableCuantitativaRepository->findWithoutFail($id);

        if (empty($variableCuantitativa)) {
            Flash::error('Variable Cuantitativa not found');

            return redirect(route('variableCuantitativas.index'));
        }

        return view('variable_cuantitativas.show')->with('variableCuantitativa', $variableCuantitativa);
    }

    /**
     * Show the form for editing the specified variableCuantitativa.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $variableCuantitativa = $this->variableCuantitativaRepository->findWithoutFail($id);

        if (empty($variableCuantitativa)) {
            Flash::error('Variable Cuantitativa not found');

            return redirect(route('variableCuantitativas.index'));
        }

        return view('variable_cuantitativas.edit')->with('variableCuantitativa', $variableCuantitativa);
    }

    /**
     * Update the specified variableCuantitativa in storage.
     *
     * @param  int              $id
     * @param UpdatevariableCuantitativaRequest $request
     *
     * @return Response
     */
    public function update($id, UpdatevariableCuantitativaRequest $request)
    {
        $variableCuantitativa = $this->variableCuantitativaRepository->findWithoutFail($id);

        if (empty($variableCuantitativa)) {
            Flash::error('Variable Cuantitativa not found');

            return redirect(route('variableCuantitativas.index'));
        }

        $variableCuantitativa = $this->variableCuantitativaRepository->update($request->all(), $id);

        Flash::success('Variable Cuantitativa updated successfully.');

        return redirect(route('variableCuantitativas.index'));
    }

    /**
     * Remove the specified variableCuantitativa from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $variableCuantitativa = $this->variableCuantitativaRepository->findWithoutFail($id);

        if (empty($variableCuantitativa)) {
            Flash::error('Variable Cuantitativa not found');

            return redirect(route('variableCuantitativas.index'));
        }

        $this->variableCuantitativaRepository->delete($id);

        Flash::success('Variable Cuantitativa deleted successfully.');

        return redirect(route('variableCuantitativas.index'));
    }
}
