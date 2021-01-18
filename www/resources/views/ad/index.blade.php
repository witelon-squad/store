@extends('admin.index')


@section('content-menu')
    <h2 style="margin-bottom: 5px">Reklamy produktów na stronie głównej</h2>
    @can('product-create')
        <a class="btn btn-success" href="{{ route('ad.create') }}">Wybierz jaki produkt do promowania</a>
    @endcan


    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif


    <br /><table class="table table-bordered mt-3">
        <tr>
            <th>#</th>
            <th>Nazwa produktu</th>
            <th>Od kiedy jest promowany</th>
            <th width="280px">Akcja</th>
        </tr>
        @foreach ($ad as $ads)

            <tr>
                <td>{{ ++$i }}</td>
                <td>{{ $ads->name }}</td>
                <td>{{ $ads->from_ad }}</td>
                <td>
                    <form action="{{ route('ad.destroy',$ads->id) }}" method="POST">
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


    <div class="d-flex justify-content-center">

    </div>

@endsection
