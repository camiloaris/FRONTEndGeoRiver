<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class travelLocationApiTest extends TestCase
{
    use MaketravelLocationTrait, ApiTestTrait, WithoutMiddleware, DatabaseTransactions;

    /**
     * @test
     */
    public function testCreatetravelLocation()
    {
        $travelLocation = $this->faketravelLocationData();
        $this->json('POST', '/api/v1/travelLocations', $travelLocation);

        $this->assertApiResponse($travelLocation);
    }

    /**
     * @test
     */
    public function testReadtravelLocation()
    {
        $travelLocation = $this->maketravelLocation();
        $this->json('GET', '/api/v1/travelLocations/'.$travelLocation->id);

        $this->assertApiResponse($travelLocation->toArray());
    }

    /**
     * @test
     */
    public function testUpdatetravelLocation()
    {
        $travelLocation = $this->maketravelLocation();
        $editedtravelLocation = $this->faketravelLocationData();

        $this->json('PUT', '/api/v1/travelLocations/'.$travelLocation->id, $editedtravelLocation);

        $this->assertApiResponse($editedtravelLocation);
    }

    /**
     * @test
     */
    public function testDeletetravelLocation()
    {
        $travelLocation = $this->maketravelLocation();
        $this->json('DELETE', '/api/v1/travelLocations/'.$travelLocation->iidd);

        $this->assertApiSuccess();
        $this->json('GET', '/api/v1/travelLocations/'.$travelLocation->id);

        $this->assertResponseStatus(404);
    }
}
