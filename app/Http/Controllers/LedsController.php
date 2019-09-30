<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LedsController extends Controller
{
    //
    public function index() {
        $frames = led::all();

        $vac = compact("leds");

        return view ("leds.index", $vac);
    }
}
