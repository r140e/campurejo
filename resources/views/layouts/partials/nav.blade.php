<nav class="gtco-nav" role="navigation">
    <div class="gtco-container">
        <div class="row">
            <div class="col-xs-2">
                <div id="gtco-logo"><a href="/"><img width="50" height="50" src="{{ asset('/img/its-putih.png') }}"/></a></div>
            </div>
            <div class="col-xs-8 text-center menu-1">
                <ul>
                    <li><a href="/">Home</a></li>
                    <li><a href="/anggota">Anggota</a></li>                       
                    <li><a href="/blog">Blog</a></li>
                    <li><a href="/blog">Hasil</a></li>
                </ul>
            </div>
            <div class="col-xs-2 text-right hidden-xs menu-2">
                <ul>
                    @guest
                    <li class="btn-cta"><a href="{{ route('login') }}"><span>{{ __('Login') }}</span></a></li> 
                    @else
                    <li class="has-dropdown btn-cta">
                        <a href="#"><span>{{ Auth::user()->name }}</span></a>
                        <ul class="dropdown">
                            <li><a href='/home'>Dashboard</a></li>
                            <li><a href="{{ route('logout') }}"
                                    onclick="event.preventDefault();
                                                    document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}</a>
                            </li>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                            </form>
                        </ul>
                    </li>
                    @endguest                  
                </ul>
            </div>
        </div>
        
    </div>
</nav>