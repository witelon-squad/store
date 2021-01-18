@extends('layout.main')
@section('header')
@endsection
@section('menu')
@endsection
@section('content')
    <main>
        <div class="container" style="margin-top: -110px;">
            <section class="main_section product_list">
                <h3>Sklep</h3>
                <h4>Kategorie</h4>
                <div class="row">
                    <div class="col-lg-3">
                        <div class="list-group">
                            @foreach ($category as $record_category)
                                @foreach ($record_category as $lp_category )
                                    @if(is_numeric($lp_category))
                                        <a href="{{ url('/shop/products/category/'.$lp_category)}}"
                                           class="list-group-item">
                                            @else
                                                {{ $lp_category }}</a>
                                    @endif
                                @endforeach
                            @endforeach
                        </div>
                        <br/>
                    </div>
                    <div class="col-lg-9">
                        <div class="row">
                            @if(empty($message))
                            @else
                                <div class="alert alert-danger">
                                    {{ $message }}
                                </div>
                            @endif
                            @if(empty($products))
                                {{ $products = null}}
                            @else

                                @foreach ($products as $product)
                                    <div class="col col-xs-12 col-sm-12 col-md-6 col-lg-4 col-xl-3 mb-4">
                                        <a href="{{ url('/shop/product/'.$product->id) }}" class="product_link">
                                            <div class="card bg-light border-primary h-100 justify-content-between">
                                                @if(empty($data->image))
                                                    <img src="{{ asset('img/Acer-Swift-1-5.jpg') }}"
                                                         class="card-img-top"
                                                         alt="product image">
                                                @else
                                                    <img src="{{ $product->image }}" class="card-img-top"
                                                         alt="product image">
                                                @endif
                                                <div class="card-body">
                                                    <h5 class="card-title">{{ $product->name }}</h5>
                                                </div>
                                                <div
                                                    class='card-footer d-flex justify-content-between align-items-center'>
                                                <span
                                                    class="text-start">{{ number_format($product->price ,2)}} zł</span>
                                                    <a href="{{ url('/shop/products/'.$product->id) }}"
                                                       class="btn btn-primary justify-end">Kup -></a>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                @endforeach
                        </div>
                    </div>
                </div>
            </section>
            <div class="d-flex justify-content-center">
                {{ $products->links() }}
            </div>
            @endif
        </div>
    </main>
@section('footer')
@endsection
@section('script')
@endsection
