<?php

namespace App\Http\Controllers\API;

use App\Http\Requests\API\CreateactivityVariableAPIRequest;
use App\Http\Requests\API\UpdateactivityVariableAPIRequest;
use App\Models\activityVariable;
use App\Repositories\activityVariableRepository;
use Illuminate\Http\Request;
use App\Http\Controllers\AppBaseController;
use InfyOm\Generator\Criteria\LimitOffsetCriteria;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

/**
 * Class activityVariableController
 * @package App\Http\Controllers\API
 */

class activityVariableAPIController extends AppBaseController
{
    /** @var  activityVariableRepository */
    private $activityVariableRepository;

    public function __construct(activityVariableRepository $activityVariableRepo)
    {
        $this->activityVariableRepository = $activityVariableRepo;
    }

    /**
     * Display a listing of the activityVariable.
     * GET|HEAD /activityVariables
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->activityVariableRepository->pushCriteria(new RequestCriteria($request));
        $this->activityVariableRepository->pushCriteria(new LimitOffsetCriteria($request));
        $activityVariables = $this->activityVariableRepository->all();

        return $this->sendResponse($activityVariables->toArray(), 'Activity Variables retrieved successfully');
    }

    /**
     * Store a newly created activityVariable in storage.
     * POST /activityVariables
     *
     * @param CreateactivityVariableAPIRequest $request
     *
     * @return Response
     */
    public function store(CreateactivityVariableAPIRequest $request)
    {
        $input = $request->all();

        $activityVariables = $this->activityVariableRepository->create($input);

        return $this->sendResponse($activityVariables->toArray(), 'Activity Variable saved successfully');
    }

    /**
     * Display the specified activityVariable.
     * GET|HEAD /activityVariables/{id}
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        /** @var activityVariable $activityVariable */
        $activityVariable = $this->activityVariableRepository->findWithoutFail($id);

        if (empty($activityVariable)) {
            return $this->sendError('Activity Variable not found');
        }

        return $this->sendResponse($activityVariable->toArray(), 'Activity Variable retrieved successfully');
    }

    /**
     * Update the specified activityVariable in storage.
     * PUT/PATCH /activityVariables/{id}
     *
     * @param  int $id
     * @param UpdateactivityVariableAPIRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateactivityVariableAPIRequest $request)
    {
        $input = $request->all();

        /** @var activityVariable $activityVariable */
        $activityVariable = $this->activityVariableRepository->findWithoutFail($id);

        if (empty($activityVariable)) {
            return $this->sendError('Activity Variable not found');
        }

        $activityVariable = $this->activityVariableRepository->update($input, $id);

        return $this->sendResponse($activityVariable->toArray(), 'activityVariable updated successfully');
    }

    /**
     * Remove the specified activityVariable from storage.
     * DELETE /activityVariables/{id}
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        /** @var activityVariable $activityVariable */
        $activityVariable = $this->activityVariableRepository->findWithoutFail($id);

        if (empty($activityVariable)) {
            return $this->sendError('Activity Variable not found');
        }

        $activityVariable->delete();

        return $this->sendResponse($id, 'Activity Variable deleted successfully');
    }
}
