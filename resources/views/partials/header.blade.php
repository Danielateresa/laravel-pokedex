<header>
    <div class="text-center pb-4">
        <img class="logo" src="{{Vite::asset('resources/img/images.png')}}" alt="Pokemon logo">
        <h1 class="text-center text-secondary fs-2 pb-2">Database</h1>
        <img class="pokeball" src="{{Vite::asset('resources/img/pokemon-symbol-logo-png-31.png')}}" alt="Pokeball">
    </div>
    <nav class="nav justify-content-center">
        <a class="nav-link {{Route::currentRouteName() === 'index' || Route::currentRouteName() === 'pokemon.index' ? 'active' : ''}}"
            href="{{route('pokemon.index')}}" aria-current="page">Home</a>
        <a class="nav-link nav-link {{Route::currentRouteName() === 'story' || Route::currentRouteName() === 'story' ? 'active' : ''}}"
            href="{{route('story')}}">Pokemon Story</a>
        <a class="nav-link" href="#">Shop</a>
    </nav>

</header>