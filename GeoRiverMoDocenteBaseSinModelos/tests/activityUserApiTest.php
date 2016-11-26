<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class activityUserApiTest extends TestCase
{
    use MakeactivityUserTrait, ApiTestTrait, WithoutMiddleware, DatabaseTransactions;

    /**
     * @test
     */
    public function testCreateactivityUser()
    {
        $activityUser = $this->fakeactivityUserData();
        $this->json('POST', '/api/v1/activityUsers', $activityUser);

        $this->assertApiResponse($activityUser);
    }

    /**
     * @test
     */
    public function testReadactivityUser()
    {
        $activityUser = $this->makeactivityUser();
        $this->json('GET', '/api/v1/activityUsers/'.$activityUser->id);

        $this->assertApiResponse($activityUser->toArray());
    }

    /**
     * @test
     */
    public function testUpdateactivityUser()
    {
        $activityUser = $this->makeactivityUser();
        $editedactivityUser = $this->fakeactivityUserData();

        $this->json('PUT', '/api/v1/activityUsers/'.$activityUser->id, $editedactivityUser);

        $this->assertApiResponse($editedactivityUser);
    }

    /**
     * @test
     */
    public function testDeleteactivityUser()
    {
        $activityUser = $this->makeactivityUser();
        $this->json('DELETE', '/api/v1/activityUsers/'.$activityUser->iidd);

        $this->assertApiSuccess();
        $this->json('GET', '/api/v1/activityUsers/'.$activityUser->id);

        $this->assertResponseStatus(404);
    }
}
