@extends('template.main')

@section('jumbotron')
    <div class="jumbotron jumbotron-fluid">
        <div class="container">
            <h1>{{ $posts->title }}</h1>
            <small>Tanggal: {{ $posts->created_at }}</small>
            <br>
            <a href="/posts/{{$posts->id}}/edit" class="btn btn-primary">Edit</a>
            <form action="{{ route('posts.destroy', $posts->id) }}" method="POST">
            @method('DELETE')
            {{ csrf_field() }}
                <input type="hidden" name="id" value="{{ $posts->id }}">
                <button type="submit" class="btn btn-danger">Delete</button>
            </form>
            
            <p>{{ $posts->description }}</p>
        </div>
    </div>


@endsection