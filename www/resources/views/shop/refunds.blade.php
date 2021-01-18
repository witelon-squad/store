@extends('layout.main')
@section('header')
@endsection
@section('menu')
@endsection
@section('content')

    <main>
        <div class="container">
            <section class="main_section text_section">
            @foreach($content as $data)
                {!!$data->content!!}
            @endforeach
        </div>
    </main>
@section('footer')
@endsection
@section('script')
@endsection
@endsection

