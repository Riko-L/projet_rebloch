@extends('layouts.template')


@section('head_title')
    <title>Rebloch'Social</title>
@endsection

@section('page_title')
    <h1 class="titre">Rebloch' Connection</h1>
@endsection

@section('content')
    <div class="col l6 s6 offset-l3 offset-s3 center-align">
        <form method="POST" action="{{ route('login') }}" class="form">
            @csrf
            <div class="row">

                <div class="row">
                    <div class="input-field">
                        <input name="lastname" id="lastname" type="text"
                               value="{{ old('lastname') }}" class="validate" required autofocus>
                        <label class="active" for="lastname">Nom</label>
                        @if($errors->has('lastname')) <p> {{ $errors->first('lastname') }}</p> @endif
                    </div>
                </div>
                <div class="row">
                    <div class="input-field">
                        <input name="email" id="email" type="email"
                               class="validate" value="{{ old('email') }}" required>
                        <label class="active" for="email">E-mail</label>
                        @if ($errors->has('email')) <p>{{ $errors->first('email') }}</p> @endif
                    </div>
                </div>
                <div class="row">
                    <div class="input-field">
                        <input name="password" id="password" type="password" class="validate" required>
                        <label class="active" for="password">Mot de passe</label>
                        @if ($errors->has('password')) <p>{{ $errors->first('password') }}</p> @endif
                    </div>
                </div>

                <div class="row">
                    <div>
                        <input type="checkbox" class="filled-in" id="remember"
                               name="remember" {{ old('remember') ? 'checked' : '' }}/>
                        <label for="remember">Se souvenir de moi</label>
                        @if ($errors->has('remember')) <p>{{ $errors->first('remember') }}</p> @endif
                    </div>
                </div>

                <div class="row">
                    <div class="input-field">
                        <button class="btn waves-effect waves-light" type="submit" name="submit_login">CONNECTION
                            <i class="material-icons right">send</i>
                        </button>

                        <a class="btn waves-effect waves-light" href="{{ route('password.request') }}"
                           name="submit_reset">MOT DE PASSE OUBLIE
                            <i class="material-icons right">send</i>
                        </a>
                    </div>

                </div>
            </div>
        </form>
    </div>
@endsection
