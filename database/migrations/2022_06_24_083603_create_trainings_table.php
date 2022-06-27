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
        Schema::create('trainings', function (Blueprint $table) {
            $table->id('id_trainings');
            $table->string('username');
            $table->string('email')->uniqie();
            $table->date('born');
            $table->string('gender');
            $table->string('phone');

            $table->string('country');
            $table->string('city');
            $table->string('province');
            $table->string('district');
            $table->string('village');
            $table->integer('postal_code');
            $table->text('address');
            $table->integer('province_id');
            $table->integer('regency_id');
            $table->integer('district_id');
            $table->char('village_id', 20);

            $table->string('ktp');
            $table->string('kk');
            $table->string('akte');
            $table->string('photo');
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
        Schema::dropIfExists('trainings');
    }
};
