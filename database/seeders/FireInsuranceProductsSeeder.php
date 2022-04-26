<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class FireInsuranceProductsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $fireInsuranceProduct = new \App\Models\FireInsuranceProduct();

        $fireInsuranceProduct->product_name = 'Fire Insurance 1 - Specific Policy';
        $fireInsuranceProduct->save();
        $fireInsuranceProduct->product_name = 'Fire Insurance 2 - Comprehensive Policy';
        $fireInsuranceProduct->save();
        $fireInsuranceProduct->product_name = 'Fire Insurance 3 - Valued Policy';
        $fireInsuranceProduct->save();
        $fireInsuranceProduct->product_name = 'Fire Insurance 4 - Floating Policy';
        $fireInsuranceProduct->save();
        $fireInsuranceProduct->product_name = 'Fire Insurance 5 - Consequential Policy';
        $fireInsuranceProduct->save();
        $fireInsuranceProduct->product_name = 'Fire Insurance 6 - Replacement Policy';
        $fireInsuranceProduct->save();
    }
}
