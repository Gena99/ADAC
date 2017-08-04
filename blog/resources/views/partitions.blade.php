@extends('layouts.app')
@section('content')


<h1 class="partition">Liste des partitions</h1>
<div class="links">
    <a href="{{ route('ajouterPartition') }}"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span></a>
</div>

<table class="table table-hover">
    <thead>
        <tr>
            <th>Artiste</th>
            <th>Titre</th>
            <th>Télécharger</th>
            <th>Supprimer</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($partitions as $partition)
        <tr>
            <td>{{ $partition->artiste }}</td>
            <td>{{ $partition->titre }}</td>
            <td><a href="partitions/telecharger/{{ $partition->fichier }}"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a></td>
            <td><a href="/partitions/supprimer/{{ $partition->id }}"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
        </tr>
        @endforeach
    </tbody>
</table>


</body>
@endsection

