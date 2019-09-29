<?php

use Illuminate\Database\Seeder;

class OpticTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(\App\Optic::class, 10)->create();
    }
}
