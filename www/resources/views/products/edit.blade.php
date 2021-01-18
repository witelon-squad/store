
@extends('admin.index')
@section('nav-bar')
@section('content-menu')
<div>
            <div class="pull-left">
                <h2 class="mb-1">Edycja Produktu</h2>
                <a class="btn btn-primary" href="{{ route('products.index') }}">Wstecz</a>
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


    <form action="{{ route('products.update',$product->id) }}">
    	@csrf
        @method('PUT')


         <div class="row">
		    <div class="col-xs-12 col-sm-12 col-md-12">
		        <div class="form-group">
		            <strong>Nazwa produktu:</strong>
		            <input type="text" name="name" value="{{ $product->name }}" class="form-control" placeholder="Nazwa produktu">
		        </div>
		    </div>
             <div class="col-xs-12 col-sm-12 col-md-12">
                 <div class="form-group">
                     <strong>Cena (zł):</strong>
                     <input type="text" name="price" value="{{ $product->price }}" class="form-control" placeholder="Cena">
                 </div>
             </div>
             <div class="col-xs-12 col-sm-12 col-md-12">
                 <div class="form-group">
                     <strong>Zdjęcie</strong>
                     <input type="file" name="image" value="{{ $product->image }}" class="form-control" placeholder="Zdj">
                 </div>
             </div>
		    <div class="col-xs-12 col-sm-12 col-md-12">
                <strong>Opis:</strong>
		        <div class="form-group" id="editor">
		            <textarea class="form-control" style="height:150px" name="description" placeholder="Opis">{{ $product->description }}</textarea>
		        </div>
            </div>
            <div class="form-group d-grid mt-1">
              <button type="submit" class="btn btn-success">Zapisz</button>

            </div>
		</div>


    </form>
</div>
<script src="https://cdn.ckeditor.com/ckeditor5/24.0.0/classic/ckeditor.js"></script>
<script>
    ClassicEditor
        .create( document.querySelector( '#editor' ) )
        .catch( error => {
            console.error( error );
        } );
</script>
@endsection

