<header class="d-flex align-items-center flex-column position-absolute w-100">
    <nav class="navbar navbar-expand-md navbar-dark bg-transparent w-100 py-0">
        <!-- Right Side Of Navbar -->
        <ul class="navbar-nav ml-auto">
            <!-- Authentication Links -->
            @guest
            <li class="nav-item">
                <a class="nav-link" href="{{ route('login') }}">{{ __('Connessione') }}</a>
            </li>
            @if (Route::has('register'))
            <li class="nav-item">
                <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
            </li>
            @endif
            @else
            <li class="nav-item dropdown">
                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                    {{ Auth::user()->name }}
                </a>

                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                        {{ __('Logout') }}
                    </a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                </div>
            </li>
            @endguest
        </ul>
    </nav>
    <!-- <div class="logo">
        <a class="navbar-brand" href="{{ url('/') }}">
            <img height="80" src="{{asset('img/logo.webp')}}" alt="">
        </a>
    </div> -->
    <logo-component tall="80" route="{{ url('/') }}" logo="{{asset('img/logo.webp')}}"></logo-component>
    <nav class="navbar navbar-expand-md navbar-dark bg-transparent">
        <div class="container">

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <!-- Left Side Of Navbar -->
                <ul class="navbar-nav mr-auto text-uppercase">
                    <li class="nav-item">
                        <a class="nav-link" href="/">{{ __('Spada Laser') }}</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/">{{ __('Collezionme Legendary') }}</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/">{{ __('Accessori') }}</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/">{{ __('Blog') }}</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/">{{ __('Istruzioni') }}</a>
                    </li>
                </ul>


            </div>
        </div>
    </nav>



</header>
