@extends('admin.index')


@section('content-menu')
    <h2 style="margin-bottom: 5px">Produkty</h2>
        @can('product-create')
            <a class="btn btn-success" href="{{ route('sync') }}">Zainportuj produkty z magazynu</a>
            <a class="btn btn-success" href="{{ route('products.create') }}">Utwórz nowy produkt</a>
            <a class="btn btn-success" href="{{ route('sync') }}">Synchronizuj</a>
        @endcan


    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif


    <br /><table class="table table-bordered mt-3">
        <tr>
            <th>#</th>
            <th>Nazwa</th>
            <th>Opis</th>
            <th>Cena</th>
            <th>Zdjęcie</th>
            <th width="280px">Akcja</th>
        </tr>
        @foreach ($products as $product)
            <tr>
                <td>{{ ++$i }}</td>
                <td>{{ $product->name }}</td>
                <td>{{ $product->description }}</td>
                <td>{{ $product->price }} zł</td>
                <td>{{ $product->image }}</td>
                <td>
                    <form action="{{ route('products.destroy',$product->id) }}" method="POST">
                        <a class="btn btn-info" href="{{ route('products.show',$product->id) }}">Pokaz</a>
                        @can('product-edit')
                            <a class="btn btn-primary" href="{{ route('products.edit',$product->id) }}">Edytuj</a>
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


    <div class="d-flex justify-content-center">
        {!! $products->links() !!}
    </div>

@endsection
