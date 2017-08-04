@extends('layouts.app')
@section('content')


    <h1 class="partition">Nous Contacter</h1>
    @if(session('message'))
        <div class='alert alert-success'>
            {{ session('message') }}
        </div>
    @endif

    <form class="form-horizontal" method="POST" action="/contact">
        {{ csrf_field() }}
        <div class="form-group">
            <label for="Name">Nom: </label>
            <input type="text" class="form-control" id="name" placeholder="Votre nom" name="name" required>
        </div>
        <div class="form-group">
            <label for="email">Email: </label>
            <input type="text" class="form-control" id="email" placeholder="john@exemple.com" name="email" required>
        </div>

        <div class="form-group">
            <label for="message">message: </label>
            <textarea type="text" class="form-control luna-message" id="message"
                      placeholder="Taper votre message ici..." name="message" required></textarea>
        </div>

        <div class="form-group">
            <button type="submit" class="btn btn-primary" value="Send">Envoyer</button>
        </div>
    </form>

@endsection