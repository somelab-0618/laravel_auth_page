<header class="header">
    <h1 class="header-title">Laravel Sample</h1>
    <div class="links">
        @if(Request::is('home'))
            <a href="{{ route('login') }}">Logout</a>
        @else
            <a href="{{ route('login') }}">Login</a>
            <a href="{{ route('signup') }}">SignUp</a>
        @endif
    </div>
</header>
