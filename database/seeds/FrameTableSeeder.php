<?php

use Illuminate\Database\Seeder;

class FrameTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        factory(\App\Frame::class, 6)->create();
    }
}
