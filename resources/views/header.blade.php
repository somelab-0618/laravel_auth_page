<header class="header">
    <h1 class="header-title">Laravel Sample</h1>
    <div class="links">
        @if(Request::is('home'))
            <a href="{{ route('auth.index') }}">Logout</a>
        @else
            <a href="{{ route('auth.index') }}">Login</a>
            <a href="{{ route('auth.create') }}">SignUp</a>
        @endif
    </div>
</header>
