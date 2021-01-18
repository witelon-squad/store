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
    <h2 class='mb-3'>Wybierz produkt do promowania</h2>
    <form action="{{ route('ad.store') }}" method="POST">
        @csrf
        <div class="col-md-8">
            <div class="form-group">
                <strong>Produkt:</strong>
                <select class="form-select"  name="product">
                    @foreach ($products as $product)
                                <option value="{{$product->id}}">{{ $product->name }}</option>

                    @endforeach
                </select>
            <br/>
            <button type="submit" class="btn btn-primary">Zapisz</button>
        </div>
        </div>
    </form>
@endsection
