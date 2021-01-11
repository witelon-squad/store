
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


    <form action="{{ route('products.update',$product->id) }}" method="POST">
    	@csrf
        @method('PUT')


         <div class="row">
		    <div class="col-xs-12 col-sm-12 col-md-12">
		        <div class="form-group">
		            <strong>Name:</strong>
		            <input type="text" name="name" value="{{ $product->name }}" class="form-control" placeholder="Name">
		        </div>
		    </div>
		    <div class="col-xs-12 col-sm-12 col-md-12">
		        <div class="form-group">
		            <strong>Detail:</strong>
		            <textarea class="form-control" style="height:150px" name="detail" placeholder="Detail">{{ $product->detail }}</textarea>
		        </div>
            </div>
            <div class="form-group d-grid mt-1">
              <button type="submit" class="btn btn-success">Submit</button>

            </div>
		</div>


    </form>
</div>
@endsection
