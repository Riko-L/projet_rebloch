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

        <form class="col l6 s12">
            <div class="row">
                <div class="input-field col s6">
                    <i class="material-icons prefix">account_circle</i>
                    <input id="icon_last_name" type="text" class="validate">
                    <label for="icon_last_name">Nom</label>
                </div>

                <div class="input-field col s6">
                    <i class="material-icons prefix">account_circle</i>
                    <input id="icon_first_name" type="text" class="validate">
                    <label for="icon_first_name">Prénom</label>
                </div>

                <div class="input-field col s12">
                    <i class="material-icons prefix">email</i>
                    <input id="icon_email" type="email" class="validate">
                    <label for="icon_email">email</label>
                </div>
            </div>
            <div class="row">
                <div class="input-field col s12">
                    <i class="material-icons prefix">message</i>
                    <textarea id="textarea1" class="materialize-textarea" data-length="500" maxlength="500"></textarea>
                    <label for="textarea1">Votre message</label>
                </div>
            </div>
            <div class="row center-align">
                <button class="btn waves-effect waves-light" type="submit" name="action">Envoyer
                    <i class="material-icons right">send</i>
                </button>
            </div>
        </form>
    </div>

@endsection
