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
                            <li><a class="tablinks active" onclick="openForm(event, 'order-list')">Lista zamówień</a>
                            </li>
                            <li><a class="tablinks" onclick="openForm(event, 'change-data')">Dane osobowe</a></li>
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

                        <div id="change-data" class="tabcontent">
                            <form action="#">
                                <div class="row">
                                    <div class="col-md-6 mb-3">
                                        <label for="change_email" class="form-label">Adres email</label>
                                        <input type="email" class="form-control" id="change_email" disabled
                                               value="example@example.com">
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label for="change_password" class="form-label">Hasło</label>
                                        <input type="password" class="form-control" id="change_password">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6 mb-3">
                                        <label for="change_name" class="form-label">Imię</label>
                                        <input type="text" class="form-control" id="change_name">
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label for="change_last_name" class="form-label">Nazwisko</label>
                                        <input type="text" class="form-control" id="change_last_name">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6 mb-3">
                                        <label for="change_name" class="form-label">Telefon</label>
                                        <input type="text" class="form-control" id="change_name">
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label for="change_last_name" class="form-label">Adres</label>
                                        <input type="text" class="form-control" id="change_last_name"
                                               placeholder="ulica, nr domu, nr mieszkania">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6 mb-3">
                                        <label for="change_name" class="form-label">Kod pocztowy</label>
                                        <input type="text" class="form-control" id="change_name">
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label for="change_last_name" class="form-label">Miejscowośc</label>
                                        <input type="text" class="form-control" id="change_last_name"
                                               placeholder="ulica, nr domu, nr mieszkania">
                                    </div>
                                </div>
                                <div class="text-right justify-content-end mt-5 d-flex">
                                    <button type="submit" class="btn btn-main">Zapisz zmiany</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection
@section('footer')
@endsection
@section('script')
@endsection

