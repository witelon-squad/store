@extends('layout.main')

@section('content')
    <main>
        <div class="container">
            <section class="main_section">
                <div class="row justify-content-center">
                    <div class="col-md-8 form-box">
                        <div id="login" class="tabcontent login-form active">
                            <h3>{{ __('Weryfikacja twojego adresu email') }}</h3>

                            <div class="card-body">
                                @if (session('resent'))
                                    <div class="alert alert-success" role="alert">
                                        {{ __('Nowy link weryfikacyjny został wysłany na Twój adres e-mail.') }}
                                    </div>
                                @endif

                                {{ __('Przed kontynuowaniem sprawdź, czy w e-mailu nie ma linku weryfikacyjnego.') }}
                                {{ __('Jeśli nie otrzymałeś e-maila') }},
                                <form class="d-inline" method="POST" action="{{ route('verification.resend') }}">
                                    @csrf
                                    <button type="submit"
                                            class="btn btn-link p-0 m-0 align-baseline">{{ __('kliknij tutaj, aby wygenerować nowy link') }}</button>
                                    .
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </main>
@endsection
