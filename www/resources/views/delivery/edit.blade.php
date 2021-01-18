@extends('admin.index')


@section('content-menu')
    @if (count($errors) > 0)
        <div class="alert alert-danger">
            <strong>Whoops!</strong>Dane są nie poprawne.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <div class="pull-left">
        <h2 class='mb-3'>Edycja wysyłki</h2>
    </div>
    <div class="pull-right">
        <a class="btn btn-primary" href="{{ route('delivery.index') }}">Wstecz</a>
    </div>
    @foreach($delivery as $data)
        <form action="{{ route('delivery.update',$data->id) }}">
            @method('PUT')
            @csrf
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Nazwa wysyłki:</strong>
                        <input type="text" name="type" value="{{ $data->type }}" class="form-control"
                               placeholder="Nazwa produktu">
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Przedpłata (zł):</strong>
                        <input type="text" name="prepayment" value="{{ $data->prepayment }}" class="form-control"
                               placeholder="Przedpłata">
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Pobranie (zł):</strong>
                        <input type="text" name="charging" value="{{ $data->charging }}" class="form-control"
                               placeholder="Pobranie">
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Czas dostawy (dni):</strong>
                        <input type="text" name="delivery_time" value="{{ $data->delivery_time }}" class="form-control"
                               placeholder="Czas dostawy (dni)">
                    </div>
                </div>
                <div class="form-group d-grid mt-1">
                    <button type="submit" class="btn btn-success">Zapisz</button>
                </div>
            </div>
            @endforeach
        </form>
@endsection
