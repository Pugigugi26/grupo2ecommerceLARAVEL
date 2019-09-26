<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Family;

class FamiliesController extends Controller
{
    public function index() {
        $families = family::all;

        $vac = compact("families");

        return view ("pages.families", $vac);
    }
}
