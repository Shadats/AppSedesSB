<?php

use Illuminate\Database\Seeder;

class Article_TagTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        factory(App\Writer::class,9)->create();
    }
}
