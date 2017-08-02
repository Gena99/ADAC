@extends('layouts.app')
@section('content')


    <h1 class="partition">Liste des partitions</h1>
	<div class="links">
	<a href="{{ route('ajouterPartition') }}">Ajouter</a></div>

	<br />
	<div class="liens">
	@foreach ($partitions as $partition)
		<a href="partitions/telecharger/{{ $partition->fichier }}"> {{ $partition->titre }} ({{ $partition->artiste }})</a> <a href="/partitions/supprimer/{{ $partition->id }}">del</a><br />
	@endforeach
			</div>


</body>
@endsection

