@extends('admin.index')
@section('nav-bar')

@section('content-menu')
<div>
    <h2 style="margin-bottom: 5px">Użytkownicy</h2>
        <div>
            <a class="btn btn-success" href="{{ route('users.create') }}">Utwórz nowego użytkownika</a>
        </div>

@if ($message = Session::get('success'))
<div class="alert alert-success">
  <p>{{ $message }}</p>
</div>
@endif



<table class="table table-bordered mt-3">
 <tr>
   <th>Lp.</th>
   <th>Nick</th>
   <th>Email</th>
   <th>Rola</th>
   <th width="280px">Action</th>
 </tr>
 @foreach ($data as $key => $user)
  <tr>
    <td>{{ ++$i }}</td>
    <td>{{ $user->name }}</td>
    <td>{{ $user->email }}</td>
    <td>
      @if(!empty($user->getRoleNames()))
        @foreach($user->getRoleNames() as $v)
           <label class="badge bg-success">{{ $v }}</label>
        @endforeach
      @endif
    </td>
    <td>
       <a class="btn btn-info" href="{{ route('users.show',$user->id) }}">Show</a>
       <a class="btn btn-primary" href="{{ route('users.edit',$user->id) }}">Edit</a>
        {!! Form::open(['method' => 'DELETE','route' => ['users.destroy', $user->id],'style'=>'display:inline']) !!}
            {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
        {!! Form::close() !!}
    </td>
  </tr>
 @endforeach
</table>
</div>


{!! $data->render() !!}
@endsection
