@extends('layout.main')
@section('header')
@endsection
@section('menu')
@endsection
@section('content')
    <main>
        <section class="main_section">
            <div class="container" style="margin-top: -100px">
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
                                <div class="col my-auto">#</div>
                                <div class="col my-auto">data</div>
                                <div class="col my-auto">status</div>
                                <div class="col my-auto">wartość</div>
                            </div>
                            @foreach($content as $data)
                                <a href="#!">
                                    <div class="row order text-center">
                                        <div class="col my-auto">{{$i++}}</div>
                                        <div class="col my-auto">{{$data->date}}</div>
                                        <div class="col my-auto">{{$data->status}}</div>
                                        <div class="col my-auto">{{ number_format($data->value ,2)}} zł</div>
                                    </div>
                                </a>
                            @endforeach
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

