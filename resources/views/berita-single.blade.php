@extends('layouts.guest')
@section('konten')
<div id="content">

    <!-- - - - - - - - - - - - - - Breadcrumbs - - - - - - - - - - - - - - - - -->

    <div class="breadcrumbs-wrap type-2" data-bg="{{URL::asset('depan/images/dppa-biru.jpg')}}">

        <div class="container">

            <h1 class="page-title">{{$berita->judul}}</h1>

            <ul class="breadcrumbs">

                <li><a href="index.html">Beranda</a></li>
                <li><a href="news_big.html">Berita</a></li>
                <li>{{$berita->judul}}</li>

            </ul>

        </div>

    </div>

    <!-- - - - - - - - - - - - - end Breadcrumbs - - - - - - - - - - - - - - - -->

    <div class="page-content-wrap">

        <div class="container">

            <div class="row">

                <!-- Main content -->
                <main id="main" class="col-md-8">

                    <div class="content-element6">

                        <div class="single-news blog-type type-2 style-2">

                            <div class="welcome-item">

                                <div class="welcome-inner">

                                    <div class="welcome-img">
                                        <img src="{{URL::asset($berita->thumbnail)}}" alt="">
                                    </div>

                                    <div class="welcome-content">

                                        <svg class="bigHalfCircle" xmlns="http://www.w3.org/2000/svg" version="1.1"
                                            viewBox="0 0 100 100" preserveAspectRatio="none">
                                            <path d="M0 100 C40 0 60 0 100 100 Z"></path>
                                        </svg>

                                        <div class="entry">

                                            <!-- - - - - - - - - - - - - - Entry meta - - - - - - - - - - - - - - - - -->

                                            <div class="entry-meta">

                                                <a href="#"
                                                    class="entry-calendar">{{$berita->created_at->format('d-m-Y')}}</a>
                                                <div class="entry-byline"><a href="#">Admin</a></div>

                                            </div>

                                            <!-- - - - - - - - - - - - - - Entry meta - - - - - - - - - - - - - - - - -->

                                            <!-- - - - - - - - - - - - - - Entry body - - - - - - - - - - - - - - - - -->

                                            <div class="entry-body">

                                                <div class="content-element3">
                                                    {!!$berita->isi_berita!!}
                                                </div>



                                            </div>

                                            <!-- - - - - - - - - - - - - - End of Entry body - - - - - - - - - - - - - - - - -->

                                            <!-- - - - - - - - - - - - - - Entry meta - - - - - - - - - - - - - - - - -->

                                            <div class="entry-meta">

                                                <div class="entry-tags">
                                                    <a href="#">activities</a>,
                                                    <a href="#">education</a>,
                                                    <a href="#">games</a>
                                                </div>
                                                <a href="#" class="entry-share f-right">Share</a>

                                            </div>

                                            <!-- - - - - - - - - - - - - - Entry meta - - - - - - - - - - - - - - - - -->

                                        </div>

                                    </div>

                                </div>

                            </div>

                        </div>



                    </div>







                </main>

                <!-- Sidebar-->
                <aside id="sidebar" class="col-md-4">

                    <!-- widget News -->
                    <div class="widget">

                        <h4 class="widget-title">Berita Populer</h4>

                        <ul class="news-list small-img">

                            @foreach ($pn as $pn)
                            <li>

                                <article class="entry">

                                    <!-- - - - - - - - - - - - - - Attachment - - - - - - - - - - - - - - - - -->

                                    <div class="entry-attachment">

                                        <a class="#" href="#"><img src="{{URL::asset($pn->thumbnail)}}" alt=""></a>

                                    </div>

                                    <!-- - - - - - - - - - - - - - End of Attachment - - - - - - - - - - - - - - - - -->

                                    <!-- - - - - - - - - - - - - - Entry body - - - - - - - - - - - - - - - - -->

                                    <div class="entry-body">

                                        <!-- - - - - - - - - - - - - - Entry Meta - - - - - - - - - - - - - - - - -->

                                        <div class="entry-meta">

                                            <time class="entry-date"
                                                datetime="2016-01-27">{{$pn->created_at->format('d-m-Y')}}</time>
                                        </div>

                                        <!-- - - - - - - - - - - - - - End of Meta - - - - - - - - - - - - - - - - -->

                                        <h5 class="entry-title"><a href="#">{{$pn->judul}}</a></h5>

                                        <div class="entry-meta">

                                            <a href="#" class="entry-news">Berita</a>

                                        </div>

                                    </div>

                                    <!-- - - - - - - - - - - - - - End of Entry body - - - - - - - - - - - - - - - - -->

                                </article>

                            </li>

                            @endforeach


                        </ul>

                    </div>
                    <!-- /widget -->

                </aside>

            </div>

        </div>

    </div>

</div>
@endsection
