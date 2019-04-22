<?php

use Illuminate\Database\Seeder;

use App\ParkingLot;

class ParkingLotsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ParkingLot::create([
          'university_id' => '1',
          'name' => 'Fundadores',
          'adress' => 'cll 20 20 20',
          'phone_number' => '888-888-888',
          'capacity' => '20'
        ]);

        ParkingLot::create([
          'university_id' => '1',
          'name' => 'Cupula',
          'adress' => 'cll 25 20 20',
          'phone_number' => '888-888-888',
          'capacity' => '40'
        ]);

        ParkingLot::create([
          'university_id' => '1',
          'name' => 'Biblioteca',
          'adress' => 'cll 20 17 5',
          'phone_number' => '888-888-888',
          'capacity' => '30'
        ]);

        ParkingLot::create([
          'university_id' => '2',
          'name' => 'Palo grande',
          'adress' => 'cll 50 20 20',
          'phone_number' => '666-888-888',
          'capacity' => '40'
        ]);

        ParkingLot::create([
          'university_id' => '2',
          'name' => 'Nuvia',
          'adress' => 'cll 100 52 1',
          'phone_number' => '666-888-888',
          'capacity' => '50'
        ]);
    }
}
