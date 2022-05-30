<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserGuarantorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_guarantors', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('user_id');
            $table->string('guarantor_name',50);
            $table->string('guarantor_email',50)->nullable();
            $table->string('guarantor_phone',50)->nullable();
            $table->tinyInteger('guarantor_id_type');
            $table->string('guarantor_id',50)->nullable();
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
        Schema::dropIfExists('user_guarantors');
    }
}
