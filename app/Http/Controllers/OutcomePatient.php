<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Request;

class OutcomePatient extends Controller
{
     /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function setOutcome() {
         /*filds of form*/
         $idPatient = Request::input('patient');
         $outcome = Request::input('outcome');
         $outcomeDate = Request::input('outcome-date');
        
         if(DB::table('patients')
            ->where('id',$idPatient)
            ->update(['outcome' => $outcome, 'outcome_date' => $outcomeDate])
            ) {
                return "<script>window.location.href = '/';</script>"; 
            }
        else {
            return "<script>window.location.href = '/';</script>"; 
        }
    }
   
}
