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
                                        <td class="cart-product-image"><img src="{{  asset('img/Acer-Swift-1-5.jpg') }} "
                                                                            class="img-fluid"></td>
                                        <td>{{ $details['name'] }}</td>
                                        <td>{{$details['price'] }} zł</td>
                                        <td>
                                            <select class="custom-select" id="inputGroupSelect02">
                                                <option value="{{$details['quantity']}}" selected>{{$details['quantity']}}</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                <option value="5">5</option>
                                                <option value="6">6</option>
                                            </select>
                                        </td>
                                        <td>{{ $details['price'] * $details['quantity'] }} zł</td>
                                        <td>
                                            <button class="btn btn-danger btn-sm remove-from-cart" data-id="{{ $id }}" type="submit"><i class="fa fa-trash-o"></i></button>
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
                                    <a href="" class=" btn btn-main"> złóż zamówienie </a>
                                </div>
                            </div>
                        </div>
                    </section>
        </div>
    </main>

@endsection
@section('scripts')
    <script type="text/javascript">
        $(".update-cart").click(function (e) {
            e.preventDefault();

            var ele = $(this);

            var parent_row = ele.parents("tr");

            var quantity = parent_row.find(".quantity").val();

            var product_subtotal = parent_row.find("span.product-subtotal");

            var cart_total = $(".cart-total");

            var loading = parent_row.find(".btn-loading");

            loading.show();

            $.ajax({
                url: '{{ url('update-cart') }}',
                method: "patch",
                data: {_token: '{{ csrf_token() }}', id: ele.attr("data-id"), quantity: quantity},
                dataType: "json",
                success: function (response) {

                    loading.hide();

                    $("span#status").html('<div class="alert alert-success">'+response.msg+'</div>');

                    $("#header-bar").html(response.data);

                    product_subtotal.text(response.subTotal);

                    cart_total.text(response.total);
                }
            });
        });

        $(".remove-from-cart").click(function (e) {
            e.preventDefault();

            var ele = $(this);

            var parent_row = ele.parents("tr");

            var cart_total = $(".cart-total");

            if(confirm("Are you sure")) {
                $.ajax({
                    url: '{{ url('remove-from-cart') }}',
                    method: "DELETE",
                    data: {_token: '{{ csrf_token() }}', id: ele.attr("data-id")},
                    dataType: "json",
                    success: function (response) {

                        parent_row.remove();

                        $("span#status").html('<div class="alert alert-success">'+response.msg+'</div>');

                        $("#header-bar").html(response.data);

                        cart_total.text(response.total);
                    }
                });
            }
        });
    </script>
@endsection
@section('footer')
@endsection
