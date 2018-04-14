@extends('layouts.login-layout')

@section('content')
<link rel="stylesheet" href="css/getmdl-select.min.css">
<link rel="stylesheet" href="css/mdl-date-textfield.min.css">
<div class="mdl-grid">
    <div class="mdl-cell mdl-cell--12-col">
        <form class="demo-card-square mdl-card mdl-shadow--16dp" method="POST" >
            {{ csrf_field() }}

            <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label{{ $errors->has('name') ? ' has-error' : '' }}">
                <input class="mdl-textfield__input" type="text" id="name" name="name" value="{{ old('name') }}" required autofocus>
                <label class="mdl-textfield__label" for="name">Nome</label>
                @if ($errors->has('name'))
                    <span class="mdl-textfield__error">{{ $errors->first('name') }}</span>
                @endif
            </div>

            <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label{{ $errors->has('email') ? ' has-error' : '' }}">
                <input class="mdl-textfield__input" type="text" id="email" name="email" value="{{ old('email') }}" required>
                <label class="mdl-textfield__label" for="email">E-mail</label>
                @if ($errors->has('email'))
                    <span class="mdl-textfield__error">{{ $errors->first('email') }}</span>
                @endif
            </div>


            <div class="mdl-date-textfield mdl-js-date-textfield mdl-date-textfield--floating-label{{ $errors->has('birthday') ? ' has-error' : '' }}">
                <input class="mdl-date-textfield__input" type="text" id="birthday" name="birthday" required>
                <label class="mdl-date-textfield__label" for="birthday">Data de aniversário</label>
                
                @if ($errors->has('birthday'))
                    <span class="mdl-textfield__error">{{ $errors->first('birthday') }}</span>
                @endif
            </div>
            
            <!-- <div class="form-group{{ $errors->has('birthday') ? ' has-error' : '' }}">
                <label for="birthday" class="col-md-4 control-label">Birthday</label>

                <div class="col-md-6">
                    <input id="birthday" type="text" class="form-control" name="birthday" required>

                    @if ($errors->has('birthday'))
                        <span class="help-block">
                            <strong>{{ $errors->first('birthday') }}</strong>
                        </span>
                    @endif
                </div>
            </div> -->

            <!-- <div class="form-group{{ $errors->has('hospital') ? ' has-error' : '' }}">
                <label for="hospital" class="col-md-4 control-label">Hospital</label>

                <div class="col-md-6">
                    <select name="hospital" class="form-control" id="hospital">
                        
                    </select>

                    @if ($errors->has('hospital'))
                        <span class="help-block">
                            <strong>{{ $errors->first('hospital') }}</strong>
                        </span>
                    @endif 
                </div>
            </div> -->
            <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label getmdl-select getmdl-select__fullwidth">
                <input class="mdl-textfield__input" type="text" id="hospital" value="" readonly tabIndex="-1">
                <label for="hospital">
                    <i class="mdl-icon-toggle__label material-icons">keyboard_arrow_down</i>
                </label>
                <label for="hospital" class="mdl-textfield__label">Hospital</label>
                <ul for="hospital" id="hospital-list" class="mdl-menu mdl-menu--bottom-left mdl-js-menu">
                
                </ul>
            </div>
            <!-- <div class="form-group{{ $errors->has('occupation') ? ' has-error' : '' }}">
                <label for="occupation" class="col-md-4 control-label">Occupation</label>

                <div class="col-md-6">
                    <select name="occupation" class="form-control" id="occupation">
                    
                    </select>
                    
                     @if ($errors->has('occupation'))
                        <span class="help-block">
                            <strong>{{ $errors->first('occupation') }}</strong>
                        </span>
                    @endif 
                </div>
            </div> -->
            <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label getmdl-select getmdl-select__fullwidth">
                <input class="mdl-textfield__input" type="text" id="occupation" value="" readonly tabIndex="-1">
                <label for="occupation">
                    <i class="mdl-icon-toggle__label material-icons">keyboard_arrow_down</i>
                </label>
                <label for="occupation" class="mdl-textfield__label">Cargo</label>
                <ul for="occupation" id="occupation-list" class="mdl-menu mdl-menu--bottom-left mdl-js-menu">
                
                </ul>
            </div>
            <!-- <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                <label for="password" class="col-md-4 control-label">Password</label>

                <div class="col-md-6">
                    <input id="password" type="password" class="form-control" name="password" required>

                    @if ($errors->has('password'))
                        <span class="help-block">
                            <strong>{{ $errors->first('password') }}</strong>
                        </span>
                    @endif
                </div>
            </div> -->

            <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label{{ $errors->has('password') ? ' has-error' : '' }}">
                <label class="mdl-textfield__label" for="password">Escolha sua senha</label>
                <input class="mdl-textfield__input" type="password" id="password" required name="password">
                @if ($errors->has('password'))
                    <span class="mdl-textfield__error">{{ $errors->first('password') }}</span>
                @endif
            </div>

            <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label{{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
                <label class="mdl-textfield__label" for="password_confirmation">Confirme sua senha</label>
                <input class="mdl-textfield__input" type="password" id="password_confirmation" required name="password_confirmation">
                @if ($errors->has('password_confirmation'))
                    <span class="mdl-textfield__error">{{ $errors->first('password_confirmation') }}</span>
                @endif
            </div>
                    
            <!-- <div class="form-group">
                <label for="password-confirm" class="col-md-4 control-label">Confirm Password</label>

                <div class="col-md-6">
                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                </div>
            </div> -->
            
            <a class="mdl-navigation__link" href="{{ route('login') }}">Login</a>
            <button type="submit" class="mdl-button mdl-js-button mdl-button--raised mdl-button--colored btn-form">
                Cadastrar-se
            </button>
        </form>
    </div>
</div>

<script src="{{ asset('js/getmdl-select.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/date-textfield.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/script.js') }}" defer></script>

@endsection 
