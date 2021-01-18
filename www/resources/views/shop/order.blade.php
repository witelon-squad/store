@extends('layout.main')
@section('header')
@endsection
@section('menu')
@endsection
@section('content')
<main>
    <div class="container" style="margin-top: -110px;">
        <div class='row  justify-content-center'>
            <div class='col-xs-12 col-lg-6'>
                <h2 style='margin-bottom: 20px;'>Podaj adres do zamówienia</h2>
                <form action="{{ url('/shop/order/complete') }}"  method="POST" >
                    @csrf
                    <div class='form-group'>
                        <label for='cityAdresInput'>Miasto</label>
                        <input class='form-control' type='text' id='cityAdresInput' name="cityAdresInput" aria-describedby='cityHelp' placeholder='Podaj miasto...' />
                    </div>
                    <div class='form-group'>
                        <label for='postcodeInput'>Kod pocztowy</label>
                        <input class='form-control' type='text' id='postcodeInput' name="postcodeInput" aria-describedby='postcodeHelp' placeholder='Podaj kod pocztowy...' />
                    </div>
                    <div class='form-group'>
                        <label for='streetInput'>Ulica</label>
                        <input class='form-control' type='text' id='streetInput' name="streetInput" aria-describedby='streetHelp' placeholder='Podaj ulice...' />
                    </div>
                    <div class='form-group mt-3'>
                        <button class='btn btn-primary form-control'>Złóż zamównienie</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</main>
@endsection
@section('scripts')
@endsection
@section('footer')
@endsection
