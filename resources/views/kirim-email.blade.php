@extends('template.main', ["title" => "Tulis Email",])
 
@section('jumbotron')
    
  <div class="container">
    <div style="background-color: rgba(0, 0, 0, 0.05); padding:40px ">
        <h3 class="text-center">Kirim Email</h3>
        {{-- send email --}}
        @if (session('status'))
        <div class="alert alert-primary" role="alert">
            {{ session('status') }}
        </div>
        @endif

        <div>
            <form action="{{ route('post-email') }}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="name">Nama</label>
                    <input type="text" class="form-control" name="name" id="name" placeholder="Nama">
                </div>
                <div class="form-group">
                    <label for="email">Email Tujuan</label>
                    <input type="email" class="form-control" name="email" id="email" placeholder="Email Tujuan">
                </div>
                <div class="form-group">
                    <label for="name">Body Deskripsi</label>
                    <textarea name="body" class="form-control" name="body" id="" cols="30" rows="10"></textarea>
                </div>
                <div class="form-group">
                <button type="submit" class="btn btn-primary">Kirim Email</button>
                </div>
        </div>
    </div>
</div>


@endsection