<?php

namespace App\Http\Controllers\API;

use App\Http\Requests\API\CreateactivityUserAPIRequest;
use App\Http\Requests\API\UpdateactivityUserAPIRequest;
use App\Models\activityUser;
use App\Repositories\activityUserRepository;
use Illuminate\Http\Request;
use App\Http\Controllers\AppBaseController;
use InfyOm\Generator\Criteria\LimitOffsetCriteria;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

/**
 * Class activityUserController
 * @package App\Http\Controllers\API
 */

class activityUserAPIController extends AppBaseController
{
    /** @var  activityUserRepository */
    private $activityUserRepository;

    public function __construct(activityUserRepository $activityUserRepo)
    {
        $this->activityUserRepository = $activityUserRepo;
    }

    /**
     * Display a listing of the activityUser.
     * GET|HEAD /activityUsers
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->activityUserRepository->pushCriteria(new RequestCriteria($request));
        $this->activityUserRepository->pushCriteria(new LimitOffsetCriteria($request));
        $activityUsers = $this->activityUserRepository->all();

        return $this->sendResponse($activityUsers->toArray(), 'Activity Users retrieved successfully');
    }

    /**
     * Store a newly created activityUser in storage.
     * POST /activityUsers
     *
     * @param CreateactivityUserAPIRequest $request
     *
     * @return Response
     */
    public function store(CreateactivityUserAPIRequest $request)
    {
        $input = $request->all();

        $activityUsers = $this->activityUserRepository->create($input);

        return $this->sendResponse($activityUsers->toArray(), 'Activity User saved successfully');
    }

    /**
     * Display the specified activityUser.
     * GET|HEAD /activityUsers/{id}
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        /** @var activityUser $activityUser */
        $activityUser = $this->activityUserRepository->findWithoutFail($id);

        if (empty($activityUser)) {
            return $this->sendError('Activity User not found');
        }

        return $this->sendResponse($activityUser->toArray(), 'Activity User retrieved successfully');
    }

    /**
     * Update the specified activityUser in storage.
     * PUT/PATCH /activityUsers/{id}
     *
     * @param  int $id
     * @param UpdateactivityUserAPIRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateactivityUserAPIRequest $request)
    {
        $input = $request->all();

        /** @var activityUser $activityUser */
        $activityUser = $this->activityUserRepository->findWithoutFail($id);

        if (empty($activityUser)) {
            return $this->sendError('Activity User not found');
        }

        $activityUser = $this->activityUserRepository->update($input, $id);

        return $this->sendResponse($activityUser->toArray(), 'activityUser updated successfully');
    }

    /**
     * Remove the specified activityUser from storage.
     * DELETE /activityUsers/{id}
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        /** @var activityUser $activityUser */
        $activityUser = $this->activityUserRepository->findWithoutFail($id);

        if (empty($activityUser)) {
            return $this->sendError('Activity User not found');
        }

        $activityUser->delete();

        return $this->sendResponse($id, 'Activity User deleted successfully');
    }
}
