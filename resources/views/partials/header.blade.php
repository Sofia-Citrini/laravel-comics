{{-- inserisco header
    che succesivamente inlcuderó nel mio layout --}}

<header class="py-3">
    <div class="container d-flex justify-content-between">
        {{-- logo --}}
        <div class="img-container">
            <img src="{{Vite::asset('resources/img/dc-logo.png')}}" alt="" class="img-fluid">
        </div>

        {{-- navbar --}}
        <nav class="navbar navbar-expand-lg">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                    <a class="nav-item nav-link" href="#">characters</a>
                    <a class="nav-item nav-link" href="#">comics</a>
                    <a class="nav-item nav-link" href="#">movies</a>
                    <a class="nav-item nav-link" href="#">tv</a>
                    <a class="nav-item nav-link" href="#">games</a>
                    <a class="nav-item nav-link" href="#">collectibles</a>
                    <a class="nav-item nav-link" href="#">videos</a>
                    <a class="nav-item nav-link" href="#">fans</a>
                    <a class="nav-item nav-link" href="#">news</a>
                    <a class="nav-item nav-link" href="#">shop</a>
                </div>
            </div>
        </nav>
    </div>

    {{-- jumbotron --}}
    <div class="jumbotron mt-3">
        <img src="{{Vite::asset('resources/img/jumbotron.jpg')}}" class="img-block" alt="">
    </div>
</header>