<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegisterNAS extends Controller
{
    public function index() {
        return view('register-nas');
    }
}
