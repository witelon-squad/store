@extends('layout.main')
@section('header')
@endsection
@section('menu')
@endsection
@section('content')

  <body>
    <header>
      <nav class="navbar fixed-top  navbar-expand navbar-light bg-white d-block pb-0">
        <div class="container">
          <a class="navbar-brand" href="#"><img src="img/logo.png" style="width: 160px;"></a>
          <div class="order-lg-2 justify-content-end" id="navbarSupportedContent">
            <ul class=" navbar-nav first-nav mr-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link text-center" href="#"><i class="fas fa-shopping-basket d-block"></i>Koszyk</a>
              </li>
              <li class="nav-item">
                <a class="nav-link text-center" href="#"><i class="fas fa-user d-block"></i>Zaloguj się</a>
              </li>
            </ul>
          </div>
          <form class="order-lg-1 d-flex nav_search">
            <input class="form-control nav_input_search" type="search" placeholder="Szukaj" aria-label="Search">
            <button class="btn btn-main btn-nav" type="submit">Szukaj</button>
          </form>
        </div>

        <div class="category_menu container-fluid text-white py-1">
          <div class="mx-auto" id="colaps">
            <ul class=" navbar-nav me-auto mb-2 mb-lg-0 flex-wrap">
              <li class="nav-item">
                <a class="nav-link" href="#">Kategoria</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Kategoria</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Kategoria</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Kategoria</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Kategoria
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <li><a class="dropdown-item" href="#">Podkategoria</a></li>
                  <li><a class="dropdown-item" href="#">Podkategoria</a></li>
                  <li><hr class="dropdown-divider"></li>
                  <li><a class="dropdown-item" href="#">Podkategoria</a></li>
                </ul>
              </li>
            </ul>
          </div>
        </div>
      </nav>
    </header>

    <main>
      <div class="container">
        <section class="main_section">
          <div class="row">
            <div class="col-xl-5 col-md-7">
              <div class="slider-for">
                <div><img src="img/Acer-Swift-1-5.jpg" class="img-fluid"></div>
                <div>2</div>
                <div>3</div>
                <div>4</div>

              </div>
              <div class="slider-nav">
                <div><img src="img/Acer-Swift-1-5.jpg" class="img-fluid"></div>
                <div>2</div>
                <div>3</div>
                <div>4</div>

              </div>
            </div>
            <div class="col-xl-7 col-md-5 px-5 mt-md-0 mt-5 product_details">
              <h3>Nazwa produktu</h3>
              <div class="row">
                <div class="col-xl-7 ">
                  <div><span class="text-muted">Cecha:</span> opis</div>
                  <div><span class="text-muted">Cecha:</span> opis</div>

                </div>
                <div class="col-xl-5 mt-xl-0 mt-5" style="border-radius: .25rem; border: 1px solid #ccc; padding: 15px 10px;">
                  <div class="product_availability">
                    <span class="text-muted">Dostępność:</span> 6szt
                  </div>
                  <div class="d-flex">
                    <div>
                      <select class="custom-select product-select" id="product_quantity">
                        <option value="1" selected>1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                        <option value="6">6</option>

                      </select>
                    </div>
                    <a href="" class="btn btn-main pl-4">Dodaj do koszyka</a>
                    </div>

                </div>
              </div>
            </div>
          </div>
        </section>

        <section class="main_section">
          <div class="product-description-container">
            <div class="product-description-box">
              <h3>Lorem ipsum</h3>
              Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut euismod rhoncus justo, ut porttitor turpis congue ut. Mauris orci est, porta ac neque eu, placerat dictum nunc. Ut sed facilisis orci. Nam ac varius nisl. In molestie eleifend pretium. Fusce iaculis tortor vitae odio mattis, eget pulvinar libero scelerisque. Nullam pharetra mi nisi, quis fringilla justo accumsan aliquam. Fusce porta dolor ut sem pellentesque, in rutrum turpis gravida. Ut non quam maximus, tempor erat eget, varius tortor. Etiam ultricies condimentum purus quis feugiat. Etiam rutrum risus ut nunc eleifend, rutrum egestas dolor sodales.
            </div>
            <div class="product-description-box">
              <h3>Lorem ipsum</h3>
              Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut euismod rhoncus justo, ut porttitor turpis congue ut. Mauris orci est, porta ac neque eu, placerat dictum nunc. Ut sed facilisis orci. Nam ac varius nisl. In molestie eleifend pretium. Fusce iaculis tortor vitae odio mattis, eget pulvinar libero scelerisque. Nullam pharetra mi nisi, quis fringilla justo accumsan aliquam. Fusce porta dolor ut sem pellentesque, in rutrum turpis gravida. Ut non quam maximus, tempor erat eget, varius tortor. Etiam ultricies condimentum purus quis feugiat. Etiam rutrum risus ut nunc eleifend, rutrum egestas dolor sodales.
            </div>
            <div class="product-description-box">
              <h3>Lorem ipsum</h3>
              Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut euismod rhoncus justo, ut porttitor turpis congue ut. Mauris orci est, porta ac neque eu, placerat dictum nunc. Ut sed facilisis orci. Nam ac varius nisl. In molestie eleifend pretium. Fusce iaculis tortor vitae odio mattis, eget pulvinar libero scelerisque. Nullam pharetra mi nisi, quis fringilla justo accumsan aliquam. Fusce porta dolor ut sem pellentesque, in rutrum turpis gravida. Ut non quam maximus, tempor erat eget, varius tortor. Etiam ultricies condimentum purus quis feugiat. Etiam rutrum risus ut nunc eleifend, rutrum egestas dolor sodales.
            </div>
          </div>
        </section>
      </div>
    </main>
    @section('footer')
    @endsection
    <script type="text/javascript" src="js/cart.js"></script>
@section('script')
@endsection

