@extends('admin.index')


@section('content-menu')
    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Whoops!</strong>Dane w formularzu są nie poprawne<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <h2 class='mb-3'>Dodaj nowy typ wysyłki</h2>
    <form action="{{ route('delivery.store') }}" method="POST">

        @csrf
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Nazwa wysyłki:</strong>
                    <input type="text" name="type" value="" class="form-control"
                           placeholder="Nazwa produktu">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Przedpłata (zł):</strong>
                    <input type="text" name="prepayment" value="" class="form-control"
                           placeholder="Przedpłata">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Pobranie (zł):</strong>
                    <input type="text" name="charging" value="" class="form-control"
                           placeholder="Pobranie">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Czas dostawy (dni):</strong>
                    <input type="text" name="delivery_time" value="" class="form-control"
                           placeholder="Czas dostawy (dni)">
                </div>
            </div>
            <div class="form-group d-grid mt-1">
                <button type="submit" class="btn btn-success">Dodaj</button>
            </div>
        </div>
    </form>
    <script src="https://cdn.ckeditor.com/ckeditor5/24.0.0/classic/ckeditor.js"></script>
    <script>
        ClassicEditor
            .create(document.querySelector('#editor'))
            .catch(error => {
                console.error(error);
            });
    </script>
@endsection
