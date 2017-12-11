<?php

use App\Models\EventsTypes;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EventsTypesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        EventsTypes::create([
            'title' => 'Viaje'
        ]);

        EventsTypes::create([
            'title' => 'Salida'
        ]);

        EventsTypes::create([
            'title' => 'Otro'
        ]);
    }
}
