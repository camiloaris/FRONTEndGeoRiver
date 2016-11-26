<?php

use App\Models\activityUser;
use App\Repositories\activityUserRepository;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class activityUserRepositoryTest extends TestCase
{
    use MakeactivityUserTrait, ApiTestTrait, DatabaseTransactions;

    /**
     * @var activityUserRepository
     */
    protected $activityUserRepo;

    public function setUp()
    {
        parent::setUp();
        $this->activityUserRepo = App::make(activityUserRepository::class);
    }

    /**
     * @test create
     */
    public function testCreateactivityUser()
    {
        $activityUser = $this->fakeactivityUserData();
        $createdactivityUser = $this->activityUserRepo->create($activityUser);
        $createdactivityUser = $createdactivityUser->toArray();
        $this->assertArrayHasKey('id', $createdactivityUser);
        $this->assertNotNull($createdactivityUser['id'], 'Created activityUser must have id specified');
        $this->assertNotNull(activityUser::find($createdactivityUser['id']), 'activityUser with given id must be in DB');
        $this->assertModelData($activityUser, $createdactivityUser);
    }

    /**
     * @test read
     */
    public function testReadactivityUser()
    {
        $activityUser = $this->makeactivityUser();
        $dbactivityUser = $this->activityUserRepo->find($activityUser->id);
        $dbactivityUser = $dbactivityUser->toArray();
        $this->assertModelData($activityUser->toArray(), $dbactivityUser);
    }

    /**
     * @test update
     */
    public function testUpdateactivityUser()
    {
        $activityUser = $this->makeactivityUser();
        $fakeactivityUser = $this->fakeactivityUserData();
        $updatedactivityUser = $this->activityUserRepo->update($fakeactivityUser, $activityUser->id);
        $this->assertModelData($fakeactivityUser, $updatedactivityUser->toArray());
        $dbactivityUser = $this->activityUserRepo->find($activityUser->id);
        $this->assertModelData($fakeactivityUser, $dbactivityUser->toArray());
    }

    /**
     * @test delete
     */
    public function testDeleteactivityUser()
    {
        $activityUser = $this->makeactivityUser();
        $resp = $this->activityUserRepo->delete($activityUser->id);
        $this->assertTrue($resp);
        $this->assertNull(activityUser::find($activityUser->id), 'activityUser should not exist in DB');
    }
}
