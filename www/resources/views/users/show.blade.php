@extends('admin.index')

@section('nav-bar')
        <div class="pull-left">
            <h2>Użytkownicy</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-primary" href="{{ route('users.index') }}"> Wstecz</a>
        </div>
        <div class="form-group">
            <strong>Nick:</strong>
            {{ $user->name }}
        </div>
        <div class="form-group">
            <strong>Email:</strong>
            {{ $user->email }}
        </div>
        <div class="form-group">
            <strong>Rola:</strong>
            @if(!empty($user->getRoleNames()))
                @foreach($user->getRoleNames() as $v)
                    <label class="badge badge-success">{{ $v }}</label>
                @endforeach
            @endif
        </div>
@endsection
