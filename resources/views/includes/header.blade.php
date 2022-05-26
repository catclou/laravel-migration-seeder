<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
        <a class="navbar-brand text-uppercase" href="#">Treni</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav">
            <a class="nav-link {{ Request::route()->getName() == 'home' ? 'active' : '' }}" aria-current="page" href="{{ route('home') }}">Home</a>
            <a class="nav-link {{ Request::route()->getName() == 'aboutUs' ? 'active' : '' }}" href="{{ route('aboutUs') }}">About us</a>
            <a class="nav-link {{ Request::route()->getName() == 'contacts' ? 'active' : '' }}" href="{{ route('contacts') }}">Contacts</a>
            <a class="nav-link {{ Request::route()->getName() == 'trains' ? 'active' : '' }}" href="{{ route('trains') }}">Trains</a>
        </div>
        </div>
    </div>
</nav>