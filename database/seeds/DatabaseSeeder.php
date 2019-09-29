<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

        $this->call(FamilyTableSeeder::class);
        $this->call(FrameTableSeeder::class);
        $this->call(DriverTableSeeder::class);
        $this->call(LedTableSeeder::class);
        $this->call(OpticTableSeeder::class);
        $this->call(ColorTableSeeder::class);

    }
}
