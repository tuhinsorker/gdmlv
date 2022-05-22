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
            $table->text('outlet_name');
            $table->text('outlet_address');
            $table->string('outlet_phone',15);
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
