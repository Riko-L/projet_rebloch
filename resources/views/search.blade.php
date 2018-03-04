@extends('layouts.template')


@section('head_title')
    <title>Rebloch'Social</title>
@endsection

@section('page_title')
    <h1 class="titre">Rebloch' Search</h1>
@endsection

@section('content')

    <div class="row">
        <div class="col s12">
            <div class="row">
                <div class="input-field col s12">
                    <i class="material-icons prefix">search</i>
                    <input type="search" id="autocomplete-input" class="autocomplete">
                    <label for="autocomplete-input">Recheche</label>
                </div>
            </div>
        </div>
    </div>
@endsection
