 @extends('template')
 @section('contenu')
     {!! Form::open(['url' => 'partitions']) !!}
    {!! Form::label('nom', 'Entrez le nom de l/n artiste : ') !!}
     {!! Form::text('nom') !!}
     {!! Form::label('titre', 'Entrez titre de la chanson : ') !!}
     {!! Form::text('titre') !!}

    {!! Form::submit('Envoyer !') !!}
    {!! Form::close() !!}

 @endsection
