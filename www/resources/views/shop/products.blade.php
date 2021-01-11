@extends('layout.main')
@section('header')
@endsection
@section('menu')
@endsection
@section('content')

    <main>
        <div class="container" style="margin-top: -110px;">
            <section class="main_section product_list">
                <h3>Produkty</h3>
                <div class="row">
                    @foreach ($products as $product)
                    <div class="col-xl-2 col-lg-3 col-md-4 col-6 mb-4">
                            <a href="{{ url('/shop/products/'.$product->id) }}" class="product_link">
                                <div class="card bg-light border-primary h-100 justify-content-between">
                                    <img src="{{ asset('img/Acer-Swift-1-5.jpg') }}" class="card-img-top" alt="product image">
                                    <div class="card-body">
                                        <h5 class="card-title" >{{ $product->name }}</h5>
                                    </div>
                                    <div class='card-footer d-flex justify-content-between align-items-center'>
                                        <span class="text-start">{{ number_format($product->price ,2)}} zł</span>
                                        <a href="" class="btn btn-primary justify-end">Kup -></a>
                                    </div>
                                </div>
                            </a>
                    </div>

                @endforeach
            </section>
        </div>
    </main>
@section('footer')
@endsection
@section('script')
@endsection
