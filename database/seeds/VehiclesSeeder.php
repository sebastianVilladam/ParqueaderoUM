<?php

use Illuminate\Database\Seeder;

use App\Vehicle;

class VehiclesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Vehicle::create([
          'plate' => 'cmd884',
          'user_id' => '1',
          'brand' => 'mazda',
          'line' => 'mazda 3',
          'color' => 'rojo'
        ]);

        Vehicle::create([
          'plate' => 'hhw646',
          'user_id' => '2',
          'brand' => 'kia',
          'line' => 'picanto',
          'color' => 'blanco'
        ]);

        Vehicle::create([
          'plate' => 'jbs295',
          'user_id' => '2',
          'brand' => 'ford',
          'line' => 'fiesta st',
          'color' => 'negro'
        ]);

        Vehicle::create([
          'plate' => 'flm733',
          'user_id' => '3',
          'brand' => 'subaru',
          'line' => 'impreza wrx sti',
          'color' => 'gris'
        ]);
    }
}
