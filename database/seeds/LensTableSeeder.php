<?php

use Illuminate\Database\Seeder;

class LensTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(\App\Led::class, 6)->create();

    }
}
