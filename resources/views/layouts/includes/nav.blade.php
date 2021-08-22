<nav class="navbar navbar-expand-md navbar-light bg-indigo shadow-sm" style="position: fixed;z-index:99999;width:100%">
    <div class="container-fluid">
        <a class="navbar-brand change_color_to_white" href="{{ url('/') }}">
            {{ config('app.name', 'Hatirpal') }}
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto" style="margin-left: auto;">
            </ul>
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="#">
                        <div id="google_translate_element"></div>
                    </a>
                </li>
                @guest
                @if (Route::has('login'))
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                </li>
                @endif

                @if (Route::has('register'))
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                </li>
                @endif
                @else
                <div class="dropdown notification">

                    <a class="btn dropdown-toggle " href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="fas fa-bell"></i> Notification
                    </a>

                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                        <h6><a class="dropdown-item" href="#"><strong>Read</strong></a></h6>
                        <li>
                            <a class="dropdown-item" href="#">Another action</a>
                            <a class="dropdown-item time" href="#">2 hours ago</a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="#">Another action</a>
                            <a class="dropdown-item time" href="#">A2 hours ago</a>

                        </li>

                        <h6><a class="dropdown-item" href="#"><strong>Unread</strong></a></h6>
                        <li>
                            <a class="dropdown-item" href="#">Another action</a>
                            <a class="dropdown-item time" href="#">A2 hours ago</a>
                        </li>
                    </ul>
                </div>

                <li class="nav-item dropdown">
                    <a class="nav-link change_color_to_white" href="{{url('admin/userprofile/')}}">
                        {{ Auth::user()->name }}
                    </a>
                </li>



                @endguest
            </ul>
        </div>
    </div>
</nav>
