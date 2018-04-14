<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $patients = $this->setPatients();
       
        return view('home')->with('patients',$patients);
    }
    public function setPatients() 
    {
        $bedA = DB::select("select id,name,hospitalization,bed,outcome from patients 
                                where bed = 'A' and outcome is null order by hospitalization desc");
        $bedB = DB::select("select id,name,hospitalization,bed,outcome from patients 
                                where bed = 'B' and outcome is null order by hospitalization desc");
        $bedC = DB::select("select id,name,hospitalization,bed,outcome from patients 
                                where bed = 'C' and outcome is null order by hospitalization desc");
        $bedD = DB::select("select id,name,hospitalization,bed,outcome from patients 
                                where bed = 'D' and outcome is null order by hospitalization desc");
        $bedE = DB::select("select id,name,hospitalization,bed,outcome from patients 
                                where bed = 'E' and outcome is null order by hospitalization desc");
        $bedF = DB::select("select id,name,hospitalization,bed,outcome from patients 
                                where bed = 'F' and outcome is null order by hospitalization desc");
        
        $patients = ['A'=>count($bedA) == 0 ? null: $bedA[0],
                    'B'=>count($bedB) == 0 ? null: $bedB[0],
                    'C'=>count($bedC) == 0 ? null: $bedC[0],
                    'D'=>count($bedD) == 0 ? null: $bedD[0],
                    'E'=>count($bedE) == 0 ? null: $bedE[0],
                    'F'=>count($bedF) == 0 ? null: $bedF[0]
                ];

        return $patients;
    }
}
