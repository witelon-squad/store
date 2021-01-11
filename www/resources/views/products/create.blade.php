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
    <h2 class='mb-3'>Dodaj nowy produkt</h2>
    <form action="{{ route('products.store') }}" method="POST">
        @csrf
        <div class="col-md-8">
            <div class="form-group">
                <strong>Nazwa:</strong>
                <input type="text" name="name" class="form-control" placeholder="Nazwa">
                <strong>Szczegóły:</strong>
                <textarea class="form-control" style="height:150px" name="description" placeholder="Szczegóły"></textarea>
                <strong>Cena:</strong>
                <input type="text" name="price" class="form-control" placeholder="Cena">
                <strong>Kategorie:</strong>
                <select class="form-select" aria-label="Default select example" name="price">
                    <option value="1">One</option>
                    <option value="2">Two</option>
                    <option value="3">Three</option>
                </select>
                <strong>Zdjęcie:</strong>
                <br /><label for="exampleFormControlFile1">Example file input</label>
                <input type="file" class="form-control-file" id="exampleFormControlFile1">
            </div>
            <br/>
            <button type="submit" class="btn btn-primary">Zapisz</button>
        </div>
        </div>
    </form>
@endsection
