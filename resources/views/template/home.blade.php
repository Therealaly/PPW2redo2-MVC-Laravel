 @extends('template.main')
 
 @section('jumbotron')

<div class="container">
    <div class="card-body">
        @auth
        <p>Welcome <b>{{ Auth::user()->name }}</b></p>
        <a class="btn btn-danger" href="{{ route('logout') }}">Logout</a>
        @endauth
        @guest
        <a class="btn btn-primary" href="{{ route('login') }}">Login</a>
        <a class="btn btn-info" href="{{ route('register') }}">Register</a>
        @endguest
    </div>
</div>
<section>
    <div class="jumbotron jumbotron-fluid">
        <div class="wrapper-fluid container">
            <!-- Content Header (Page header) -->
            <div class="content-header">
                <h1 class="m-0">Halaman Home</h1>
            </div> 
        </div>
        <div class="content container">
            <p class="lead">Welcome to my Portofolio. Thanks for visiting!!</p>    
        </div>
    </div>  
</section>
@endsection