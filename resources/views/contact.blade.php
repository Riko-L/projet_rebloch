@extends('layouts.template')


@section('head_title')
    <title>Rebloch'Social</title>
@endsection

@section('page_title')
    <h1 class="titre">Rebloch' Contact</h1>
@endsection

@section('content')

    <div class="row">
        <section class="section col l6 s12">
            <article>
                <h4>Formulaire de contact</h4>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Odio doloremque veniam, accusantium nobis aliquam rem corporis amet modi optio ea alias quis placeat, quod voluptas ab nostrum explicabo sunt eius!</p>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Odio doloremque veniam, accusantium nobis aliquam rem corporis amet modi optio ea alias quis placeat, quod voluptas ab nostrum explicabo sunt eius!</p>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Odio doloremque veniam, accusantium nobis aliquam rem corporis amet modi optio ea alias quis placeat, quod voluptas ab nostrum explicabo sunt eius!</p>
            </article>

        </section>

        <form class="col l6 s12" method="POST">
            @csrf
            <div class="row">
                <div class="input-field col s6">
                    <i class="material-icons prefix">account_circle</i>
                    <input id="lastname" name="lastname" type="text" class="validate" required>
                    <label for="lastnamename">Nom</label>
                </div>

                <div class="input-field col s6">
                    <i class="material-icons prefix">account_circle</i>
                    <input id="firstname" name="firstname" type="text" class="validate">
                    <label for="firstname">Prénom</label>
                </div>

                <div class="input-field col s12">
                    <i class="material-icons prefix">email</i>
                    <input id="email" name="email" type="email" class="validate" required>
                    <label for="email">E-mail</label>
                </div>
            </div>
            <div class="row">
                <div class="input-field col s12">
                    <i class="material-icons prefix">message</i>
                    <textarea id="message" name="message" class="materialize-textarea" data-length="500" maxlength="500"
                              required></textarea>
                    <label for="message">Votre message</label>
                </div>
            </div>
            <div class="row center-align">
                <button class="btn waves-effect waves-light" type="submit" name="send">Envoyer
                    <i class="material-icons right">send</i>
                </button>
            </div>
        </form>
    </div>

@endsection
