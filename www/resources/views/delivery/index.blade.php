@extends('admin.index')


@section('content-menu')
    <h2 style="margin-bottom: 5px">Dostawy</h2>
    @can('product-create')
        <a class="btn btn-success" href="{{ route('delivery.create') }}">Utwórz nowy typ wysyłki</a>
    @endcan
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif


    <br /><table class="table table-bordered mt-3">
        <tr>
            <th>#</th>
            <th>Typ</th>
            <th>Przedpłata</th>
            <th>Pobranie</th>
            <th>Czas dostawy</th>
            <th width="280px">Akcja</th>
        </tr>
        @foreach ($delivery as $data)
            <tr>
                <td>{{ ++$i }}</td>
                <td>{{ $data->type }}</td>
                <td>{{ $data->prepayment }} zł</td>
                <td>{{ $data->charging }} zł</td>
                <td>od 1 dnia do {{ $data->delivery_time }} dni</td>
                <td>
                    <form action="{{ route('delivery.destroy',$data->id) }}" method="POST">
                        @can('product-edit')
                            <a class="btn btn-primary" href="{{ route('delivery.edit',$data->id) }}">Edytuj</a>
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
