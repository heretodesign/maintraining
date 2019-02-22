
        <!-- <nav class="navbar navbar-expand-md navbar-light navbar-laravel">
            <div class="container"> -->
                <!-- <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Laravel') }}
                </a> -->
                <!-- <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mr-auto">

                    </ul> -->

                    <!-- <ul class="navbar-nav ml-auto">
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div> 
        </nav> -->

<div class="bg-white">
    <div class="container-fluid mx-auto flex items-center py-4">
        <div  class="w-1/5">
            <a href="#">
                <img src="/img/logo.png" alt="logo">
            </a>
        </div>
        <div class="w-3/5 text-center">
            <nav>
                <a href="{{ url('/') }}" class="top-nav-item no-underline"> Home</a>
                <a href="{{ ('/about') }}" class="top-nav-item no-underline"> About Us</a>
                <!-- <a href="{{ ('/trainers') }}" class="top-nav-item no-underline"><i class="fa fa-bell fa-lg"></i> Trainers</a> -->
                <a href="{{ ('/training') }}" class="top-nav-item no-underline"> Training</a>
                <a href="{{ ('/contact') }}" class="top-nav-item no-underline"> Contact Us</a>
            </nav>
        </div>
        <div class="w-1/5 flex justify-end">
            @guest
                <div>
                    <a class="bg-black hover:bg-teal-dark text-white text-white  py-2 px-4 rounded-full block uppercase no-underline tracking-wide text-grey-darker text-xs font-bold mb-2 btn py-3 px-10 mr-3" href="{{ route('login') }}">{{ __('Login') }}</a>
                </div>
                @if (Route::has('register'))
                    <div class="nav-item">
                        <a class="bg-black hover:bg-teal-dark text-white  py-2 px-4 rounded-full block uppercase tracking-wide no-underline text-grey-darker text-xs font-bold mb-2 btn py-3 px-10 mr-3" href="{{ route('register') }}">{{ __('Register') }}</a>
                    </div>
                @endif
                <!-- <div class="button px-2"><button class="bg-black hover:bg-teal-dark text-white font-medium py-3 px-10 uppercase rounded-full">Login</button></div>

            <div class="button px-2 mr-4"><button class="bg-black hover:bg-teal-dark text-white font-medium py-3 px-10 uppercase rounded-full">Register</button></div> -->
            @else
                <div class="dropdown show">
                    <a class="bg-black hover:bg-teal-dark text-white rounded-full block uppercase tracking-wide no-underline text-grey-darker text-xs font-bold  btn py-3 px-10 mr-5 dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">{{ Auth::user()->name }}</a>

                    <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                        <a class="dropdown-item inline-block text-sm ml-5 px-4 py-1 leading-none border rounded-full text-black border-black hover:border-black hover:text-teal hover:bg-white lg:mt-0" href="{{ route('logout') }}"
                           onclick="event.preventDefault(); document.getElementById('logout-form').submit();">{{ __('Logout') }}</a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">@csrf</form>
                    </div>
                </div>
            @endguest
            <!-- <div class="button px-2"><button class="bg-black hover:bg-teal-dark text-white font-medium py-3 px-10 uppercase rounded-full">Login</button></div>

            <div class="button px-2 mr-4"><button class="bg-black hover:bg-teal-dark text-white font-medium py-3 px-10 uppercase rounded-full">Register</button></div> -->
        </div>
    </div>
</div>