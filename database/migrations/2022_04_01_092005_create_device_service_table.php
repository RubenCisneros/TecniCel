<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDeviceServiceTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('device_service', function (Blueprint $table) {
            $table->id();
            $table->boolean('finished');
            $table->timestamps();

            $table->foreignId('device_id')->constrained();
            $table->foreignId('service_id')->constrained();
            $table->foreignId('state_id')->constrained();
            $table->foreignId('employee_id')->constrained('users');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('device_service');
    }
}
