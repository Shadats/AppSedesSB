<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       
       factory(App\User::class,5)->create();
       App\User::create([
       	'name'=> 'Sebastian',
       	'lastname' =>'Boari',
       	'dni'=>'38570678',
       	'email'=>'sebastianboari@gmail.com',
       	'password'=> bcrypt('123'),
       	'rol'=> 'admin',
       ]);
    }
}
