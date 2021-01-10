@extends('layout.main')
@section('header')
@endsection
@section('menu')
@endsection
@section('content')

    <main>
      <div class="container">
        <section class="main_section">
          <div class="row">
              <div class="col-md-8">
                <table class="table align-baseline">
                  <thead>
                      <tr>
                      <th style="width: 150px;"></th>
                      <th style="width: 400px;">Produkt</th>
                      <th>Cena</th>
                      <th>Ilość</th>
                      <th>Razem</th>
                      <th style="width: 50px;"></th>
                      </tr>
                  </thead>
                  <tbody>
                      <tr>
                      <td class="cart-product-image"><img src="{{ asset('img/Acer-Swift-1-5.jpg') }}" class="img-fluid"></td>
                      <td>Nazwa produktu</td>
                      <td>599zł</td>
                      <td>
                        <select class="custom-select" id="inputGroupSelect02">
                          <option value="1" selected>1</option>
                          <option value="2">2</option>
                          <option value="3">3</option>
                          <option value="3">3</option>
                          <option value="4">4</option>
                          <option value="5">5</option>
                          <option value="6">6</option>
                        </select>
                    </td>
                      <td>599zł</td>
                      <td><button class="btn btn-main"><i class="fas fa-times"></i></button></td>
                      </tr>
                  </tbody>
                </table>
              </div>
              <div class="col-md-4">
                <div class="cart-summary">
                  <div class="mb-4">Kwota: <span class="total_amount">123 zł</span></div>
                  <a href="" class=" btn btn-main"> złóż zamówienie </a>
                </div>
              </div>
          </div>
        </section>
      </div>
    </main>
@endsection
    <script type="text/javascript" src="js/cart.js"></script>
@section('footer')
@endsection
@section('script')
@endsection
