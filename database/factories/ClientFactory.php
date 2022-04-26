<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\City;
use App\Models\State;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Client>
 */
class ClientFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $cities = City::all();
        $isMale = $this->faker->boolean;
        $hasMiddleName = $this->faker->boolean;

        return [
            'city_id' => $this->faker->numberBetween(0, count($cities) - 1),
            'lastname' => $this->faker->lastName,
            'firstname' => $this->faker->firstName($gender = $isMale ? 'male' : null ),
            'middlename' => $hasMiddleName ? $this->faker->firstName($gender = ( $isMale ? 'male' : null ) ) : null,
            'address' => $this->faker->streetAddress,
        ];
    }
}
