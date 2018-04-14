<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HistoricPatientsController extends Controller
{
    public function showTable() {
        return view('historic');
    }
}