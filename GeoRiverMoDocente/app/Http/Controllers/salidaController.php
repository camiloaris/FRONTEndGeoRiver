<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreatesalidaRequest;
use App\Http\Requests\UpdatesalidaRequest;
use App\Repositories\salidaRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class salidaController extends AppBaseController
{
    /** @var  salidaRepository */
    private $salidaRepository;

    public function __construct(salidaRepository $salidaRepo)
    {
        $this->salidaRepository = $salidaRepo;
    }

    /**
     * Display a listing of the salida.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->salidaRepository->pushCriteria(new RequestCriteria($request));
        $salidas = $this->salidaRepository->all();

        return view('salidas.index')
            ->with('salidas', $salidas);
    }

    /**
     * Show the form for creating a new salida.
     *
     * @return Response
     */
    public function create()
    {
        return view('salidas.create');
    }

    /**
     * Store a newly created salida in storage.
     *
     * @param CreatesalidaRequest $request
     *
     * @return Response
     */
    public function store(CreatesalidaRequest $request)
    {
        $input = $request->all();

        $salida = $this->salidaRepository->create($input);

        Flash::success('Salida saved successfully.');

        return redirect(route('salidas.index'));
    }

    /**
     * Display the specified salida.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $salida = $this->salidaRepository->findWithoutFail($id);

        if (empty($salida)) {
            Flash::error('Salida not found');

            return redirect(route('salidas.index'));
        }

        return view('salidas.show')->with('salida', $salida);
    }

    /**
     * Show the form for editing the specified salida.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $salida = $this->salidaRepository->findWithoutFail($id);

        if (empty($salida)) {
            Flash::error('Salida not found');

            return redirect(route('salidas.index'));
        }

        return view('salidas.edit')->with('salida', $salida);
    }

    /**
     * Update the specified salida in storage.
     *
     * @param  int              $id
     * @param UpdatesalidaRequest $request
     *
     * @return Response
     */
    public function update($id, UpdatesalidaRequest $request)
    {
        $salida = $this->salidaRepository->findWithoutFail($id);

        if (empty($salida)) {
            Flash::error('Salida not found');

            return redirect(route('salidas.index'));
        }

        $salida = $this->salidaRepository->update($request->all(), $id);

        Flash::success('Salida updated successfully.');

        return redirect(route('salidas.index'));
    }

    /**
     * Remove the specified salida from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $salida = $this->salidaRepository->findWithoutFail($id);

        if (empty($salida)) {
            Flash::error('Salida not found');

            return redirect(route('salidas.index'));
        }

        $this->salidaRepository->delete($id);

        Flash::success('Salida deleted successfully.');

        return redirect(route('salidas.index'));
    }
}
