<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Policy>
 */
class PolicyFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {

        $startNumber = 781;
        $policyNumber = $startNumber + count(\App\Models\Policy::all());

        dump(count(\App\Models\Policy::all()));

        $randomClient = \App\Models\Client::inRandomOrder()->first();

        $randomProduct = \App\Models\FireInsuranceProduct::inRandomOrder()->first();

        return [
            'policy_number' => $policyNumber,
            'client_id' => $randomClient->id,
            'product_id' => $randomProduct->id,
            'building_coverage' => $this->faker->numberBetween(1000, 3000),
            'content_coverage' => $this->faker->numberBetween(10000, 50000),
            'building_address' => $randomClient->address,
            'building_city_id' => $randomClient->city->id,
            'coverage_date_from' => $this->faker->dateTimeBetween('-8 years', '-3 years'),
            'coverage_date_to' => $this->faker->dateTimeBetween('-2 years', '+8 years'),
        ];
    }
}
