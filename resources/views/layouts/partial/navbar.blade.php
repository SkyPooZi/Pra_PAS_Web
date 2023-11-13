<nav class="navbar navbar-expand-lg bg-body-tertiary" data-bs-theme="dark">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">Navbar</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup"
            aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav">
                <a class="nav-link @if(request()->is('home')) active @endif" aria-current="page" href="/home">Home</a>
                <a class="nav-link @if(request()->is('drink/all')) active @endif" href="/drink/all">Drink</a>
                <a class="nav-link @if(request()->is('food/all')) active @endif" href="/food/all">Food</a>
            </div>
        </div>
    </div>
</nav>