@extends('layout.main')
@section('header')
@endsection
@section('menu')
@endsection
@yield('nav-bar')
    <main style="margin-top: 170px">
        <section class="main_section">
            <div class="container">
                <div class="row">
                    <div class="col-md-3">
                        <ul class="profile_nav">
                            <li><a href="">Statystyki</a></li>
                            <li><a href="{{ route('users.index') }}">Użytkownicy</a></li>
                            <li><a href="{{ route('orders.index')  }}">Zamówienia</a></li>
                            <li><a href="{{ route('roles.index') }}">Uprawnienia</a></li>
                            <li><a href="{{ route('products.index') }}">Produkty</a></li>
                            <li><a href="{{ route('content.index') }}">Treść na stronach</a></li>
                            <li><a href="{{route('delivery.index')}}">Dostawa</a></li>
                            <li><a href="{{ route('ad.index') }}">Reklama produktów</a></li>
                        </ul>
                    </div>
                    <div class="col-md-9">
                        @yield('content-menu')
                    </div>
                </div>
            </div>
        </section>
</main>
@section('footer')
@endsection
