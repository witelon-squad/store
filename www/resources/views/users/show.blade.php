@extends('admin.index')

@section('nav-bar')
@section('content-menu')
<div>
        <div class="pull-left">
            <h2 class="mb-3">Użytkownicy</h2>
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
                    <label class="badge bg-success">{{ $v }}</label>
                @endforeach
            @endif
        </div>
        <div class="pull-right mt-3">
            <a class="btn btn-primary" href="{{ route('users.index') }}"> Wstecz</a>
        </div>
        </div>
@endsection
