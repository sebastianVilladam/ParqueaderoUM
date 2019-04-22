<?php

use Illuminate\Database\Seeder;

use App\User;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      User::create([
        'name' => 'Usuario estandar 1',
        'email' => 'estandar1@mail.com',
        'password' => Hash::make(12345678),
        'role_id' => '1'
      ]);

      User::create([
        'name' => 'Usuario estandar 2',
        'email' => 'estandar2@mail.com',
        'password' => Hash::make(12345678),
        'role_id' => '1'
      ]);

      User::create([
        'name' => 'Usuario estandar 3',
        'email' => 'estandar3@mail.com',
        'password' => Hash::make(12345678),
        'role_id' => '1'
      ]);

      User::create([
        'name' => 'Usuario admin 1',
        'email' => 'admin1@mail.com',
        'password' => Hash::make(12345678),
        'role_id' => '3'
      ]);

      User::create([
        'name' => 'Vigilante 1',
        'email' => 'vigilante1@mail.com',
        'password' => Hash::make(12345678),
        'role_id' => '2'
      ]);
    }
}
