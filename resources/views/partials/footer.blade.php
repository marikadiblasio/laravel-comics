<div class="bg-primary">
    <div class="container">
        <div class="row">
            @foreach (config('partialsdb.mainLinks') as $link )
            <div class="col py-md-3 py-0 pe-3 d-flex align-items-center">
                <div class="rem-3 pe-2"><img class="img-fluid" src="$link['image']" alt="digital"></div>
                <div>
                    <a href="#"><h6 class="text-uppercase text-white">{{ $link['text'] }}</h6></a>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
