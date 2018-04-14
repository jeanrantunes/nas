@extends('layouts.app')

@section('content')

            <table class="mdl-data-table mdl-js-data-table">
                <thead>
                    <tr>    
                        <th class="mdl-data-table__cell--non-numeric">Leito</th>
                        <th class="mdl-data-table__cell--non-numeric">Paciente</th>
                        <th class="mdl-data-table__cell--non-numeric">NAS</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                @foreach ($patients as $patient)
                    @if ($patient != null)
                        <tr>
                            <td class="mdl-data-table__cell--non-numeric">{{$patient->bed}}</td>
                            <td class="mdl-data-table__cell--non-numeric">{{$patient->name}}</td>
                            <td class="mdl-data-table__cell--non-numeric"><a class="mdl-navigation__link" href="/register-nas">Cadastrar NAS</a></td>
                            <td>
                                <a class="mdl-navigation__link" role="button" data-toggle="collapse" href="#collapse{{$patient->id}}" aria-expanded="false" aria-controls="collapseExample">
                                    Adicionar desfecho &#9660;
                                </a>
                            </td>
                        </tr>
                        <!--<tr class="collapse" id="collapse{{$patient->id}}">
                            <td colspan="3">
                                <form action="/outcome" class="form-horizontal" method="post">
                                <input type="hidden" name="_token" value="{{{ csrf_token() }}}" />
                                <input type="hidden" name="patient" value="{{$patient->id}}">
                                    <div class="form-group">
                                        <label for="outcome" class="control-label">Desfecho</label>
                                        <select name="outcome" class="form-control" id="outcome">
                                            <option value="Alta">Alta</option>
                                            <option value="Óbito">Óbito</option>
                                        </select>
                                    </div> 
                                    <div class="form-group">
                                        <label for="outcome-date" class="control-label">Data do desfecho:</label>
                                        <input id="outcome-date" type="datetime-local" class="form-control" name="outcome-date">
                                    </div>
                                    <button type="submit" class="btn btn-primary btn-block pull-right">Ok</button>
                                </form>
                            </td> 
                        </tr>-->
                    @endif
                @endforeach
                </tbody>
            </table>
        </div>
        
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">NAS Dashboard</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif


                    <nav>
                        <ul>
                            <li>
                                <a href="/register-patient">Adicionar paciente</a>
                            </li>
                            <li>
                                <a href="/historic-patients">Histórico de pacientes</a>
                            </li>
                        </ul>
                    </nav>
                    
                </div>
            </div>
   
@endsection
