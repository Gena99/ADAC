@extends('layouts.app')
@section('content')

<h1 class="partition">ADAC LIVE</h1>

<div class="panel-body">
	@foreach ($nouvelles as $nouvelle)
	<div class="col-sm-4">
		<div class="card" style="width: 20rem;">
			<img class="card-img-top" src="notfound.png {{-- {{ $nouvelle->picture }} --}}" alt="{{ $nouvelle->title }}">
			<div class="card-block">
				<h4 class="card-title"><a href="nouvelle/{{ $nouvelle->title }}"></a>{{ $nouvelle->title }}</h4>
			</div>
			<ul class="list-group list-group-flush">
				<li class="list-group-item">Auteur: {{ $nouvelle->resume }}</li>
				<li class="list-group-item">Le:{{ $nouvelle->date_publi }}</li>
			</ul>
			<div class="card-block">

				<a class="card-link" href="/voirnews{{ $nouvelle->id }}">Voir plus</a>
			</div>
		</div>
	</div>
	@endforeach
</div>

@endsection

