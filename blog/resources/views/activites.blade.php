<body>
<div class="flex-center position-ref full-height">
    @if (Route::has('activites'))
        <div class="top-right links">
             (Auth::check())
                <a href="{{ url('/activites') }}">Activités</a>


            @endif
        </div>
