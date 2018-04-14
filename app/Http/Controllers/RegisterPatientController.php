<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Request;

class RegisterPatientController extends Controller
{
    protected $user;
     /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $this->getContentDropdows();
        return view('register-patient');
    }
    public function add() {
        /*filds of form*/
        $name = Request::input('name');
        $birthday = Request::input('birthday');
        $hospitalization = Request::input('hospitalization');
        $bed = Request::input('bed');
        $saps = Request::input('saps');
        $origin = Request::input('origin');
        $hospitalization_reasons = Request::input('hospitalization_reasons');
        $comorbidities = Request::input('comorbidities');
        
        /*current user*/
        $user = Auth::user();
        
        date_default_timezone_set('America/Sao_Paulo');
        if(DB::table('patients')->insert([
            'name' => $name,
            'birthday' => $birthday,
            'hospitalization' => $hospitalization,
            'bed' => $bed,
            'saps_iii' => $saps,
            'id_origin' => $origin,
            'id_user' => $user->id,
            'created_at' => date("Y-m-d h:i:s"),
            'updated_at' => date("Y-m-d h:i:s")
        ])){

            $id_patient = DB::table('patients')->select('id')->where('name','=',$name)->get();
            if(count($hospitalization_reasons) > 0) {
                foreach($hospitalization_reasons as $value) {
                    DB::table('patient_hospitalizations')->insert([
                        'id_patient' => $id_patient[0]->id,
                        'id_hospitalization_reasons' => $value
                    ]);
                }
            }
            if(count($comorbidities) > 0) {
                foreach($comorbidities as $value) {
                    DB::table('patient__comorbidities')->insert([
                        'id_patient' => $id_patient[0]->id,
                        'id_comorbidities' => $value
                    ]);
                }
            }   
        }
        

       
    }
    public function getContentDropdows() {
        $comorbidities = DB::select('select id,name,initials from comorbidities');
        $origins = DB::select('select id,name from origins');
        $hospitalizationReasons = DB::select('select id,name from hospitalization_reasons');
        $data = ['comorbidities' => $comorbidities,
                 'origins' => $origins,
                'hospitalizationReasons' => $hospitalizationReasons];
        
        /*gera um json com os dados*/
        $fp = fopen('json\dataPatient.json', 'w');
        fwrite($fp, json_encode($data));
    }
}
