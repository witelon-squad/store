@extends('layout.main')
@section('header')
@endsection
@section('menu')
@endsection
@section('content')
    <main>
        <div class="container" style="margin-top: -100px">
            <section class="main_section">
                <div class="row">
                    <h2>Proponowane kategorie</h2>
                    <div class="col-lg-4 mb-5">
                        <div class="tile" style="background-image: url({{ asset('img/Acer-Swift-1-5.jpg') }});  height: 233px;">
                            <div class="tile_bg"></div>

                            <div class="tile_text"> LAPTOPY</div>
                        </div>
                    </div>
                    <div class="col-lg-4 mb-5">
                        <div class="tile" style="background-image: url({{ asset('img/Acer-Swift-1-5.jpg') }});  height: 233px;">
                            <div class="tile_bg"></div>

                            <div class="tile_text"> LAPTOPY</div>
                        </div>
                    </div>
                    <div class="col-lg-4 mb-5">
                        <div class="tile" style="background-image: url({{ asset('img/Acer-Swift-1-5.jpg') }});  height: 233px;">
                            <div class="tile_bg"></div>

                            <div class="tile_text"> LAPTOPY</div>
                        </div>
                    </div>
                    <div class="col-lg-4 my_item"></div>
                </div>
            </section>
        </div>
        <div class="container" style="margin-top: -140px">
            <section class="main_section carousel_section">
                <div class="row">
                    <h2>Polecane</h2>
                    <div class="main-crousel" style="margin-top: -60px">
                        @foreach( $ad as $ads)
                        <a href="{{url('/shop/product/'.$ads->id)}}" class="main_carousel_link">
                            <div>
                                @if($ads->image == null)
                                    <img src="{{ asset('/img/Acer-Swift-1-5.jpg') }}" class="img-fluid">
                                @else
                                    <img src="{{ asset($ads->image) }}" class="img-fluid">
                                @endif
                                <div class="name">{{$ads->name}}</div>
                                <div class="price">{{number_format($ads->price ,2)}} zł</div>
                            </div>
                        </a>
                        @endforeach
                    </div>

                </div>
            </section>

        </div>
    </main>
@section('footer')
@endsection
@section('script')
@endsection
@endsection
