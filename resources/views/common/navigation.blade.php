    <nav>
        <a href="{{route('index')}}" class="{{ $current_page == 'index' ? 'highlighted' : '' }}">Home</a>
        <a href="{{route('about')}}" class="{{ $current_page == 'about' ? 'highlighted' : '' }}">About us</a>
        <a href="{{route('register')}}" class="{{ $current_page == 'register' ? 'highlighted' : '' }}">Register</a>
        <a href="{{route('login')}}" class="{{ $current_page == 'login' ? 'highlighted' : '' }}">Login</a>
    </nav>

