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
    <h2>Dodaj nowy produkt</h2>
    <form action="{{ route('products.store') }}" method="POST">
        @csrf
        <div class="col-md-8">
            <div class="form-group">
                <strong>Nazwa:</strong>
                <input type="text" name="name" class="form-control" placeholder="Name">
                <strong>Szczegóły:</strong>
                <textarea class="form-control" style="height:150px" name="detail" placeholder="Detail"></textarea>
            </div>
            <br/>
            <button type="submit" class="btn btn-primary">Zapisz</button>
        </div>
        </div>
    </form>
@endsection
