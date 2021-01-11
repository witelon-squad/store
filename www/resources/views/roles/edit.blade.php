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
        <h2 class='mb-3'>Edycja roli</h2>
    </div>
    {!! Form::model($role, ['method' => 'PATCH','route' => ['roles.update', $role->id]]) !!}
    <div class="form-group">
        <strong>Nazwa:</strong>
        {!! Form::text('name', null, array('placeholder' => 'Name','class' => 'form-control')) !!}
    </div>
    <div class="form-group">
        <strong>Uprawnienia:</strong>
        <br/>
        @foreach($permission as $value)
            <label>{{ Form::checkbox('permission[]', $value->id, in_array($value->id, $rolePermissions) ? true : false, array('class' => 'name')) }}
                {{ $value->name }}</label>
            <br/>
        @endforeach
    </div>
    <div class="pull-right">
        <a class="btn btn-primary" href="{{ route('roles.index') }}">Wstecz</a>
        <button type="submit" class="btn btn-primary">Zapisz</button>
    </div>
    {!! Form::close() !!}
@endsection
