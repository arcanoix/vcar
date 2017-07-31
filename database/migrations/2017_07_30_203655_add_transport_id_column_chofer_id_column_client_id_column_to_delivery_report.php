<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddTransportIdColumnChoferIdColumnClientIdColumnToDeliveryReport extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('delivery_reports', function (Blueprint $table) {
            $table->integer('transport_id')->unsigned();
            $table->foreign('transport_id')->references('id')->on('transports');

            $table->integer('driver_id')->unsigned();
            $table->foreign('driver_id')->references('id')->on('drivers');

            $table->integer('client_id')->unsigned();
            $table->foreign('client_id')->references('id')->on('clients');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('delivery_reports', function (Blueprint $table) {
            $table->dropForeign('delivery_reports_transport_id_foreign');
            $table->dropForeign('delivery_reports_driver_id_foreign');
            $table->dropForeign('delivery_reports_client_id_foreign');

            $table->dropColumn('transport_id');
            $table->dropColumn('driver_id');
            $table->dropColumn('client_id');
        });
    }
}
