<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEmployeesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employees', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('user_id');
            $table->string('firstname',50);
            $table->string('lastname',50)->nullable();
            $table->integer('gender');
            $table->string('email',50);
            $table->string('phone',20);
            $table->string('address',150)->nullable();
            $table->string('image',50)->nullable();
            $table->integer('team_id')->nullable();
            $table->integer('country_id')->nullable();
            $table->integer('state_id')->nullable();
            $table->string('nin')->nullable();
            $table->string('bvn')->nullable();
            $table->string('lassra')->nullable();
            $table->integer('education')->nullable();
            $table->integer('location')->nullable();
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
        Schema::dropIfExists('employees');
    }
}
