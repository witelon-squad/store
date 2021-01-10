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
                        <div id="register" class="login-form">
                            <form method="POST" action="{{ route('register') }}">
                                @csrf
                                <h3>{{ __('Rejestracja') }}</h3>
                                <div class="form-group mb-3">
                                    <label for="name"
                                           class="col-md-4 col-form-label text-md-right">{{ __('Nick') }}</label>
                                    <input id="name" type="text"
                                           class="form-control @error('name') is-invalid @enderror" name="name"
                                           value="{{ old('name') }}" required autocomplete="name" autofocus>
                                    @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                <div class="form-group mb-3">
                                    <label for="register-email">{{ __('E-Mail') }}</label>
                                    <input id="email" type="email"
                                           class="form-control @error('email') is-invalid @enderror" name="email"
                                           value="{{ old('email') }}" required autocomplete="email">
                                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                <div class="form-group mb-3">
                                    <label for="register-password">{{ __('Hasło') }}</label>
                                    <input id="password" type="password"
                                           class="form-control @error('password') is-invalid @enderror" name="password"
                                           required autocomplete="new-password">
                                    @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                <div class="form-group mb-3">
                                    <label for="password-confirm"
                                           class="col-md-4 col-form-label text-md-right">{{ __('Potwierdź hasło') }}</label>
                                    <input id="password-confirm" type="password" class="form-control"
                                           name="password_confirmation" required autocomplete="new-password">
                                </div>
                                <div class="d-flex justify-content-between">
                                    <button type="submit" class="btn btn-main mt-3">{{ __('Zarejestruj') }}</button>
                                    <a href="{{ route('login') }}" class="tablinks" onclick="openForm(event, 'login')">Zaloguj się</a>
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

