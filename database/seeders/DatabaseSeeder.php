<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        /*  Order to generate data
            1.- fire_insurance_products
            2.- states
            3.- cities
            4.- clients
            5.- policies
            6.- billings
            7.- payments
        */

        // 1.- fire_insurance_products
        $this->call(FireInsuranceProductsSeeder::class);

        // 2.- states and cities
        $this->call(StatesAndCitiesSeeder::class);

        // 4.- clients and policies (with billings and payments)
        \App\Models\Client::factory(10)->create()->each(function ($client) {
            for ($i = 0; $i < rand(1, 3); $i++) {
                \App\Models\Policy::factory(1)->create(['client_id' => $client->id]);
            }

        });

    }
}
