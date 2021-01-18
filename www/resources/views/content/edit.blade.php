@extends('admin.index')


@section('content-menu')
    <div>
        <div class="pull-left">
            <h2 class="mb-1">Edycja strony</h2>
            <a class="btn btn-primary" href="{{ route('content.index') }}">Wstecz</a>
        </div>


        @if ($errors->any())
            <div class="alert alert-danger">
                <strong>Whoops!</strong>Dane są nie poprawne<br><br>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        @foreach($content as $data)
        <form action="{{ route('content.update',$data->id) }}" method="POST">
            @csrf
            @method('PUT')


            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Nazwa strony:</strong>
                        <p>{{$data->name_web}}</p>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <strong>Opis:</strong>
                    <div class="form-group" id="editor">
                        <textarea class="form-control" style="height:150px" name="content"
                                  placeholder="Opis">{{ $data->content }}</textarea>
                    </div>
                </div>
                <div class="form-group d-grid mt-1">
                    <button type="submit" class="btn btn-success">Zapisz</button>

                </div>
            </div>


        </form>
        @endforeach
    </div>

    <script src="https://cdn.ckeditor.com/ckeditor5/24.0.0/classic/ckeditor.js"></script>
    <script>
        ClassicEditor
            .create(document.querySelector('#editor'))
            .catch(error => {
                console.error(error);
            });
    </script>
@endsection
