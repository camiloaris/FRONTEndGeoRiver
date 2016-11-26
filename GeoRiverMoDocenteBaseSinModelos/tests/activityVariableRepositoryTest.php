<?php

use App\Models\activityVariable;
use App\Repositories\activityVariableRepository;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class activityVariableRepositoryTest extends TestCase
{
    use MakeactivityVariableTrait, ApiTestTrait, DatabaseTransactions;

    /**
     * @var activityVariableRepository
     */
    protected $activityVariableRepo;

    public function setUp()
    {
        parent::setUp();
        $this->activityVariableRepo = App::make(activityVariableRepository::class);
    }

    /**
     * @test create
     */
    public function testCreateactivityVariable()
    {
        $activityVariable = $this->fakeactivityVariableData();
        $createdactivityVariable = $this->activityVariableRepo->create($activityVariable);
        $createdactivityVariable = $createdactivityVariable->toArray();
        $this->assertArrayHasKey('id', $createdactivityVariable);
        $this->assertNotNull($createdactivityVariable['id'], 'Created activityVariable must have id specified');
        $this->assertNotNull(activityVariable::find($createdactivityVariable['id']), 'activityVariable with given id must be in DB');
        $this->assertModelData($activityVariable, $createdactivityVariable);
    }

    /**
     * @test read
     */
    public function testReadactivityVariable()
    {
        $activityVariable = $this->makeactivityVariable();
        $dbactivityVariable = $this->activityVariableRepo->find($activityVariable->id);
        $dbactivityVariable = $dbactivityVariable->toArray();
        $this->assertModelData($activityVariable->toArray(), $dbactivityVariable);
    }

    /**
     * @test update
     */
    public function testUpdateactivityVariable()
    {
        $activityVariable = $this->makeactivityVariable();
        $fakeactivityVariable = $this->fakeactivityVariableData();
        $updatedactivityVariable = $this->activityVariableRepo->update($fakeactivityVariable, $activityVariable->id);
        $this->assertModelData($fakeactivityVariable, $updatedactivityVariable->toArray());
        $dbactivityVariable = $this->activityVariableRepo->find($activityVariable->id);
        $this->assertModelData($fakeactivityVariable, $dbactivityVariable->toArray());
    }

    /**
     * @test delete
     */
    public function testDeleteactivityVariable()
    {
        $activityVariable = $this->makeactivityVariable();
        $resp = $this->activityVariableRepo->delete($activityVariable->id);
        $this->assertTrue($resp);
        $this->assertNull(activityVariable::find($activityVariable->id), 'activityVariable should not exist in DB');
    }
}
