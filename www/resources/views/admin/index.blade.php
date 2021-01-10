@extends('layout.main')
@section('header')
@endsection
@section('menu')
@endsection
@yield('nav-bar')
    <main>
        <section class="main_section">
            <div class="container">
                <div class="row">
                    <div class="col-md-4">
                        <ul class="profile_nav">
                            <li><a href="{{ route('products.index') }}">Ustawienia sklepu</a></li>
                            <li><a href="{{ route('users.index') }}">Użytkownicy</a></li>
                            <li><a href="{{ route('roles.index') }}">Uprawnienia</a></li>
                            <li><a href="{{ route('products.index') }}">Produkty</a></li>
                            <li><a href="{{ route('products.index') }}">Dodatkowe treści</a></li>
                        </ul>
                    </div>
                    <div class="col-md-8">
                        @yield('content-menu')
                    </div>
                </div>
            </div>
        </section>
</main>
@section('footer')
@endsection
