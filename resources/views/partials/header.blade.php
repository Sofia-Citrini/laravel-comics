
<header class="pb-3">
    <div class="bg-primary">
        <div class="container d-flex justify-content-end gap-5">
            <div class="text-white" style="font-size: .6rem">DC POWER&#8480; VISA&#174;</div>
            <div class="text-white" style="font-size: .6rem">ADDITIONAL DC SITE</div>
        </div>
    </div>

    <div class="container d-flex justify-content-between align-items-center pt-3">
        {{-- logo --}}
        <div class="img-container flex-shrink-0">
            <img src="{{Vite::asset('resources/img/dc-logo.png')}}" alt="" class="img-fluid">
        </div>

        {{-- navbar --}}
        <nav class="navbar navbar-expand-lg flex-grow-1">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-center" id="navbarNavAltMarkup">
                <div class="navbar-nav gap-4">
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

        {{-- searchbar --}}
        <div class="flex-shrink-0">
            <input class="search-bar" type="text" placeholder="Search">
        </div>
        {{-- <div class="input-group input-group-sm mb-3 flex-shrink-1">
            <input type="text" class="form-control" placeholder="Search" aria-label="Search" aria-describedby="basic-addon1">
        </div> --}}
    </div>

    {{-- jumbotron --}}
    <div class="jumbotron mt-3">
        <img src="{{Vite::asset('resources/img/jumbotron.jpg')}}" class="img-block" alt="">
    </div>
</header>