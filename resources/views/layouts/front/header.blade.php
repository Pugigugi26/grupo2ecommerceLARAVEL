<header>
    <nav class="navbar fixed-top navbar-expand-lg nav-dark">
        <a class="navbar-brand" href="index.php"><img src="/images/logo_led_cob.png"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class=""><i class="fas fa-bars letrablanca"></i></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item"><a class="nav-link" href="/" >HOME</a></li>
                <li class="nav-item"><a class="nav-link" href="/familias">FAMILIAS COB</a></li>
                <li class="nav-item"><a class="nav-link" href="/faqs">FAQS</a></li>
                <li class="nav-item"><a class="nav-link" href="/contacto">CONTACTO</a></li>
            </ul>
            <ul class="navbar-nav ml-auto">
                <!-- Right Side Of Navbar -->
                    <!-- Authentication Links -->
                    @guest
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('login') }}">{{ __('INGRESO') }}</a>
                        </li>
                        @if (Route::has('register'))
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('register') }}">{{ __('REGISTRO') }}</a>
                            </li>
                        @endif
                    @else
                        <li class="nav-item"><a a class="nav-link" href="familias"><i class="fa fa-shopping-cart" aria-hidden="true" ></i></a>
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::user()->name }} <span class="caret"></span>
                                <i class="fa fa-user"></i>
                            </a>

                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                   onclick="event.preventDefault();
                                                 document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                    <i class="fas fa-power-off" title="Salir"></i>
                                </a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    @csrf
                                </form>
                            </div>
                        </li>
                    @endguest

            </ul>
        </div>
    </nav>
</header>
