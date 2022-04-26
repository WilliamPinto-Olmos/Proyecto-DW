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
        Schema::create('billings', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->foreignId('policy_id')->nullable()->constrained('policies');
            $table->date('statement_date')->nullable();
            $table->string('statement_account_no')->nullable();
            $table->float('premium')->nullable();
            $table->float('other_charges')->nullable();
            $table->float('total_charges')->nullable();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('billings');
    }
};
