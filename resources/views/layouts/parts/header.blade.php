<!-- Start header -->
<header id="header">
    <!-- header top search -->
    <div class="header-top">
        <div class="container">
            <form action="">
                <div id="search">
                    <input type="text" placeholder="Type your search keyword here and hit Enter..." name="s" id="m_search" style="display: inline-block;">
                    <button type="submit">
                        <i class="fa fa-search"></i>
                    </button>
                </div>
            </form>
        </div>
    </div>
    <!-- header bottom -->
    <div class="header-bottom">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-sm-6 col-xs-6">
                    <div class="header-contact">
                        <ul>
                            <li>
                                <div class="phone">
                                    <i class="fa fa-phone"></i>
                                    {{ setting('site.phone') }}
                                </div>
                            </li>
                            <li>
                                <div class="mail">
                                    <i class="fa fa-envelope"></i>
                                    {{ setting('site.email') }}
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-6 col-sm-6 col-xs-6">
                    <div class="header-login">
                        <!-- Authentication Links -->
                        @guest
                            <a class="login modal-form" data-target="#login-form" data-toggle="modal" href="#">{{ __('Login / Sign Up') }}</a>
                        @else
                            <a class="login" href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                {{ Auth::user()->name }} {{ __('Logout') }}
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        @endguest
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
<!-- End header -->