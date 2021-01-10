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
                    <tr>
                      <td scope="row">forma</td>
                      <td>12.99zł</td>
                      <td>12.99zł</td>
                      <td>1-2 dni robocze</td>
                    </tr>
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
