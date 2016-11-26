<?php

use App\Models\travelLocation;
use App\Repositories\travelLocationRepository;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class travelLocationRepositoryTest extends TestCase
{
    use MaketravelLocationTrait, ApiTestTrait, DatabaseTransactions;

    /**
     * @var travelLocationRepository
     */
    protected $travelLocationRepo;

    public function setUp()
    {
        parent::setUp();
        $this->travelLocationRepo = App::make(travelLocationRepository::class);
    }

    /**
     * @test create
     */
    public function testCreatetravelLocation()
    {
        $travelLocation = $this->faketravelLocationData();
        $createdtravelLocation = $this->travelLocationRepo->create($travelLocation);
        $createdtravelLocation = $createdtravelLocation->toArray();
        $this->assertArrayHasKey('id', $createdtravelLocation);
        $this->assertNotNull($createdtravelLocation['id'], 'Created travelLocation must have id specified');
        $this->assertNotNull(travelLocation::find($createdtravelLocation['id']), 'travelLocation with given id must be in DB');
        $this->assertModelData($travelLocation, $createdtravelLocation);
    }

    /**
     * @test read
     */
    public function testReadtravelLocation()
    {
        $travelLocation = $this->maketravelLocation();
        $dbtravelLocation = $this->travelLocationRepo->find($travelLocation->id);
        $dbtravelLocation = $dbtravelLocation->toArray();
        $this->assertModelData($travelLocation->toArray(), $dbtravelLocation);
    }

    /**
     * @test update
     */
    public function testUpdatetravelLocation()
    {
        $travelLocation = $this->maketravelLocation();
        $faketravelLocation = $this->faketravelLocationData();
        $updatedtravelLocation = $this->travelLocationRepo->update($faketravelLocation, $travelLocation->id);
        $this->assertModelData($faketravelLocation, $updatedtravelLocation->toArray());
        $dbtravelLocation = $this->travelLocationRepo->find($travelLocation->id);
        $this->assertModelData($faketravelLocation, $dbtravelLocation->toArray());
    }

    /**
     * @test delete
     */
    public function testDeletetravelLocation()
    {
        $travelLocation = $this->maketravelLocation();
        $resp = $this->travelLocationRepo->delete($travelLocation->id);
        $this->assertTrue($resp);
        $this->assertNull(travelLocation::find($travelLocation->id), 'travelLocation should not exist in DB');
    }
}
