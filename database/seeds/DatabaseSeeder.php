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
    }
}
