<?php

use Illuminate\Database\Seeder;

use App\University;

class UniversitiesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      University::create([
        'name' => 'Universidad Autonoma de Manizales',
        'email' => 'autonoma@mail.com',
        'phone_number'=> '555-555-555'
      ]);

      University::create([
        'name' => 'Universidad Nacional',
        'email' => 'nacional@mail.com',
        'phone_number'=> '555-555-555'
      ]);

      University::create([
        'name' => 'Universidad de Caldas',
        'email' => 'uCaldas@mail.com',
        'phone_number'=> '555-555-555'
      ]);
    }
}
