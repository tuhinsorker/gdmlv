<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRolePermissionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('role_permissions', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('sub_module_id');
            $table->unsignedBigInteger('role_id');
            $table->tinyInteger('create')->nullable();
            $table->tinyInteger('read')->nullable();
            $table->tinyInteger('update')->nullable();
            $table->tinyInteger('delete')->nullable();
            $table->timestamps();

            $table->foreign('sub_module_id')->references('id')->on('sub_modules');
            $table->foreign('role_id')->references('id')->on('roles');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('role_permissions');
    }
}
