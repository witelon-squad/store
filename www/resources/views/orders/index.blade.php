@extends('admin.index')


@section('content-menu')
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
    <br /><table class="table table-bordered mt-3">
        <tr>
            <th>#</th>
            <th>Data</th>
            <th>Status</th>
            <th width="280px">Akcja</th>
        </tr>
        @foreach ($content as $orders)
            <tr>
                <td>{{ ++$i }}</td>
                <td>{{ $orders->date }}</td>
                <td>{{ $orders->status }}</td>
                <td>
                    <form action="{{ route('orders.destroy',$orders->id) }}" method="POST">
                        <a class="btn btn-info" href="{{ route('orders.show',$orders->id) }}">Pokaz</a>
                        @can('product-edit')
                            <a class="btn btn-primary" href="{{ route('orders.edit',$orders->id) }}">Edytuj</a>
                        @endcan
                        @csrf
                        @method('DELETE')
                        @can('product-delete')
                            <button type="submit" class="btn btn-danger">Usuń</button>
                        @endcan
                    </form>
                </td>
            </tr>
        @endforeach
    </table>

@endsection
