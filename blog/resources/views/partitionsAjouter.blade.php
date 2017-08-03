@extends('layouts.app')
@section('content')

@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
<form action="/partitions/store" method="post" enctype="multipart/form-data">
    {{ csrf_field() }}
    <label for="artiste">Auteur</label>
    <input type="text" name="artiste" id="artiste" value="{{ old('artiste') }}">
    <br />
    <label for="titre">Titre</label>
    <input type="text" name="titre" id="titre"  value="{{ old('titre') }}">
    <br />
    <input type="file" name="fichier" id="fichier">
    <br />
    <button type="submit">Ajouter</button>
</form>
@endsection