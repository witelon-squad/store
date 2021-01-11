@extends('admin.index')


@section('content-menu')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2 class="mb-3">Utwórz nowego użytkownika</h2>
        </div>
        <div class="pull-right">
            
        </div>
    </div>
</div>


@if (count($errors) > 0)
  <div class="alert alert-danger">
    <strong>Whoops!</strong>Sprawdzi dane<br><br>
    <ul>
       @foreach ($errors->all() as $error)
         <li>{{ $error }}</li>
       @endforeach
    </ul>
  </div>
@endif



{!! Form::open(array('route' => 'users.store','method'=>'POST')) !!}
<div class="row">
    <div class="col-12">
        <div class="form-group">
            <strong>Nick:</strong>
            {!! Form::text('name', null, array('placeholder' => 'Name','class' => 'form-control')) !!}
        </div>
    </div>
    <div class="col-12">
        <div class="form-group">
            <strong>Email:</strong>
            {!! Form::text('email', null, array('placeholder' => 'Email','class' => 'form-control')) !!}
        </div>
    </div>
    <div class="col-12">
        <div class="form-group">
            <strong>Hasło:</strong>
            {!! Form::password('password', array('placeholder' => 'Password','class' => 'form-control')) !!}
        </div>
    </div>
    <div class="col-12">
        <div class="form-group">
            <strong>Potwierdź hasło</strong>
            {!! Form::password('confirm-password', array('placeholder' => 'Potwierdź hasło','class' => 'form-control')) !!}
        </div>
    </div>
    <div class="col-12">
        <div class="form-group">
            <strong>Rola:</strong>
            {!! Form::select('roles[]', $roles,[], array('class' => 'form-control','multiple')) !!}
        </div>
    </div>
    <div class="col-12">
        <div class='form-group d-flex mt-2 justify-content-around'>
        <button type="submit" class="btn btn-success w-25">Zapisz</button>
        <a class="btn btn-primary w-25" href="{{ route('users.index') }}">Wstecz</a>
        </div>
    </div>
</div>
{!! Form::close() !!}
@endsection
