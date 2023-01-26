<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRealEstatesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('real_estates', function (Blueprint $table) {
            $table->id();
            $table->string('external_number');
            $table->string('name');
            $table->integer('construction_year')->nullable();
            $table->bigInteger('type');
            $table->bigInteger('state_id');
            $table->text('description');
            $table->text('description_short');
            $table->double('price');
            $table->string('country');
            $table->string('federal_state');
            $table->string('city');
            $table->string('zip_code');
            $table->float('square_meters');
            $table->integer('rooms');
            $table->float('land_area');
            $table->json('house_data');
            $table->unsignedInteger('advisor_id')->nullable();
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('real_estate');
    }
}
