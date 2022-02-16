@extends('layouts.guest')
@section('konten')
<div id="content">

    <!-- - - - - - - - - - - - - - Breadcrumbs - - - - - - - - - - - - - - - - -->

    <div class="breadcrumbs-wrap type-2" data-bg="{{URL::asset('depan/images/dppa-biru.jpg')}}">

        <div class="container">

            <h1 class="page-title">Data dan Informaasi Publik</h1>

            <ul class="breadcrumbs">

                <li><a href="index.html">Beranda</a></li>
                <li><a href="news_big.html">Berita</a></li>
                <li>Data dan Informasi Publik</li>

            </ul>

        </div>

    </div>

    <!-- - - - - - - - - - - - - end Breadcrumbs - - - - - - - - - - - - - - - -->

    <div class="page-content-wrap">

        <div class="container">

            <div class="row">

                <!-- Main content -->
                <main id="main" class="col-md-12">

                    <div class="content-element5">

                        <div class="blog-type type-2 style-2 list-view">

                            @foreach ($di as $dis)
                            <!-- image post -->
                            <div class="welcome-item">

                                <div class="welcome-inner">

                                    <div class="welcome-img">
                                        <img src="{{URL::asset('depan/images/360x220_img25.jpg')}}" alt="">
                                        <time class="entry-date" datetime="2016-08-20">
                                        </time>
                                    </div>

                                    <div class="welcome-content">

                                        <svg class="bigHalfCircle" xmlns="http://www.w3.org/2000/svg" version="1.1"
                                            viewBox="0 0 100 100" preserveAspectRatio="none">
                                            <path d="M0 100 C40 0 60 0 100 100 Z"></path>
                                        </svg>

                                        <div class="entry">

                                            <!-- - - - - - - - - - - - - - Entry body - - - - - - - - - - - - - - - - -->

                                            <div class="entry-body">

                                                <div class="wrapper">

                                                    <h5 class="entry-title"><a href="#">{{$dis->nama_menu}}</a></h5>

                                                    <!-- - - - - - - - - - - - - - Entry meta - - - - - - - - - - - - - - - - -->

                                                    <div class="entry-meta">

                                                        <div class="entry-byline"><a href="#">Admin</a></div>
                                                        <a href="#" class="entry-news">News</a>
                                                        <a href="#" class="entry-comments-link">3</a>

                                                    </div>

                                                    <!-- - - - - - - - - - - - - - Entry meta - - - - - - - - - - - - - - - - -->

                                                    <a href="http://">Download</a>

                                                </div>

                                            </div>

                                            <!-- - - - - - - - - - - - - - End of Entry body - - - - - - - - - - - - - - - - -->

                                        </div>

                                    </div>

                                </div>

                            </div>


                            @endforeach
                        </div>
                    </div>

                    {{$di->links('vendor.pagination.bootstrap-4')}}

                </main>




            </div>

        </div>

    </div>

</div>
@endsection
