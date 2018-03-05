@extends('layouts.template')


@section('head_title')
    <title>Rebloch'Social</title>
@endsection

@section('page_title')
    <h1 class="titre">Rebloch' Mon Profile</h1>
@endsection

@section('content')

    <div class="row">
        <div class="col l4">
            <div class="row">
                <div class="col s12 m6">
                    <div class="card">
                        <div class="card-image">
                            <img src="
                                        @if (Auth::user()->image_name === null)
                            {{ Request::getSchemeAndHttpHost().'/img/profil/0'}}
                            @else
                            {{ Request::getSchemeAndHttpHost().'/img/profil/'.Auth::user()->id }}

                            @endif" alt="image profil">
                            <span class="card-title">{{Auth::user()->name}}</span>
                            <a class="btn-floating halfway-fab waves-effect waves-light red"><i class="material-icons">add</i></a>
                        </div>
                        <div class="card-content">
                            <p>Bienvenue sur Rebloch' social.</p>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </div>


@endsection
