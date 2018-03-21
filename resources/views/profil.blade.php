@extends('layouts.template')


@section('head_title')
    <title>Rebloch'Social</title>
@endsection

@section('page_title')

@endsection

@section('content')

    <div class="row">
        <div class="col l4">
            <div class="row">
                <div class="col s12 m6">
                    <div class="card">
                        <div class="card-image">
                            <a href="{{route('profilID', $user->id )}}">
                                <img src="
                                @if ($user->image_name === null)

                                @switch($user->genre)

                                @case ('male')
                                {{ Request::getSchemeAndHttpHost().'/img/profil/m'}}
                                @break
                                @case ('female')
                                {{ Request::getSchemeAndHttpHost().'/img/profil/f'}}
                                @break
                                @case('other')
                                {{ Request::getSchemeAndHttpHost().'/img/profil/o'}}
                                @break
                                @endswitch

                                @else

                                {{ Request::getSchemeAndHttpHost().'/img/profil/'.$user->id }}

                                @endif" alt="image profil"></a>
                            <span class="blue-text ">{{$user->name}}</span>
                            <a class="btn-floating halfway-fab waves-effect waves-light red pulse"><i
                                        class="material-icons">add</i></a>
                        </div>
                        <div class="card-content">
                            <p>Bienvenue sur Rebloch' social.</p>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <div id="head_profil" class="col l8 card-panel blue lighten-3">
            <h4>INFORMATION</h4>
            @if(Auth::user()->id == $user->id)
            <p>Hello <strong>{{$user->name}}</strong> tu as des nouvelles. </p>
            @else
                <p>Profil de <strong>{{$user->name}}</strong></p>
            @endif

        </div>
    </div> {{--end row--}}
    <div class="row">
        <div class="col l12 card-panel blue lighten-3 center-align">
            <h3>REBLOCH'WALL</h3>
        </div>
    </div>

@endsection
