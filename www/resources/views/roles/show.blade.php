@extends('admin.index')


@section('content-menu')
    <h2 class='mb-3'>Pokaż uprawnienie</h2>
        <div class="form-group">
            <strong>Nazwa:</strong>
            {{ $role->name }}
        </div>
        <div class="form-group">
            <strong>Uprawnienia:</strong>
            @if(!empty($rolePermissions))
                @foreach($rolePermissions as $v)
                    <label class="label label-success">{{ $v->name }},</label>
                @endforeach
            @endif
        </div>
        <div class="pull-right">
           <br /> <a class="btn btn-primary" href="{{ route('roles.index') }}"> Back</a>
        </div>
@endsection
