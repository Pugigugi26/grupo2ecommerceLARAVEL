<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Frame;

class FramesController extends Controller
{
    //
    public function index() {
        $frames = frame::all();

        $vac = compact("frames");

        return view ("frames.index", $vac);
    }
}
