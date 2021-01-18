@extends('layout.main')

@section('content')
    <main>
        <div class="container">
            <section class="main_section">
                <div class="row justify-content-center">
                    <div class="col-md-8 form-box">
                        <div class="abcontent login-form active">
                            <div class="alert alert-success" role="alert">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </main>
@endsection
