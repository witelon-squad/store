@extends('layout.main')
@section('header')
@endsection
@section('menu')
@endsection
@section('content')
    <main>
        <div class="container">
            <section class="main_section">
                <div class="row">
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
        <div class="container">
            <section class="main_section carousel_section">
                <div class="row">
                    <h2>Polecane</h2>
                    <div class="main-crousel">
                        <a href="{{ route('product') }}" class="main_carousel_link">
                            <div><img src="{{ asset('/img/Acer-Swift-1-5.jpg') }}" class="img-fluid">
                                <div class="name">laptop Acer-Swift-1-5</div>
                                <div class="price">5999zł</div>
                            </div>
                        </a>
                        <a href="#!" class="main_carousel_link">
                            <div></div>
                        </a>
                        <a href="#!" class="main_carousel_link">
                            <div></div>
                        </a>
                        <a href="#!" class="main_carousel_link">
                            <div></div>
                        </a>
                        <a href="#!" class="main_carousel_link">
                            <div></div>
                        </a>
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
