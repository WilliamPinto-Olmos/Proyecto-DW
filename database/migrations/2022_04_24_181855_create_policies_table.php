<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('policies', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('policy_number');
            $table->foreignId('client_id')->nullable()->constrained('clients');
            $table->foreignId('product_id')->nullable()->constrained('fire_insurance_products');
            $table->float('building_coverage')->nullable();
            $table->float('content_coverage')->nullable();
            $table->string('building_address')->nullable();
            $table->foreignId('building_city_id')->nullable()->constrained('cities');
            $table->date('coverage_date_from')->nullable();
            $table->date('coverage_date_to')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('policies');
    }
};
