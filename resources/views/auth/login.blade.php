@extends('layouts.login-layout')

@section('content')
    <div class="row">  
        <div class="col offset-xl4 xl4 offset-l3 l6 offset-m2 m8 s12">
            <div class="card">
                <form class="card-content" id="formInit" method="POST" action="{{ route('login') }}">
                    {{ csrf_field() }}
                        <div class="input-field col s12">
                            <i class="material-icons prefix">account_circle</i>
                            <input class="validate{{ $errors->has('email') ? 'invalid' : '' }}" type="email" id="email" name="email" value="{{ old('email') }}" autofocus>
                            <label for="email">E-Mail</label>
                            
                        </div>
                        
                        @if ($errors->has('email'))
                            <span class="mdl-textfield__error">{{ $errors->first('email') }}</span>  
                        @endif
                        
                        <div class="input-field col s12 {{ $errors->has('password') ? ' has-error' : '' }}">
                            <i class="material-icons prefix">lock_outline</i>
                            <input type="password" id="password" required name="password" class="validate">
                            <label for="password">Sua senha</label>
                        </div>
                        <div class="col s12 right-align">
                            <a class="" href="{{ route('password.request') }}">
                                Esqueceu sua senha?
                            </a>
                        </div>
                        @if ($errors->has('password'))
                            <span class="mdl-textfield__error">{{ $errors->first('password') }}</span>
                        @endif
                        <div class="row">
                            <div class="col s6 mt20">
                                <a class="" href="{{ route('register') }}">Crie uma conta!</a>
                            </div>
                            <div class="col s6">
                                <button class="btn waves-effect waves-light right mt20" type="submit">Login</button>
                            </div>
                        </div>
                        <!-- <label class="mdl-checkbox mdl-js-checkbox mdl-js-ripple-effect" for="checkbox-1">
                            <input type="checkbox" id="checkbox-1" class="mdl-checkbox__input" name="remember" {{ old('remember') ? 'checked' : '' }}>
                            <span class="mdl-checkbox__label">Lembrar-me</span>
                        </label> -->                        
                </form>
            </div>
        </div>        
    </div>
  
@endsection
