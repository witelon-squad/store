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
                    @if (count($errors) > 0)
                        <div class="alert alert-danger">
                            <strong>Whoops!</strong>Coś poszło nie tak<br><br>
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    @if (\Session::has('success'))
                        <div class="alert alert-success">
                            <ul>
                                <li>{!! \Session::get('success') !!}</li>
                            </ul>
                        </div>
                    @endif
                            <form role="form" method="post" action="{{route('DataChange')}}">
                                    <div class="col-md-6 mb-3">
                                        <label for="change_email" class="form-label">Adres email</label>
                                        <input type="email" class="form-control" id="change_email"
                                              name="_email" value="{{$data['email']}}">
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label for="change_name" class="form-label">Nazwa użytkownika</label>
                                        <input type="text" class="form-control" id="change_name" name="_name" value="{{$data['name']}}">
                                    </div>
                                        <div class="col-md-6 mb-3">
                                        <label for="change_password" class="form-label">Hasło</label>
                                        <input type="password" class="form-control" id="change_password" name="_pass" value="{{$data['pass']}}">
                                    </div>
                                    <div class="text-right mt-5 d-flex">
                                    <button type="submit" class="btn btn-main">Zapisz zmiany</button>
                                </div>
                                <input name="_token" type="hidden" value="{{ csrf_token() }}"/>
                            </form>
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
