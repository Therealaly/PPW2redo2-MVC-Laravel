@extends('template.main')

@section('jumbotron')
    <div class="jumbotron jumbotron-fluid">
        <div class="container">
            <h1>Edit Blog Post</h1>
            <form action="{{ route('posts.update', $posts->id) }}" method="POST" enctype="multipart/form-data">
                @method('PUT')
                {{ csrf_field() }}
                <div class="form-group">
                    <label for="title">Title</label>
                    <input value="{{ $posts->title }}" type="text" class="form-control" id="title" aria-describedby="emailHelp" name="title">
                </div>
                <div class="form-group">
                    <label for="description">Description</label>
                    <textarea class="form-control" name="description" id="description" rows="5">{{ $posts->description }}</textarea>
                </div>
                <div class="form-group">
                    <label for="input-file">File Input</label>
                    <div class="input-group">
                        <div class="custom-file">
                            <input value="{{ $posts->picture }}" type="file" class="custom-file-input" id="input-file" name="picture">
                            <label class="custom-file-label" for="input-file">Choose File</label>
                        </div>
                    </div>
                </div>
                <input type="hidden" name="id" value="{{ $posts->id }}">
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
@endsection