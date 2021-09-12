<div>
    {{-- The best athlete wants his opponent at his best. --}}
    <nav class="navbar navbar-expand-lg navbar-dark bg-info shadow-sm">
        <div class="container">
            <a href="" class="navbar-brand">{{$logo}}</a>
            <form action="{{route('search')}}" class="d-flex">
                <input type="search" name="search" class="form-control">
                <input type="submit" name="find" class="btn btn-success">
            </form>
            <ul class="navbar-nav ms-auto">
                <li class="nav-item"><a href="{{route('home')}}" class="btn btn-sm  mt-2 px-3">Home</a></li>
               @if(session()->has('login'))
                <li class="nav-item"><a href="{{ route('insert') }}" class="btn btn-sm btn-success mt-2 px-3">Insert</a></li>
                <li class="nav-item"><a href="{{ route('logout') }}" class="btn btn-sm  mt-2 px-3">Logout</a></li>
                @else
                <li class="nav-item"><a href="{{ route('register') }}" class="btn btn-sm  mt-2 px-3">Register</a></li>
                <li class="nav-item"><a href="{{ route('login') }}" class="btn btn-sm  mt-2 px-3">Login</a></li>
                @endif
            </ul>
        </div>
    </nav>

</div>
