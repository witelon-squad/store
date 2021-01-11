@extends('admin.index')


@section('content-menu')
    <div class="pull-left">
        <h2 class="mb-3">Edycja użytkownika</h2>
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


    {!! Form::model($user, ['method' => 'PATCH','route' => ['users.update', $user->id]]) !!}
    <div class="form-group">
        <strong>Nick:</strong>
        {!! Form::text('name', null, array('placeholder' => 'Nick','class' => 'form-control')) !!}
    </div>
    <div class="form-group">
        <strong>Email:</strong>
        {!! Form::text('email', null, array('placeholder' => 'Email','class' => 'form-control')) !!}
    </div>


    <div class="form-group">
        <strong>Hasło:</strong>
        {!! Form::password('password', array('placeholder' => 'Hasło','class' => 'form-control')) !!}
    </div>


    <div class="form-group">
        <strong>Potwierdź hasło</strong>
        {!! Form::password('confirm-password', array('placeholder' => 'Potwierdź hasło','class' => 'form-control')) !!}
    </div>
    </div>

    <div class="form-group">
        <strong>Rola:</strong>
        {!! Form::select('roles[]', $roles,$userRole, array('class' => 'form-control','multiple')) !!}
    </div>

    <br/>
    <div class="form-group d-flex justify-content-around mt-3">
        <a class="btn btn-primary w-25" href="{{ route('users.index') }}"> Wstecz</a>
        <button type="submit" class="btn btn-success w-25">Zapisz</button>
    </div>
    {!! Form::close() !!}

@endsection
