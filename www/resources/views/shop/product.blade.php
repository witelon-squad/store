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
                    @if(empty($product) && isset($product))
                        <div class="alert alert-danger">
                            Nie ma takiego produktu
                        </div>
                    @else
                        @foreach ($product as $data)
                            <div class="col-xl-5 col-md-7">
                                <div class="slider-nav">
                                    @if(empty($data->image))
                                        <div><img src="{{ asset('img/Acer-Swift-1-5.jpg') }}" class="img-fluid"></div>
                                    @else
                                        <div><img src="{{ $data->image }}" class="img-fluid"></div>
                                    @endif

                                </div>
                            </div>
                            <div class="col-xl-7 col-md-5 px-5 mt-md-0 mt-5 product_details">
                                <h3>{{$data->name}}</h3>
                                <div class="row">
                                    <div class="col-xl-5 mt-xl-0 mt-5"
                                         style="border-radius: .25rem; border: 1px solid #ccc; padding: 15px 10px;">
                                        <div class="product_availability">
                                            <span class="text-muted">Dostępność:</span> {{ $quantity }}
                                        </div>
                                        <div class="product_availability">
                                            <span class="text-muted">Cena:</span> {{ number_format($data->price ,2)}} zł
                                        </div>
                                        <div class="d-flex">
                                            <div>
                                                <select class="custom-select product-select" id="product_quantity">
                                                    @for($i=1;$i <= $quantity;$i++)
                                                        <option value="{{ $quantity }}" >{{ $quantity }}</option>
                                                    @endfor
                                                </select>
                                            </div>
                                            <a href="{{ url('/shop/products/'.$data->id) }}" class="btn btn-main pl-4">Dodaj do koszyka</a>
                                        </div>

                                    </div>
                                </div>
                            </div>
                </div>
            </section>

            <section class="main_section">
                <div class="product-description-container">
                    <div class="product-description-box">
                        {{$data->description}}
                    </div>
                </div>
            </section>
        </div>
        @endforeach
        @endif
    </main>
@section('footer')
@endsection
<script type="text/javascript" src="js/cart.js"></script>
@section('script')
@endsection

