<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOutletsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('outlets', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('outlet_id');
            $table->integer('type_id');
            $table->integer('channel_id');
            $table->string('outlet_name');
            $table->string('outlet_image');
            $table->string('outlet_address')->nullable();
            $table->string('outlet_phone',15)->nullable();
            $table->integer('region_id')->nullable();
            $table->string('street_no')->nullable();
            $table->string('street_name')->nullable();
            $table->string('gio_lat',50)->nullable();
            $table->string('gio_long',50)->nullable();
            $table->string('cpf_name')->nullable();
            $table->string('cpl_name')->nullable();
            $table->string('cpp')->nullable();
            $table->tinyInteger('is_bso')->default(0)->comment('0=not bs, 1=bso');
            $table->tinyInteger('status')->default(1)->comment('0=Inactive , 1=Active');
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
        Schema::dropIfExists('outlets');
    }
}
