<header class="border">
    <div class="container d-flex align-items-center">
        <div>
            <img src="{{ asset('images/dc-logo.png') }}" alt="dc-logo" class="me-3">
        </div>

        <nav class="header-nav">
            <ul class="d-flex list-none h-100">
                <li class="me-3 h-100">
                    <a
                        href="{{ route('home') }}"
                        @if (Request::route()->getName() === 'home') class="active" @endif
                    >
                        HOME
                    </a>
                </li>
                <li class="h-100">
                    <a
                        href="{{ route('news') }}"
                        @if (Request::route()->getName() === 'news') class="active" @endif
                    >
                        NEWS
                    </a>
                </li>
            </ul>
        </nav>
    </div>
</header>