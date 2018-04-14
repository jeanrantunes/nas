<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();
        date_default_timezone_set('America/Sao_Paulo');
        $this->call('ComorbiditiesSeeder');
        // $this->call('HospitalsSeeder');
        // $this->call('OccupationSeeder');
    }
}

class HospitalsSeeder extends Seeder 
{
    public function run() 
    {   
        DB::table('hospitals')->delete();
        DB::table('hospitals')->insert([
            'name' => 'Hospital Escola UFPel',
            'initials' => 'HEUFPel',
            'created_at' => date("Y-m-d h:i:s"),
            'updated_at' => date("Y-m-d h:i:s"),
        ]);
    }
}
class OccupationSeeder extends Seeder 
{
    public function run()
    {
        DB::table('occupations')->delete();
        DB::table('occupations')->insert([
            'occupation' => 'Enfermeira(o)',
            'created_at' => date("Y-m-d h:i:s"),
            'updated_at' => date("Y-m-d h:i:s"),
        ]);
        DB::table('occupations')->insert([
            'occupation' => 'Médico(a)',
            'created_at' => date("Y-m-d h:i:s"),
            'updated_at' => date("Y-m-d h:i:s"),
        ]);
        DB::table('occupations')->insert([
            'occupation' => 'Aux. Enfermagem',
            'created_at' => date("Y-m-d h:i:s"),
            'updated_at' => date("Y-m-d h:i:s"),
        ]);
    }
}
class HospitalizationReasonSeeder extends Seeder
{
    public function run()
    {
        DB::table('hospitalization_reasons')->delete();
        DB::table('hospitalization_reasons')->insert([
            'name' => 'Abcesso pélvico',
            'created_at' => date("Y-m-d h:i:s"),
            'updated_at' => date("Y-m-d h:i:s"),
        ]);
        DB::table('hospitalization_reasons')->insert([
            'name' => 'Colite pseudomembranosa',
            'created_at' => date("Y-m-d h:i:s"),
            'updated_at' => date("Y-m-d h:i:s"),
        ]);
        DB::table('hospitalization_reasons')->insert([
            'name' => 'Pneumonia',
            'created_at' => date("Y-m-d h:i:s"),
            'updated_at' => date("Y-m-d h:i:s"),
        ]);
        DB::table('hospitalization_reasons')->insert([
            'name' => 'H1N1',
            'created_at' => date("Y-m-d h:i:s"),
            'updated_at' => date("Y-m-d h:i:s"),
        ]);
        DB::table('hospitalization_reasons')->insert([
            'name' => 'Oncológico',
            'created_at' => date("Y-m-d h:i:s"),
            'updated_at' => date("Y-m-d h:i:s"),
        ]);
        DB::table('hospitalization_reasons')->insert([
            'name' => 'Leucemia',
            'created_at' => date("Y-m-d h:i:s"),
            'updated_at' => date("Y-m-d h:i:s"),
        ]);
        DB::table('hospitalization_reasons')->insert([
            'name' => 'Rebaixamento sensório',
            'created_at' => date("Y-m-d h:i:s"),
            'updated_at' => date("Y-m-d h:i:s"),
        ]);
        DB::table('hospitalization_reasons')->insert([
            'name' => 'Plaquetopenia',
            'created_at' => date("Y-m-d h:i:s"),
            'updated_at' => date("Y-m-d h:i:s"),
        ]);
        DB::table('hospitalization_reasons')->insert([
            'name' => 'IRA',
            'created_at' => date("Y-m-d h:i:s"),
            'updated_at' => date("Y-m-d h:i:s"),
        ]);
        DB::table('hospitalization_reasons')->insert([
            'name' => 'PO de Mediastinoscopia',
            'created_at' => date("Y-m-d h:i:s"),
            'updated_at' => date("Y-m-d h:i:s"),
        ]);
        DB::table('hospitalization_reasons')->insert([
            'name' => 'PO de ileocolectomia',
            'created_at' => date("Y-m-d h:i:s"),
            'updated_at' => date("Y-m-d h:i:s"),
        ]);
        DB::table('hospitalization_reasons')->insert([
            'name' => 'Pós PCR',
            'created_at' => date("Y-m-d h:i:s"),
            'updated_at' => date("Y-m-d h:i:s"),
        ]);
        DB::table('hospitalization_reasons')->insert([
            'name' => 'Sepse abdominal',
            'created_at' => date("Y-m-d h:i:s"),
            'updated_at' => date("Y-m-d h:i:s"),
        ]);
        DB::table('hospitalization_reasons')->insert([
            'name' => 'Cirrose hepática',
            'created_at' => date("Y-m-d h:i:s"),
            'updated_at' => date("Y-m-d h:i:s"),
        ]);
        DB::table('hospitalization_reasons')->insert([
            'name' => 'Meningite',
            'created_at' => date("Y-m-d h:i:s"),
            'updated_at' => date("Y-m-d h:i:s"),
        ]);
        DB::table('hospitalization_reasons')->insert([
            'name' => 'Sepse Pulmonar',
            'created_at' => date("Y-m-d h:i:s"),
            'updated_at' => date("Y-m-d h:i:s"),
        ]);
        DB::table('hospitalization_reasons')->insert([
            'name' => 'PO de Hepatectomia',
            'created_at' => date("Y-m-d h:i:s"),
            'updated_at' => date("Y-m-d h:i:s"),
        ]);
        DB::table('hospitalization_reasons')->insert([
            'name' => 'Choque séptico abdominal',
            'created_at' => date("Y-m-d h:i:s"),
            'updated_at' => date("Y-m-d h:i:s"),
        ]);
        DB::table('hospitalization_reasons')->insert([
            'name' => 'Icterícia',
            'created_at' => date("Y-m-d h:i:s"),
            'updated_at' => date("Y-m-d h:i:s"),
        ]);
        DB::table('hospitalization_reasons')->insert([
            'name' => 'Pré op. hepatectomia',
            'created_at' => date("Y-m-d h:i:s"),
            'updated_at' => date("Y-m-d h:i:s"),
        ]);
        DB::table('hospitalization_reasons')->insert([
            'name' => 'Neutropenia febril',
            'created_at' => date("Y-m-d h:i:s"),
            'updated_at' => date("Y-m-d h:i:s"),
        ]);
        DB::table('hospitalization_reasons')->insert([
            'name' => 'IRA em HD',
            'created_at' => date("Y-m-d h:i:s"),
            'updated_at' => date("Y-m-d h:i:s"),
        ]);
    }
}
class OriginSeeder extends Seeder
{
    public function run()
    {
        DB::table('origins')->delete();
        DB::table('origins')->insert([
            'name' => 'Cirúrgica',
            'created_at' => date("Y-m-d h:i:s"),
            'updated_at' => date("Y-m-d h:i:s"),
        ]);
        DB::table('origins')->insert([
            'name' => 'PSP',
            'created_at' => date("Y-m-d h:i:s"),
            'updated_at' => date("Y-m-d h:i:s"),
        ]);
        DB::table('origins')->insert([
            'name' => 'RUE 1',
            'created_at' => date("Y-m-d h:i:s"),
            'updated_at' => date("Y-m-d h:i:s"),
        ]);
        DB::table('origins')->insert([
            'name' => 'RUE 2',
            'created_at' => date("Y-m-d h:i:s"),
            'updated_at' => date("Y-m-d h:i:s"),
        ]);
        DB::table('origins')->insert([
            'name' => 'Bloco FAU',
            'created_at' => date("Y-m-d h:i:s"),
            'updated_at' => date("Y-m-d h:i:s"),
        ]);
        DB::table('origins')->insert([
            'name' => 'Clínica médica',
            'created_at' => date("Y-m-d h:i:s"),
            'updated_at' => date("Y-m-d h:i:s"),
        ]);
        DB::table('origins')->insert([
            'name' => 'HUSFP',
            'created_at' => date("Y-m-d h:i:s"),
            'updated_at' => date("Y-m-d h:i:s"),
        ]);
        DB::table('origins')->insert([
            'name' => 'Outro',
            'created_at' => date("Y-m-d h:i:s"),
            'updated_at' => date("Y-m-d h:i:s"),
        ]);
    }
}
class ComorbiditiesSeeder extends Seeder
{
    public function run() 
    {
        DB::table('comorbidities')->delete();
        DB::table('comorbidities')->insert([
            'name' => 'HAS',
            'created_at' => date("Y-m-d h:i:s"),
            'updated_at' => date("Y-m-d h:i:s"),
        ]);
        DB::table('comorbidities')->insert([
            'name' => 'Fibrose cística',
            'created_at' => date("Y-m-d h:i:s"),
            'updated_at' => date("Y-m-d h:i:s"),
        ]);
        DB::table('comorbidities')->insert([
            'name' => 'Neoplasia de rim',
            'created_at' => date("Y-m-d h:i:s"),
            'updated_at' => date("Y-m-d h:i:s"),
        ]);
        DB::table('comorbidities')->insert([
            'name' => 'Neoplasia de pulmão',
            'created_at' => date("Y-m-d h:i:s"),
            'updated_at' => date("Y-m-d h:i:s"),
        ]);
        DB::table('comorbidities')->insert([
            'name' => 'Oncológico',
            'created_at' => date("Y-m-d h:i:s"),
            'updated_at' => date("Y-m-d h:i:s"),
        ]);
        DB::table('comorbidities')->insert([
            'name' => 'Mieloma múltiplo',
            'created_at' => date("Y-m-d h:i:s"),
            'updated_at' => date("Y-m-d h:i:s"),
        ]);
        DB::table('comorbidities')->insert([
            'name' => 'Neoplasia de esôfago',
            'created_at' => date("Y-m-d h:i:s"),
            'updated_at' => date("Y-m-d h:i:s"),
        ]);
        DB::table('comorbidities')->insert([
            'name' => 'Flutter atrial',
            'created_at' => date("Y-m-d h:i:s"),
            'updated_at' => date("Y-m-d h:i:s"),
        ]);
        DB::table('comorbidities')->insert([
            'name' => 'Neoplasia de pâncreas',
            'created_at' => date("Y-m-d h:i:s"),
            'updated_at' => date("Y-m-d h:i:s"),
        ]);
        DB::table('comorbidities')->insert([
            'name' => 'Diabete melittos',
            'initials' => 'DM',
            'created_at' => date("Y-m-d h:i:s"),
            'updated_at' => date("Y-m-d h:i:s"),
        ]);
        DB::table('comorbidities')->insert([
            'name' => 'Trombo embolia periférica',
            'initials' => 'TEP',
            'created_at' => date("Y-m-d h:i:s"),
            'updated_at' => date("Y-m-d h:i:s"),
        ]);
        DB::table('comorbidities')->insert([
            'name' => 'Insuficiência cardíaca congestiva',
            'initials' => 'ICC',
            'created_at' => date("Y-m-d h:i:s"),
            'updated_at' => date("Y-m-d h:i:s"),
        ]);
        DB::table('comorbidities')->insert([
            'name' => 'Trombose venosa profunda',
            'initials' => 'TVP',
            'created_at' => date("Y-m-d h:i:s"),
            'updated_at' => date("Y-m-d h:i:s"),
        ]);
        DB::table('comorbidities')->insert([
            'name' => 'Insuficiência renal aguda em hemodiálise',
            'initials' => 'IRA HD',
            'created_at' => date("Y-m-d h:i:s"),
            'updated_at' => date("Y-m-d h:i:s"),
        ]);
    }
}