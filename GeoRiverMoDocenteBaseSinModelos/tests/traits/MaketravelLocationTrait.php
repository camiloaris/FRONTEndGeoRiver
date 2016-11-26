<?php

use Faker\Factory as Faker;
use App\Models\travelLocation;
use App\Repositories\travelLocationRepository;

trait MaketravelLocationTrait
{
    /**
     * Create fake instance of travelLocation and save it in database
     *
     * @param array $travelLocationFields
     * @return travelLocation
     */
    public function maketravelLocation($travelLocationFields = [])
    {
        /** @var travelLocationRepository $travelLocationRepo */
        $travelLocationRepo = App::make(travelLocationRepository::class);
        $theme = $this->faketravelLocationData($travelLocationFields);
        return $travelLocationRepo->create($theme);
    }

    /**
     * Get fake instance of travelLocation
     *
     * @param array $travelLocationFields
     * @return travelLocation
     */
    public function faketravelLocation($travelLocationFields = [])
    {
        return new travelLocation($this->faketravelLocationData($travelLocationFields));
    }

    /**
     * Get fake data of travelLocation
     *
     * @param array $postFields
     * @return array
     */
    public function faketravelLocationData($travelLocationFields = [])
    {
        $fake = Faker::create();

        return array_merge([
            'idTravel' => $fake->randomDigitNotNull,
            'idLocation' => $fake->randomDigitNotNull,
            'created_at' => $fake->word,
            'updated_at' => $fake->word
        ], $travelLocationFields);
    }
}
