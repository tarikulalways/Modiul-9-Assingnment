<nav class="navbar fixed-top shadow-sm navbar-expand-lg bg-light navbar-light py-3 py-lg-0 px-lg-5">
    <a href="{{ route('home') }}" class="navbar-brand ml-lg-3">
        <h1 class="m-0 display-5"><span class="text-primary">MEETME</h1>
    </a>
    <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse px-lg-3" id="navbarCollapse">
        <div class="navbar-nav m-auto py-0">
            <a href="{{ route('home') }}" class="nav-item nav-link active">Home</a>
            <a href="{{ route('about') }}" class="nav-item nav-link">About</a>
            <a href="{{ route('service') }}" class="nav-item nav-link">Service</a>
            <a href="{{ route('protfolio') }}" class="nav-item nav-link">Portfolio</a>
            <a href="{{ route('contact') }}" class="nav-item nav-link">Contact</a>
        </div>
        <a href="{{ route('contact') }}" class="btn btn-menu d-none d-lg-block" style="background-color:#457efa; color: #ffffff;">Hire
            Me</a>
    </div>
</nav>
