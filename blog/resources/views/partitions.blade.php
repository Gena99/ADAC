@extends('layouts.app')
@section('content')


    <h1>Partitions</h1>
	<a href="{{ route('ajouterPartition') }}">Ajouter</a>
	<br />
	@foreach ($partitions as $partition)
		<a href="partitions/telecharger/{{ $partition->fichier }}"> {{ $partition->titre }} ({{ $partition->artiste }})</a> <a href="/partitions/supprimer/{{ $partition->id }}">del</a><br />
	@endforeach
@endsection



