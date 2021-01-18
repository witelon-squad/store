@extends('layout.main')
@section('header')
@endsection
@section('menu')
@endsection
@section('content')
    <main>
        <div class="container">
            <section class="main_section">
                <h3 class="page_header">Koszty dostawy</h3>
                <table class="table table-bordered text-center custom_table">
                    <thead>
                    <tr>
                        <th scope="col">Forma dostawy</th>
                        <th scope="col">Przedpłata</th>
                        <th scope="col">Pobranie</th>
                        <th scope="col">Czas dostawy</th>
                    </tr>
                    </thead>
                    <tbody>
                        @foreach($delivery as $data)
                                <tr>
                                    <td scope="row">{{$data->type}}</td>
                                    <td>{{ number_format($data->prepayment ,2)}} zł</td>
                                    <td>{{ number_format($data->charging ,2)}} zł</td>
                                    <td>od 1 dnia do {{ $data->delivery_time }} dni</td>
                                </tr>
                        @endforeach
                    </tbody>
                </table>
            </section>
        </div>
    </main>
@section('footer')
@endsection
@section('script')
@endsection
@endsection
