<nav class="uk-container uk-margin uk-light {{ $navbarModel }}" uk-navbar="mode: click">
    <div class="uk-navbar-left">
        <a class="uk-navbar-item uk-logo" href="{{ url('/') }}"><img width="50" height="50" src="{{ asset('/img/its-putih.png') }}"/></a>
    </div>
    <div class="uk-navbar-right">
        <ul class="uk-navbar-nav uk-visible@s">
            <li>
                <a href="#">Stuktur</a>
                <div class="uk-navbar-dropdown">
                    <ul class="uk-nav uk-navbar-dropdown-nav">
                        <li><a href="/struktur">Organisasi</a></li>
                        <li><a href="/satgas">Satgas</a></li>
                        <li><a href="/kak">KAK</a></li>
                    </ul>
                </div>
            </li>
            <li>
                <a href="/kegiatan">Kegiatan</a>
                <div class="uk-navbar-dropdown">
                    <ul class="uk-nav uk-navbar-dropdown-nav">
                        <li><a href="/fotogrametri">Fotogrametri</a></li>
                        <li><a href="/gnss">GNSS</a></li>
                        <li><a href="/hidrografi">Hidrografi</a></li>
                        <li><a href="/topografi">Topografi</a></li>
                    </ul>
                </div>
            </li>
            <li><a href="/kelompok">Kelompok</a></li>            
            <li><a href="/blog">Blog</a></li>
            <li><a href="/web">Hasil</a></li>
        </ul>                   
        <a class="uk-navbar-toggle uk-hidden@s" href="#offcanvas-slide" uk-navbar-toggle-icon="" uk-toggle=""></a>
    </div>
</nav>