<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class UsersController extends Controller
{
    public function login() {
        return view ("users.login");
    }

    public function register() {
        return view ("users.register");
    }
}