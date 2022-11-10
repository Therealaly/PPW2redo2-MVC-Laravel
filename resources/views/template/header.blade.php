<!-- Navbar -->
<nav class="main-header navbar navbar-expand navbar-white navbar-light"
style="margin-left: 250px">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
            <a class="nav-link {{ ($title === "Home") ? 'active' : '' }}" href="/home">Home </a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
            <a class="nav-link {{ ($title === "About") ? 'active' : '' }}" href="/about">About</a>
        </li>
        <li cclass="nav-item d-none d-sm-inline-block">
            <a class="nav-link {{ ($title === "Education") ? 'active' : '' }}" href="/education">Education</a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
            <a class="nav-link {{ ($title === "Projects") ? 'active' : '' }}" href="/projects">Projects</a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
            <a class="nav-link {{ ($title === "Blog") ? 'active' : '' }}" href="/posts">Blog</a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
            <a class="nav-link" href="{{ url('/gallery') }}">Gallery</a>
        </li>
    </ul>
    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
        <!-- Navbar Search -->
        <li class="nav-item">
            <a class="nav-link" data-widget="navbar-search" href="#" role="button">
                <i class="fas fa-search"></i>
            </a>
            <div class="navbar-search-block">
                <form class="form-inline">
                    <div class="input-group input-group-sm">
                        <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
                        <div class="input-group-append">
                            <button class="btn btn-navbar" type="submit">
                                <i class="fas fa-search"></i>
                            </button>
                            <button class="btn btn-navbar" type="button" data-widget="navbar-search">
                                <i class="fas fa-times"></i>
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </li>
    </ul>
</nav>