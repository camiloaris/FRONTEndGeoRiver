<?php

use Faker\Factory as Faker;
use App\Models\activityVariable;
use App\Repositories\activityVariableRepository;

trait MakeactivityVariableTrait
{
    /**
     * Create fake instance of activityVariable and save it in database
     *
     * @param array $activityVariableFields
     * @return activityVariable
     */
    public function makeactivityVariable($activityVariableFields = [])
    {
        /** @var activityVariableRepository $activityVariableRepo */
        $activityVariableRepo = App::make(activityVariableRepository::class);
        $theme = $this->fakeactivityVariableData($activityVariableFields);
        return $activityVariableRepo->create($theme);
    }

    /**
     * Get fake instance of activityVariable
     *
     * @param array $activityVariableFields
     * @return activityVariable
     */
    public function fakeactivityVariable($activityVariableFields = [])
    {
        return new activityVariable($this->fakeactivityVariableData($activityVariableFields));
    }

    /**
     * Get fake data of activityVariable
     *
     * @param array $postFields
     * @return array
     */
    public function fakeactivityVariableData($activityVariableFields = [])
    {
        $fake = Faker::create();

        return array_merge([
            'id_activity' => $fake->randomDigitNotNull,
            'idVariable' => $fake->randomDigitNotNull,
            'created_at' => $fake->word,
            'updated_at' => $fake->word
        ], $activityVariableFields);
    }
}
