<header>
    <div class="logo">
        <img src="{{asset('img/marchio-sito-test.png')}}" alt="Logo La Molisana">
    </div>
    <nav class="main-nav">
        <ul>
            <li class="{{Route::is('home') ? 'active' : ''}}"><a href="{{route('home')}}">Home</a></li>
            <li class="{{Route::is('product')? 'active' : ''}}"><a href="{{route('product', ['id' => 0])}}">Prodotti</a></li>
            <li><a href="">Contatti</a></li>
        </ul>
    </nav>
</header>