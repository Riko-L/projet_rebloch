@extends('layouts.template')


@section('head_title')
    <title>Rebloch'Social</title>
@endsection

@section('page_title')
    <h1 class="titre">Rebloch' Modifier le mot de passe</h1>
@endsection


@section('content')
    <div class="col l6 s6 offset-l3 offset-s3 center-align">
        <form method="POST" action="{{ route('password.request') }}" class="form">
            @csrf
            <input type="hidden" name="token" value="{{ $token }}">
            <div class="row">
                <div class="input-field">
                    <input name="email" id="email" type="email" class="validate" value="{{ old('email') }}" required>
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
                <div class="input-field">
                    <input name="password_confirmation" id="password_confirmation" type="password" class="validate"
                           required>
                    <label class="active" for="password_confirmation">Confirmer le mot de passe</label>
                </div>
            </div>

            <div class="row">
                <div class="input-field">
                    <button class="btn waves-effect waves-light" type="submit" name="submit_reset">RESET PASSWORD
                        <i class="material-icons right">send</i>
                    </button>
                </div>
            </div>
        </form>
    </div>
@endsection
