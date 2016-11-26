<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class activityVariableApiTest extends TestCase
{
    use MakeactivityVariableTrait, ApiTestTrait, WithoutMiddleware, DatabaseTransactions;

    /**
     * @test
     */
    public function testCreateactivityVariable()
    {
        $activityVariable = $this->fakeactivityVariableData();
        $this->json('POST', '/api/v1/activityVariables', $activityVariable);

        $this->assertApiResponse($activityVariable);
    }

    /**
     * @test
     */
    public function testReadactivityVariable()
    {
        $activityVariable = $this->makeactivityVariable();
        $this->json('GET', '/api/v1/activityVariables/'.$activityVariable->id);

        $this->assertApiResponse($activityVariable->toArray());
    }

    /**
     * @test
     */
    public function testUpdateactivityVariable()
    {
        $activityVariable = $this->makeactivityVariable();
        $editedactivityVariable = $this->fakeactivityVariableData();

        $this->json('PUT', '/api/v1/activityVariables/'.$activityVariable->id, $editedactivityVariable);

        $this->assertApiResponse($editedactivityVariable);
    }

    /**
     * @test
     */
    public function testDeleteactivityVariable()
    {
        $activityVariable = $this->makeactivityVariable();
        $this->json('DELETE', '/api/v1/activityVariables/'.$activityVariable->iidd);

        $this->assertApiSuccess();
        $this->json('GET', '/api/v1/activityVariables/'.$activityVariable->id);

        $this->assertResponseStatus(404);
    }
}
