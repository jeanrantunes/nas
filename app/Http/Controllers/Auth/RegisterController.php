<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\DB;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/';
    
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        date_default_timezone_set('America/Sao_Paulo');
        $this->getContentDropdows();
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6|confirmed',
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => bcrypt($data['password']),
            'birthday' => $data['birthday'],
            'photo' => "/photos",
            'permission' => "w",
            'id_hospital' => intval($data['hospital']),
            'id_occupation' => intval($data['occupation']),
            // 'hospital' => $data['hospital'], 
            // 'occupation' => $data['occupation'],
        ]);
    }
    public function getContentDropdows() {
        $hospitals = DB::select('select id,name,initials from hospitals');
        $occupations = DB::select('select id,occupation from occupations');
        $data = ['hospitals' => $hospitals,
                 'occupations' => $occupations];
        
        /*gera um json com os dados*/
        $fp = fopen('json\data.json', 'w');
        fwrite($fp, json_encode($data));
        fclose($fp);
    }
    
}
