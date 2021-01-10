@extends('admin.index')


@section('content-menu')
    <h2>Products</h2>
        @can('product-create')
            <a class="btn btn-success" href="{{ route('products.create') }}">Utwórz nowy produkt</a>
        @endcan
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif


    <br /><table class="table table-bordered">
        <tr>
            <th>Lp.</th>
            <th>Nazwa</th>
            <th>Szczegóły</th>
            <th width="280px">Akcja</th>
        </tr>
        @foreach ($products as $product)
            <tr>
                <td>{{ ++$i }}</td>
                <td>{{ $product->name }}</td>
                <td>{{ $product->detail }}</td>
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


    {!! $products->links() !!}

@endsection
