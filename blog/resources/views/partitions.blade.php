@extends('layouts.app')
@section('content')


    <h1>Partitions</h1>
	@foreach ($partitions as $partition)
		<a href="partitions/telecharger/{{ $partition->fichier }}"> {{ $partition->titre }} ({{ $partition->artiste }})</a><br />
	@endforeach
@endsection



