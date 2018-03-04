@extends('layouts.template')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-title">Dashboard</div>



                <div class="card-content">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in! <img src="{{ asset( Auth::user()->image_link ) }}" alt="imageProfil">
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
