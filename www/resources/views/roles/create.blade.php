@extends('admin.index')


@section('content-menu')
    <div class="pull-left">
        <h2 class='mb-3'>Utwórz nowy rodzaj konta</h2>
    </div>
    @if (count($errors) > 0)
        <div class="alert alert-danger">
            <strong>Whoops!</strong> There were some problems with your input.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif


    {!! Form::open(array('route' => 'roles.store','method'=>'POST')) !!}
    <div class="row">
        <strong>Nazwa:</strong>
        {!! Form::text('name', null, array('placeholder' => 'Nazwa','class' => 'form-control')) !!}

    </div>
        <div class="form-group">
            <strong>Uprawnienia:</strong>
            <br/>
            @foreach($permission as $value)
                <label>{{ Form::checkbox('permission[]', $value->id, false, array('class' => 'name')) }}
                    {{ $value->name }}</label>
                <br/>
            @endforeach
        </div>
    <br />
    <div class="pull-right">
        <a class="btn btn-primary" href="{{ route('roles.index') }}">Wstecz</a>
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
    {!! Form::close() !!}
@endsection
