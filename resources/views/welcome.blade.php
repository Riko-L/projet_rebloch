@extends('layouts.template')


@section('head_title')
    <title>Rebloch'Social</title>
@endsection

@section('page_title')
    <h1 class="titre">Rebloch' Social</h1>
    @endsection

@section('content')

    <!-- Première Ligne de la page -->
    <div class="row">
        <div class="col l6 s12 center-align">
            <h2>Nous Sommes</h2>
            <img class="responsive-img" src="https://lorempixel.com/600/300/people" alt="photo_presentation">
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Iste tempore vero consequatur minima, corrupti officiis
                quidem velit quam voluptates labore? Quam hic quas rem voluptate officia error dicta enim aperiam. </p>
        </div>
        <div class="col l6 s12 center-align">
            <h2>Le Network</h2>
            <img class="responsive-img" src="https://lorempixel.com/300/150/abstract" alt="photo_presentation">
            <img class="responsive-img" src="https://lorempixel.com/300/150/business" alt="photo_presentation">
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Iste tempore vero consequatur minima, corrupti officiis
                quidem velit quam voluptates labore? Quam hic quas rem voluptate officia error dicta enim aperiam. </p>
        </div>
    </div>
    <!-- Deuxieme Ligne de la page -->
    <div class="row">
        <div class="col offset-l3 l6  offset-xl3 xl6  s12">
            <!-- Ajout de Tweet dans la DIV -->
            <div class="pink lighten-2 section mytweet center-align">
                <h5 >
                    Prochainement les tweets du réseau !
                </h5>


            </div>
        </div>
    </div>


    <div class="row">
        <div class="col xl4 l12 s12 center-align">
            <h3>Enregistrez Vous</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellat, maxime veritatis et impedit eius numquam ratione
                reprehenderit nulla. Quae commodi iusto aliquam distinctio natus deserunt laudantium optio quas quidem sapiente.</p>
            <button class="btn" onclick="window.location.href='{{ route('register')}}'">Créer votre compte</button>
        </div>
        <div class="col xl4 l6 s12 center-align">
            <h3 class="header">Besoin d'informations</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellat, maxime veritatis et impedit eius numquam ratione
                reprehenderit nulla. Quae commodi iusto aliquam distinctio natus deserunt laudantium optio quas quidem sapiente.</p>
            <button class="btn" onclick="window.location.href='{{ route('contact')}}'">Contact</button>
        </div>
        <div class="col xl4 l6 s12 center-align follow">
            <h3 class="">Nous Suivre</h3>
            <a href="https://www.facebook.com" target="_blank">
                <i class="fa fa-facebook-square fa-4x" aria-hidden="true"></i>
            </a>
            <a href="https://www.tweeter.com" target="_blank">
                <i class="fa fa-twitter-square fa-4x" aria-hidden="true"></i>
            </a>
            <a href="https://www.linkedin.com" target="_blank">
                <i class="fa fa-linkedin-square fa-4x" aria-hidden="true"></i>
            </a>
        </div>
    </div>

@endsection

