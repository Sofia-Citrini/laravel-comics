@extends("layouts.app")

@section('content')

<section class="current-series">
    <div class="container">
        <div class="title">
            <h3>CURRENT SERIES</h3>
        </div>
    
        <div class="row my-4 gy-4 gx-3">
            @foreach ($listComics as $comic)    
                <div class="col-2">     
                    <div class="my-card">
                        <div class="ratio ratio-1x1">
                            <img src="{{$comic["thumb"]}}" alt="" class="img-fluid">
                        </div>
                        <div class="text-card">{{$comic["title"]}}</div>
                    </div>
                </div>
            @endforeach
        </div>
    
        <div class="text-center py-3">
            <button class="load-btn"><small>load more</small></button>
        </div>
    </div>

</section>

@include("partials.bannerInfo")


@endsection