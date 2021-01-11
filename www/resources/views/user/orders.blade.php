@extends('layout.main')
@section('header')
@endsection
@section('menu')
@endsection
@section('content')
    <main>
        <section class="main_section">
            <div class="container">
                <div class="row">
                    <div class="col-md-4">
                        <ul class="profile_nav">
                            <li><a  href="{{ route('orders')}}">Lista zamówień</a>
                            </li>
                            <li><a  href="{{route('home')}}">Dane osobowe</a></li>
                        </ul>
                    </div>
                    <div class="col-md-8">
                        <div id="order-list" class="tabcontent active">
                            <div class="row order order-header text-center">
                                <div class="col my-auto">nr zamówienia</div>
                                <div class="col my-auto">data</div>
                                <div class="col my-auto">status</div>
                                <div class="col my-auto">wartość</div>
                            </div>
                            <a href="#!">
                                <div class="row order text-center">
                                    <div class="col my-auto">29.43.02</div>
                                    <div class="col my-auto">2020-01-01 12:49</div>
                                    <div class="col my-auto">wysłane</div>
                                    <div class="col my-auto">200.99zł</div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
@section('footer')
@endsection
@section('script')
@endsection
@endsection

