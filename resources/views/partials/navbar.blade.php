
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">    
            <a class="navbar-brand" href="#">
                PORTOFOLIO
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link {{ ($title === "Home") ? 'active' : '' }}" href="/home">Home </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ ($title === "About") ? 'active' : '' }}" href="/about">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ ($title === "Education") ? 'active' : '' }}" href="/education">Education</a>
                </li>
                @if(Auth::user())
                <li class="nav-item">
                    <a class="nav-link {{ ($title === "Projects") ? 'active' : '' }}" href="/projects">Projects</a>
                </li>
                @endif
                <li class="nav-item">
                    <a class="nav-link {{ ($title === "Tulis Email") ? 'active' : '' }}" href="/send-email">Tulis Email</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ ($title === "Blog") ? 'active' : '' }}" href="/posts">Blog</a>
                </li>
                <li class="nav-item d-none d-sm-inline-block">
                    <a class="nav-link" href="{{ url('/gallery') }}">Gallery</a>
                </li>
                </ul>
            </div>
        </div>
        </nav>