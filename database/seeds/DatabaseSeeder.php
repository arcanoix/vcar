<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // crear clientes
        $clients = factory(App\Client::class)->times(20)->create();

        $users = factory(App\User::class)->create();

        $transports = factory(App\Transport::class)->times(5)->create();

        $drivers = factory(App\Driver::class)->times(10)->create();

        $drivers->each(function (App\Driver $driver) use ($drivers) {
            factory(App\Ticket::class)->times(3)->create([
                'driver_id' => $driver->id,
            ]);
        });

        $delivery_report = factory(App\DeliveryReport::class)->times(5)->create();

        // $delivery_report->each(function (App\DeliveryReport $dr) use ($dr) {
        //     factory(App\Transport::class)->time(1)->create([
        //         'transport_id' => $transport->id,
        //     ]);
        //
        //     factory(App\Driver::class)->time(1)->create([
        //         'driver_id' => $driver->id,
        //     ]);
        //
        //     factory(App\Client::class)->time(1)->create([
        //         'client_id' => $client->id,
        //     ]);
        // });
    }
}
