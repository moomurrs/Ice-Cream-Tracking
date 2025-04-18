<nav class="navbar navbar-expand-lg bg-dark" data-bs-theme="dark">
    <div class="container-fluid">
        <a class="navbar-brand" href="/"><span class="fw-bold">JoJo's</span> <span class="fst-italic">Bizzare</span> Ice Cream</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarColor02"
            aria-controls="navbarColor02" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarColor02">
            <ul class="navbar-nav me-auto">

                <li class="nav-item">
                    <a class="nav-link <?= $_SERVER['REQUEST_URI'] == '/' ? 'active' : ''; ?>" href="/">Home
                        <span class="visually-hidden">(current)</span>
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="/menu">Menu</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="/order">Order</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="/gallery">Gallery</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link <?= $_SERVER['REQUEST_URI'] == '/about' ? 'active' : ''; ?>" href="/about">About</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="/contact">Contact</a>
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button"
                        aria-haspopup="true" aria-expanded="false">Dropdown</a>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="">Action</a>
                        <a class="dropdown-item" href="#">Another action</a>
                        <a class="dropdown-item" href="#">Something else here</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">Separated link</a>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</nav>