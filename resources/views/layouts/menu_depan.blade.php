<nav id="main-navigation" class="main-navigation">
    <ul id="menu" class="clearfix">
        <li class="nav-item">
            <a class="nav-link" href="{{route('index')}}">Beranda</a>
        </li>
        <li class="dropdown"><a href="#">Profil</a>
            <!--sub menu-->
            <div class="sub-menu-wrap">
                <ul>
                    @foreach ($profil as $p)
                    <li><a href="{{route('profil', $p->slug)}}">{{$p->nama_menu}}</a></li>
                    @endforeach
                </ul>
            </div>
        </li>

        <li class="nav-item">
            <a class="nav-link" href="{{route('id.guest')}}">Data dan Informasi</a>
        </li>

        <li class="dropdown"><a href="#">Informasi Publik</a>
            <!--sub menu-->
            <div class="sub-menu-wrap">
                <ul>
                    <li><a href="">Berita</a></li>
                    <li><a href="">Artikel</a></li>
                    <li><a href="">Pengumuman</a></li>
                </ul>
            </div>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#">Kontak Kami</a>
        </li>
    </ul>
</nav>
