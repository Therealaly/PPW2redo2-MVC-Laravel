@extends('template.main')

@section('jumbotron')
    <div class="jumbotron jumbotron-fluid">
        <div class="container">
            <h1>{{ $posts->title }}</h1>
            <small>Tanggal: {{ $posts->created_at }}</small>
            <p>{{ $posts->description }}</p>
        </div>
    </div>


@endsection