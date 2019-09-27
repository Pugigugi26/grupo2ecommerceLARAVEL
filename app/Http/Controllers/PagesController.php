<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function home () {
        return view ("pages.index");
    }

    public function faqs() {
        return view ("pages.faqs");
    }

    public function contact() {
        return view ("pages.contact");
    }

}
