@extends('template.main')

@section('jumbotron')
    <div class="jumbotron jumbotron-fluid">
        <div class="container">
            @if(session()->has('post-success'))
                <div class="alert alert-success">
                {{ session()->get('post-success') }}
                </div>
            @elseif(session()->has('post-update'))
                <div class="alert alert-primary">
                {{ session()->get('post-update') }}
                </div>
            @elseif(session()->has('post-delete'))
                <div class="alert alert-danger">
                {{ session()->get('post-delete') }}
                </div>
            @endif
            <h1 class="display-4">Blog Posts</h1>
            @if(Auth::user())
            <a type="" class="btn btn light btn-primary mt-1 mb-3" href="{{ route('posts.create') }}">Create a New Post</a>
            @endif
            @if(count($posts)>0)
                @foreach ($posts as $post)
                    <div class="well">
                        <h3><a href="/posts/{{ $post->id }}">{{ $post->title }}</a></h3>
                        <small>Tanggal: {{ $post->created_at }}</small> <br>
                        @if($post->picture != 'noimage.png')
                        <img src="{{asset('storage/posts_image/'.$post->picture)}}" style="width: 100%; height: 255px; object-fit: cover; border-radius: 20px">
                        @endif
                    </div>
                @endforeach
            @else
                <h3>Tidak ada data</h3>
            @endif

            Halaman : {{ $posts->currentPage() }} <br />
            Jumlah Data : {{ $posts->total() }} <br />
            Data Per Halaman : {{ $posts->perPage() }} <br />
            <div class="d-flex">
                {{ $posts->links() }}
            </div>
        </div>
    </div>
@endsection