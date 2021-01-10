@extends('layout.main')
@section('header')
@endsection
@section('menu')
@endsection
@section('content')
    <main>
        <div class="container">
            <section class="main_section">
                <div class="row justify-content-center">
                    <div class="col-md-8 form-box">

                        <div id="login" class="tabcontent login-form active">
                            <form method="POST" action="{{ route('login') }}">
                                @csrf
                                <h3>Logowanie</h3>
                                <div class="form-group mb-3">
                                    <label for="login-email">{{ __('E-Mail') }}</label>
                                    <input id="email" type="email"
                                           class="form-control @error('email') is-invalid @enderror" name="email"
                                           value="{{ old('email') }}" required autocomplete="email" autofocus>

                                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                <div class="form-group mb-3">
                                    <label for="login-password">{{ __('Hasło') }}</label>
                                    <input id="password" type="password"
                                           class="form-control @error('password') is-invalid @enderror" name="password"
                                           required autocomplete="current-password">

                                    @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                <div class="d-flex justify-content-between">
                                    <button type="submit" class="btn btn-main mt-3">Zaloguj się</button>
                                    <a href="{{ route('reset') }}" class="tablinks"
                                       onclick="openForm(event, 'register')">Nie pamiętam hasła</a>
                                    <a href="{{ route('register') }}" class="tablinks"
                                       onclick="openForm(event, 'register')">Nie mam konta</a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </main>
@section('footer')
@endsection
@section('script')
@endsection
