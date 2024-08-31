<nav class="navbar navbar-expand-md bg-body-tertiary navbar-dark fixed-top">
    <div class="container-fluid">
        <a class="navbar-brand" href="{{ route('home') }}">
            <img src="{{ asset('assets/elements/my-logo/IRJ-logo-pink.svg') }}" alt="IRJ Logo" class="nav-logo" />
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            {{-- <span class="navbar-toggler-icon"></span> --}}
            <i class="fa-solid fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto mb-lg-0 ul-links">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="{{ route('home') }}">Home</a>
                </li>
                <div></div>
                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="{{ route('about-me') }}">About Me</a>
                </li>
                <li class="nav-item dropdown nav-dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                        aria-expanded="false">
                        Projects
                    </a>
                    <ul class="dropdown-menu dropdown-menu-center">
                        <div class="dropdown-below-nav">
                            <li>
                                <a class="dropdown-item nav-link-dropdown"
                                    href="{{ route('developer-projects') }}">Developer Projects</a>
                            </li>
                            <li>
                                <a class="dropdown-item nav-link-dropdown" href="{{ route('design-projects') }}">Design
                                    Projects</a>
                            </li>
                        </div>
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link nav-link-contact" href="{{ route('contact') }}">Contact</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
