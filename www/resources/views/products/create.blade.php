@extends('admin.index')


@section('content-menu')
    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Whoops!</strong>Dane w formularzu są nie poprawne<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <h2 class='mb-3'>Dodaj nowy produkt</h2>
    <form action="{{ route('products.store') }}" method="POST">
        @csrf
        <div class="col-md-8">
            <div class="form-group">
                <strong>Nazwa:</strong>
                <input type="text" name="name" class="form-control" placeholder="Nazwa">
                <strong>Szczegóły:</strong>
                <div id="editor">
                    <textarea class="form-control" style="height:150px" name="description" placeholder="Szczegóły"></textarea>
                </div>
                <strong>Cena:(zł)</strong>
                <input type="text" name="price" class="form-control" placeholder="Cena">
                <strong>Kategorie:</strong>
                <select class="form-select"  name="categories">
                    @foreach ($category as $record_category)
                        @foreach ($record_category as $lp_category )
                            @if(is_numeric($lp_category))
                                <option value="{{$lp_category}}">
                                    @else
                                        {{ $lp_category }}</option>
                            @endif
                        @endforeach
                    @endforeach
                </select>
                <strong>Zdjęcie:</strong>
                <br/><label for="exampleFormControlFile1">Example file input</label>
                <input type="file" class="form-control-file" name="image">
            </div>
            <br/>
            <button type="submit" class="btn btn-primary">Zapisz</button>
        </div>
        </div>
    </form>
    <script src="https://cdn.ckeditor.com/ckeditor5/24.0.0/classic/ckeditor.js"></script>
    <script>
        ClassicEditor
            .create(document.querySelector('#editor'))
            .catch(error => {
                console.error(error);
            });
    </script>
@endsection
