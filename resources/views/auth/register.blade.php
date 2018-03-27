@extends('layouts.template')


@section('head_title')
    <title>Rebloch'Social</title>
@endsection

@section('page_title')
    <h1 class="titre">Rebloch' Inscription</h1>
@endsection

@section('content')
    <div class="col l6 s6 offset-l3 offset-s3 center-align">

        <form method="POST" enctype="multipart/form-data" action="{{ route('register') }}" class="form">
            @csrf
            <div class="row">
                <div class="input-field">
                    <select name="genre" id="genre" required>
                        <option value="" disabled selected>Faite votre choix</option>
                        <option value="male">Homme</option>
                        <option value="female">Femme</option>
                        <option value="other">Other</option>
                    </select>
                    <label for="genre">Genre</label>
                    @if ($errors->has('genre')) <p>{{ $errors->first('genre') }}</p>@endif
                </div>
            </div>
            <div class="row">
                <div class="file-field input-field">
                    <div class="btn">
                        <span>Image Profil</span>
                        <input type="file" name="image" accept=".jpg, .jpeg, .png">
                    </div>
                    <div class="file-path-wrapper">
                        <input class="file-path validate" type="text">
                        @if ($errors->has('image')) <p>{{ $errors->first('image') }}</p>@endif

                    </div>
                </div>
            </div>
            <div class="row">
                <div class="input-field">
                    <input name="lastname" id="lastname" type="text" value="{{ old('lastname') }} " class="validate"
                           required>
                    <label class="active" for="lastname">Nom</label>
                    @if($errors->has('lastname'))<p>{{$errors->first('lastname') }}</p>@endif
                </div>
            </div>
            <div class="row">
                <div class="input-field">
                    <input name="firstname" id="firstname" type="text" value="{{ old('firstname') }} " class="validate"
                           required>
                    <label class="active" for="firstname">Prénom</label>
                    @if($errors->has('firstname'))<p>{{$errors->first('firstname') }}</p>@endif
                </div>
            </div>
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
                <div>
                    <input type="checkbox" class="filled-in" id="accord_cgv" name="accord_cgv" required>
                    <label for="accord_cgv">J'accepte les conditions générales</label>
                    @if ($errors->has('accord_cgv')) <p>{{ $errors->first('accord_cgv') }}</p> @endif
                </div>
            </div>
            <div class="row">
                <div class="input-field">
                    <button class="btn waves-effect waves-light" type="submit" name="submit_signup">Valider
                        <i class="material-icons right">send</i>
                    </button>
                </div>
            </div>
        </form>
    </div>

@endsection
