@extends('layouts.template')


@section('head_title')
    <title>Rebloch'Social</title>
@endsection

@section('page_title')
    <h1 class="titre">Rebloch' New Pass</h1>
@endsection

@section('content')
<div class="container">
    <div class="col l6 s6 offset-l3 offset-s3 center-align">

            <div class="card">
                <div class="card-title">Initialisation du mot de passe</div>
                <div class="card-content ">
                    @if (session('status'))
                        <div class="">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form method="POST" action="{{ route('password.email') }}">
                        @csrf


                        <div class="row">
                            <div class="input-field">
                                <input name="email" id="email" type="email"
                                       data-error="@if ($errors->has('email')) {{ $errors->first('email') }} @endif"
                                       class="validate" value="{{ old('email') }}" required>
                                <label class="active" for="email">E-mail</label>
                            </div>
                        </div>

                        <div class="row">
                            <div class="input-field">
                                <button class="btn waves-effect waves-light" type="submit" name="submit_login">INITIALISER LE MOT DE PASSE
                                    <i class="material-icons right">send</i>
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
