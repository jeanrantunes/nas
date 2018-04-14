@extends('layouts.app')

@section('content')
<h1>Paciente</h1>
<form action="/register-patient/add" class="form-horizontal" method="post">
    <input type="hidden" name="_token" value="{{{ csrf_token() }}}" />
    <div class="form-group">
        <label for="name" class="col-md-4 control-label">Nome</label>
        <div class="col-md-6">
            <input id="name" type="text" class="form-control" name="name">
        </div>
    </div>
    <div class="form-group">
        <label for="birthday" class="col-md-4 control-label">Aniversário</label>
        <div class="col-md-6">
            <input id="birthday" type="date" class="form-control" name="birthday">
        </div>
    </div>
    <div class="form-group">
        <label for="hospitalization" class="col-md-4 control-label">Data internação</label>
        <div class="col-md-6">
            <input id="hospitalization" type="datetime-local" class="form-control" name="hospitalization">
        </div>
    </div>
    <div class="form-group">
        <label for="bed" class="col-md-4 control-label">Cama</label>
        <div class="col-md-6">
            <input type="radio" name="bed" value="A" checked>A
            <input type="radio" name="bed" value="B">B
            <input type="radio" name="bed" value="C">C
            <input type="radio" name="bed" value="D">D
            <input type="radio" name="bed" value="E">E
            <input type="radio" name="bed" value="F">F
        </div>
    </div>
    <div class="form-group">
        <label for="saps" class="col-md-4 control-label">SAPS III</label>
        <div class="col-md-6">
            <input id="saps" type="number" class="form-control" name="saps">
        </div>
    </div>
    <div class="form-group">
        <label for="origin" class="col-md-4 control-label">Procedência</label>
        <div class="col-md-6">
            <select name="origin" class="form-control" id="origin"></select>
        </div>
    </div>
    <div class="form-group">
        <label for="hospitalization_reasons" class="col-md-4 control-label">Motivo internação</label>
        <div class="col-md-6">
            <select name="hospitalization_reasons[]" class="form-control selectpicker" id="hospitalization_reasons" multiple data-live-search="true"></select>
        </div>
    </div>
    <div class="form-group">
        <label for="comorbidities" class="col-md-4 control-label">Comorbidades</label>
        <div class="col-md-6">
            <select name="comorbidities[]" class="form-control selectpicker" id="comorbidities" multiple data-live-search="true"></select>
        </div>
    </div>
    <div class="form-group">
        <button type="submit" class="btn btn-primary btn-block pull-right" style="width: 100px; margin-right: 246px;">Adicionar</button>
    </div>
</form>
<script src="{{ asset('js/scriptPatient.js') }}" defer></script>
@endsection