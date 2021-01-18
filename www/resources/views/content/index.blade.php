@extends('admin.index')


@section('content-menu')
    <h2 style="margin-bottom: 5px">Treść na stronach</h2>
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif


    <br /><table class="table table-bordered mt-3">
        <tr>
            <th>#</th>
            <th>Nazwa strony</th>
            <th width="280px">Akcja</th>
        </tr>
        @foreach ($contents as $content)
            <tr>
                <td>{{ ++$i }}</td>
                <td>{{ $content->name_web }}</td>
                <td>
                    <form>
                        @can('product-edit')
                            <a class="btn btn-primary" href="{{ route('content.edit',$content->id) }}">Edytuj</a>
                        @endcan
                        @csrf
                    </form>
                </td>
            </tr>
        @endforeach
    </table>

@endsection
