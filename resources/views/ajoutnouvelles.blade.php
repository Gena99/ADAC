@extends('layouts.app')
@section('content')

<div class="container">
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<div class="panel panel-default">
				<div class="panel-heading">Nouvelle News</div>

				<div class="panel-body">



					@if ($errors->any())
					<div class="alert alert-danger">
						<ul>
							@foreach ($errors->all() as $error)
							<li>{{ $error }}</li>
							@endforeach
						</ul>
					</div>
					@endif
					<form action="{{url('savenews') }}" method='POST' enctype="multipart/form-data">
						{{ csrf_field() }}
						<label for="title">Titre</label><br>
						<input type="text" name="titre" id="titre" value="{{ old('titre') }}"><br>
						<label for="author">Résumé</label><br>
						<input type="text" name="resume" id="resume" value="{{ old('resume') }}"><br>
						<label for="texte">Texte</label><br>
						<input type="textarea" name="texte" id="texte" value="{{ old('texte') }}"><br>
						<label for="pages">Evènement?</label><br>
						<input type="checkbox" name="evenement" id="evenement" "><br>
						<label for="date">Date de l'évènement (if exist)</label><br>
						<input type="text" name="date" id="date" value="{{ old('date') }}"><br>
						<button type="submit">Publier</button>
					</form>
					<br>
					<a href="/accueil"><i class="fa fa-backward" aria-hidden="true"></i>
					</a>
				</div>
			</div>
		</div>
	</div>
</div>


@endsection

