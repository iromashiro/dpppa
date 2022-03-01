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

        <li class="dropdown"><a href="#">Data dan Informasi</a>
            <!--sub menu-->
            <div class="sub-menu-wrap">
                <ul>
                    <li><a href="{{ route('index_pmbg.guest') }}">Pembangunan Manusia Berbasis Gender</a></li>
                    <li><a href="{{ route('index_pai.guest') }}">Profile Anak Indonesia</a></li>
                    <li><a href="{{ route('index_ppi.guest') }}">Profile Perempuan Indonesia</a></li>
                </ul>
            </div>
        </li>


        <li class="dropdown"><a href="#">Informasi Publik</a>
            <!--sub menu-->
            <div class="sub-menu-wrap">
                <ul>
                    <li><a href="{{ route('index_berita.guest') }}">Berita</a></li>
                    <li><a href="">Pengumuman</a></li>
                </ul>
            </div>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{route('galeri.guest')}}">Galeri</a>
        </li>
    </ul>
</nav>
