<?php

use Faker\Factory as Faker;
use App\Models\activityUser;
use App\Repositories\activityUserRepository;

trait MakeactivityUserTrait
{
    /**
     * Create fake instance of activityUser and save it in database
     *
     * @param array $activityUserFields
     * @return activityUser
     */
    public function makeactivityUser($activityUserFields = [])
    {
        /** @var activityUserRepository $activityUserRepo */
        $activityUserRepo = App::make(activityUserRepository::class);
        $theme = $this->fakeactivityUserData($activityUserFields);
        return $activityUserRepo->create($theme);
    }

    /**
     * Get fake instance of activityUser
     *
     * @param array $activityUserFields
     * @return activityUser
     */
    public function fakeactivityUser($activityUserFields = [])
    {
        return new activityUser($this->fakeactivityUserData($activityUserFields));
    }

    /**
     * Get fake data of activityUser
     *
     * @param array $postFields
     * @return array
     */
    public function fakeactivityUserData($activityUserFields = [])
    {
        $fake = Faker::create();

        return array_merge([
            'idActivity' => $fake->randomDigitNotNull,
            'idUser' => $fake->randomDigitNotNull,
            'created_at' => $fake->word,
            'updated_at' => $fake->word
        ], $activityUserFields);
    }
}
