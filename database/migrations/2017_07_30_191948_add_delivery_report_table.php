<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddDeliveryReportTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('delivery_reports', function (Blueprint $table) {
            $table->increments('id');
            $table->string('departure_date');
            $table->string('delivery_date');
            $table->string('destination_state');
            $table->string('destination_city');
            $table->string('destination_address');
            $table->string('load_type');
            $table->string('condition');
            // transporte
            //chofer
            //cliente

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
        Schema::dropIfExists('delivery_reports');
    }
}
