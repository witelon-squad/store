@extends('layout.main')
@section('header')
@endsection
@section('menu')
@endsection
@section('content')
    <main>
        <div class="container">
            @if ($message = Session::get('success'))
                <div class="alert alert-success">
                    <p>{{ $message }}</p>
                </div>
            @endif
            <section class="main_section">
                <div class="row">
                    <div class="col-md-8">
                        <table class="table align-baseline">
                            <thead>
                            <tr>
                                <th style="width: 150px;"></th>
                                <th style="width: 400px;">Produkt</th>
                                <th>Cena</th>
                                <th>Ilość</th>
                                <th>Razem</th>
                                <th style="width: 50px;"></th>
                            </tr>
                            </thead>
                            @php $total = 0  @endphp
                            @if(session('cart'))
                                @foreach((array) session('cart') as $id => $details)
                                    @php  $total += $details['price'] * $details['quantity'] @endphp
                                    <tbody>
                                    <tr>
                                        <td class="cart-product-image"><img
                                                src="{{  asset('img/Acer-Swift-1-5.jpg') }} "
                                                class="img-fluid"></td>
                                        <td>{{ $details['name'] }}</td>
                                        <td>{{$details['price'] }} zł</td>
                                        <td>
                                            <select class="quantity" id="inputGroupSelect02">
                                                <option value="{{$details['quantity']}}"
                                                        selected>{{$details['quantity']}}</option>
                                            </select>
                                        </td>
                                        <td>{{ $details['price'] * $details['quantity'] }} zł</td>
                                        <td>
                                            <a href="{{ url('/shop/cart/remove-from-cart/'.$id) }}"
                                               class="btn btn-danger btn-sm remove-from-cart" type="submit"><i
                                                    class="fa fa-trash-o"></i></a>
                                        </td>
                                    </tr>
                                    </tbody>
                                @endforeach
                            @endif
                        </table>
                    </div>
                    <div class="col-md-4">
                        <div class="cart-summary">
                            <div class="mb-4">Kwota: <span class="total_amount"> {{ $total }} zł</span></div>
                            <a href="{{url('/shop/cart')}}" class=" btn btn-main">odśwież koszyk</a>
                            <a href="{{url('/shop/order')}}" class=" btn btn-main"> złóż zamówienie </a>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </main>

@endsection
@section('scripts')
@endsection
@section('footer')
@endsection
