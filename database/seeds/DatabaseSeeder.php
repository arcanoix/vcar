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

        $maintenance = factory(App\Maintenance::class)->times(10)->create();
    }
}
