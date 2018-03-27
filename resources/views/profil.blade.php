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
                                {{--@if ($user->image_name === null)--}}

                                {{--@switch($user->genre)--}}

                                {{--@case ('male')--}}
                                {{--{{ Request::getSchemeAndHttpHost().'/img/profil/m'}}--}}
                                {{--@break--}}
                                {{--@case ('female')--}}
                                {{--{{ Request::getSchemeAndHttpHost().'/img/profil/f'}}--}}
                                {{--@break--}}
                                {{--@case('other')--}}
                                {{--{{ Request::getSchemeAndHttpHost().'/img/profil/o'}}--}}
                                {{--@break--}}
                                {{--@endswitch--}}

                                {{--@else--}}

                                {{--{{ Request::getSchemeAndHttpHost().'/img/profil/'.$user->id }}--}}

                                {{--@endif--}}

                                {{ $urlImg }}" alt="image profil"></a>
                            <span class="blue-text ">{{$user->firstname}}</span>
                            @if(Auth::User()->id == $user->id)
                                <a class="btn-floating halfway-fab waves-effect waves-light"><i
                                            class="material-icons">star rate</i></a>
                            @elseif($any_friend)
                                <a class="btn-floating halfway-fab waves-effect waves-light green pulse"
                                   href="{{ route('addFriends', ['id' => $user->id]) }}"><i
                                            class="material-icons">add</i></a>
                            @endif
                            @foreach(Auth::user()->friends as $friend)

                                @if($friend->id != $user->id)
                                    <a class="btn-floating halfway-fab waves-effect waves-light green pulse"
                                       href="{{ route('addFriends', ['id' => $user->id]) }}"><i
                                                class="material-icons">add</i></a>
                                @elseif($friend->id == $user->id)
                                    <a class="btn-floating halfway-fab waves-effect waves-light red"
                                       href="{{ route('removeFriends', ['id' => $user->id]) }}"><i
                                                class="material-icons">remove</i></a>
                                @endif
                            @endforeach



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
                <p>Hello <strong>{{$user->firstname}}</strong> tu as des nouvelles. </p>

                @if(Auth::user()->friends()->get() != '0')
                    <div class="col l4 ">
                        <h4>Amis</h4>
                        <ul class="collection">

                            @foreach (Auth::user()->friends as $friend)

                                <li class="collection-item avatar">
                                    <img src="{{ $urlImg }}" alt="profil_img" class="circle">
                                    <span class="title"><a
                                                href="{{route('profilID', $friend->id )}}">{{ $friend->getFullName() }} </a></span>
                                    <p>{{ $friend->email }}<br>
                                        <a href="{{ route('removeFriends', ['id' => $friend->id]) }}">Remove friend</a>
                                    </p>
                                    <a href="#!" class="secondary-content"><i class="material-icons">grade</i></a>
                                </li>

                            @endforeach

                        </ul>

                    </div>
                @endif
            @else
                <p>Profil de <strong>{{$user->firstname}} {{$user->lastname}}</strong></p>
            @endif

        </div>


    </div> {{--end row--}}
    <div class="row">
        <div class="col l12 card-panel blue lighten-3 center-align">
            <h3>REBLOCH'WALL</h3>
        </div>
    </div>

@endsection
