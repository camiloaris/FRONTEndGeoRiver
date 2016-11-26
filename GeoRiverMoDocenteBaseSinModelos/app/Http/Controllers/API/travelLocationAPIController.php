<?php

namespace App\Http\Controllers\API;

use App\Http\Requests\API\CreatetravelLocationAPIRequest;
use App\Http\Requests\API\UpdatetravelLocationAPIRequest;
use App\Models\travelLocation;
use App\Repositories\travelLocationRepository;
use Illuminate\Http\Request;
use App\Http\Controllers\AppBaseController;
use InfyOm\Generator\Criteria\LimitOffsetCriteria;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

/**
 * Class travelLocationController
 * @package App\Http\Controllers\API
 */

class travelLocationAPIController extends AppBaseController
{
    /** @var  travelLocationRepository */
    private $travelLocationRepository;

    public function __construct(travelLocationRepository $travelLocationRepo)
    {
        $this->travelLocationRepository = $travelLocationRepo;
    }

    /**
     * Display a listing of the travelLocation.
     * GET|HEAD /travelLocations
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->travelLocationRepository->pushCriteria(new RequestCriteria($request));
        $this->travelLocationRepository->pushCriteria(new LimitOffsetCriteria($request));
        $travelLocations = $this->travelLocationRepository->all();

        return $this->sendResponse($travelLocations->toArray(), 'Travel Locations retrieved successfully');
    }

    /**
     * Store a newly created travelLocation in storage.
     * POST /travelLocations
     *
     * @param CreatetravelLocationAPIRequest $request
     *
     * @return Response
     */
    public function store(CreatetravelLocationAPIRequest $request)
    {
        $input = $request->all();

        $travelLocations = $this->travelLocationRepository->create($input);

        return $this->sendResponse($travelLocations->toArray(), 'Travel Location saved successfully');
    }

    /**
     * Display the specified travelLocation.
     * GET|HEAD /travelLocations/{id}
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        /** @var travelLocation $travelLocation */
        $travelLocation = $this->travelLocationRepository->findWithoutFail($id);

        if (empty($travelLocation)) {
            return $this->sendError('Travel Location not found');
        }

        return $this->sendResponse($travelLocation->toArray(), 'Travel Location retrieved successfully');
    }

    /**
     * Update the specified travelLocation in storage.
     * PUT/PATCH /travelLocations/{id}
     *
     * @param  int $id
     * @param UpdatetravelLocationAPIRequest $request
     *
     * @return Response
     */
    public function update($id, UpdatetravelLocationAPIRequest $request)
    {
        $input = $request->all();

        /** @var travelLocation $travelLocation */
        $travelLocation = $this->travelLocationRepository->findWithoutFail($id);

        if (empty($travelLocation)) {
            return $this->sendError('Travel Location not found');
        }

        $travelLocation = $this->travelLocationRepository->update($input, $id);

        return $this->sendResponse($travelLocation->toArray(), 'travelLocation updated successfully');
    }

    /**
     * Remove the specified travelLocation from storage.
     * DELETE /travelLocations/{id}
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        /** @var travelLocation $travelLocation */
        $travelLocation = $this->travelLocationRepository->findWithoutFail($id);

        if (empty($travelLocation)) {
            return $this->sendError('Travel Location not found');
        }

        $travelLocation->delete();

        return $this->sendResponse($id, 'Travel Location deleted successfully');
    }
}
