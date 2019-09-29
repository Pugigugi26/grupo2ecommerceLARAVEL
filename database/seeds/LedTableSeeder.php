<?php

use Illuminate\Database\Seeder;

class LedTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(\App\Led::class, 10)->create();

    }
}
