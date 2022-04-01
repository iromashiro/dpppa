@extends('layouts.guest')
@section('konten')
<div class="rev-slider-wrapper">

    <div id="rev-slider" class="rev-slider" data-version="5.0">

        <ul>

            <li data-transition="fade" class="align-center">

                <img src="{{URL::asset('depan/header.jpg')}}" class="rev-slidebg" alt="">

                <!-- - - - - - - - - - - - - - Layer 1 - - - - - - - - - - - - - - - - -->

                <div class="tp-caption tp-resizeme scaption-white-text rs-parallaxlevel-1" data-x="center" data-y="top" data-voffset="180" data-whitespace="nowrap" data-frames='[{"delay":150,"speed":2000,"frame":"0","from":"y:50px;opacity:0;","to":"o:1;","ease":"Power3.easeOut"},{"delay":"wait","speed":1000,"frame":"999","to":"y:[175%];","mask":"x:inherit;y:inherit;s:inherit;e:inherit;","ease":"Power2.easeInOut"}]' data-responsive_offset="on" data-elementdelay="0.05">Selamat Datang di Website
                </div>

                <!-- - - - - - - - - - - - - - End of Layer 1 - - - - - - - - - - - - - - - - -->

                <!-- - - - - - - - - - - - - - Layer 2 - - - - - - - - - - - - - - - - -->

                <div class="tp-caption tp-resizeme scaption-white-large rs-parallaxlevel-2" data-x="center" data-y="top" data-voffset="225" data-frames='[{"delay":450,"speed":2000,"frame":"0","from":"y:50px;opacity:0;","to":"o:1;","ease":"Power3.easeOut"},{"delay":"wait","speed":1000,"frame":"999","to":"y:[175%];","mask":"x:inherit;y:inherit;s:inherit;e:inherit;","ease":"Power2.easeInOut"}]'>
                    Dinas Pemberdayaan Perempuan <br> dan Perlindungan Anak
                </div>

                <!-- - - - - - - - - - - - - - End of Layer 2 - - - - - - - - - - - - - - - - -->

                <!-- - - - - - - - - - - - - - Layer 3 - - - - - - - - - - - - - - - - -->

                <!-- - - - - - - - - - - - - - End of Layer 3 - - - - - - - - - - - - - - - - -->

            </li>

            <li data-transition="fade" class="align-center">

                <img src="{{URL::asset('depan/header2.jpg')}}" class="rev-slidebg" alt="">

                <!-- - - - - - - - - - - - - - Layer 1 - - - - - - - - - - - - - - - - -->

                <div class="tp-caption tp-resizeme scaption-white-text rs-parallaxlevel-1" data-x="center" data-y="top" data-voffset="180" data-whitespace="nowrap" data-frames='[{"delay":150,"speed":2000,"frame":"0","from":"y:50px;opacity:0;","to":"o:1;","ease":"Power3.easeOut"},{"delay":"wait","speed":1000,"frame":"999","to":"y:[175%];","mask":"x:inherit;y:inherit;s:inherit;e:inherit;","ease":"Power2.easeInOut"}]' data-responsive_offset="on" data-elementdelay="0.05">Selamat Datang di Website
                </div>

                <!-- - - - - - - - - - - - - - End of Layer 1 - - - - - - - - - - - - - - - - -->

                <!-- - - - - - - - - - - - - - Layer 2 - - - - - - - - - - - - - - - - -->

                <div class="tp-caption tp-resizeme scaption-white-large rs-parallaxlevel-2" data-x="center" data-y="top" data-voffset="225" data-frames='[{"delay":450,"speed":2000,"frame":"0","from":"y:50px;opacity:0;","to":"o:1;","ease":"Power3.easeOut"},{"delay":"wait","speed":1000,"frame":"999","to":"y:[175%];","mask":"x:inherit;y:inherit;s:inherit;e:inherit;","ease":"Power2.easeInOut"}]'>
                    Dinas Perlindungan Anak <br> dan Pemberdayaan Perempuam
                </div>
            </li>



        </ul>

    </div>

</div>

<!-- - - - - - - - - - - - - - End of Slider - - - - - - - - - - - - - - - - -->

<!-- page-section -->
<!--
<div class="page-section">

    <div class="container">
        <div class="row">
            <div class="col-md-6">

                <img src="{{URL::asset('depan/images/584x307_img.jpg')}}" alt="">

            </div>
            <div class="col-md-6">

                <div class="title-holder">

                    <h3 class="section-title">Sambutan Kepala Dinas <br> Perlindungan
                        Anak dan Pemberdayaan Perempuan</h3>
                    <div class="text-wrap">
                        <p>masukkan kalimat disini</p>
                    </div>

                </div>

            </div>
        </div>
    </div>
</div>
-->

<!-- page-section -->

<!-- page-section -->



<!-- page-section -->

<div class="holder-bg parallax-section owl-custom" data-bg="{{URL::asset('depan/images/dppa-hijau.jpg')}}">

    <div class="container">

        <div class="title-holder align-center">

            <h2 class="section-title">Berita Terkini</h2>

        </div>

        <!-- - - - - - - - - - - - - Owl-Carousel - - - - - - - - - - - - - - - -->

        <div class="carousel-type-2">

            <div class="owl-carousel blog-type" data-max-items="3" data-item-margin="30">

                @foreach ($berita as $b)
                <!-- Slide -->
                <div class="item-carousel">
                    <!-- Carousel Item -->
                    <div class="welcome-item">

                        <div class="welcome-inner">

                            <div class="welcome-img">
                                <img src="{{URL::asset($b->thumbnail)}}" alt="">
                            </div>

                            <div class="welcome-content">

                                <svg class="bigHalfCircle" xmlns="http://www.w3.org/2000/svg" version="1.1" viewBox="0 0 100 100" preserveAspectRatio="none">
                                    <path d="M0 100 C40 0 60 0 100 100 Z"></path>
                                </svg>

                                <div class="entry">

                                    <!-- - - - - - - - - - - - - - Entry body - - - - - - - - - - - - - - - - -->

                                    <div class="entry-body">

                                        <h5 class="entry-title"><a href="{{route('berita.guest', $b->slug)}}">{!! Str::limit($b->judul, 20) !!}</a></h5>

                                        {!! Str::limit($b->isi_berita, 20) !!}

                                    </div>

                                    <!-- - - - - - - - - - - - - - End of Entry body - - - - - - - - - - - - - - - - -->

                                    <!-- - - - - - - - - - - - - - Class Information - - - - - - - - - - - - - - - - -->

                                    <div class="class-info">
                                        <div class="class-age">

                                            <span>Diupload oleh</span>
                                            Admin

                                        </div>
                                    </div>

                                    <!-- - - - - - - - - - - - - - Class Information - - - - - - - - - - - - - - - - -->

                                </div>

                            </div>

                        </div>

                    </div>
                    <!-- /Carousel Item -->
                </div>
                <!-- /Slide -->
                @endforeach


            </div>

            <div class="owl-custom-buttons">

                <div class="custom-owl-prev"></div>
                <div class="custom-owl-next"></div>

            </div>

        </div>

    </div>

</div>

<!-- page-section -->


 <div class="holder-bg parallax-section owl-custom" data-bg="{{URL::asset('depan/images/dppa-biru.jpg')}}">

    <div class="container">

        <div class="title-holder align-center">

            <h2 class="section-title">Pengumuman</h2>

        </div>

        <!-- - - - - - - - - - - - - Owl-Carousel - - - - - - - - - - - - - - - -->

        <div class="carousel-type-2">

            <div class="owl-carousel blog-type" data-max-items="3" data-item-margin="30">

                @foreach ($pengumuman as $p)
                <!-- Slide -->
                <div class="item-carousel">
                    <!-- Carousel Item -->
                    <div class="welcome-item">

                        <div class="welcome-inner">

                            <div class="welcome-img">
                                <img src="{{URL::asset($b->thumbnail)}}" alt="">
                            </div>

                            <div class="welcome-content">

                                <svg class="bigHalfCircle" xmlns="http://www.w3.org/2000/svg" version="1.1" viewBox="0 0 100 100" preserveAspectRatio="none">
                                    <path d="M0 100 C40 0 60 0 100 100 Z"></path>
                                </svg>

                                <div class="entry">

                                    <!-- - - - - - - - - - - - - - Entry body - - - - - - - - - - - - - - - - -->

                                    <div class="entry-body">

                                        <h5 class="entry-title"><a href="{{route('berita.guest', $b->slug)}}">{!! Str::limit($p->judul, 20) !!}</a></h5>

                                        {!! Str::limit($p->isi_pengumuman, 20) !!}

                                    </div>

                                    <!-- - - - - - - - - - - - - - End of Entry body - - - - - - - - - - - - - - - - -->

                                    <!-- - - - - - - - - - - - - - Class Information - - - - - - - - - - - - - - - - -->

                                    <div class="class-info">
                                        <div class="class-age">

                                            <span>Diupload oleh</span>
                                            Admin

                                        </div>
                                    </div>

                                    <!-- - - - - - - - - - - - - - Class Information - - - - - - - - - - - - - - - - -->

                                </div>

                            </div>

                        </div>

                    </div>
                    <!-- /Carousel Item -->
                </div>
                <!-- /Slide -->
                @endforeach


            </div>

            <div class="owl-custom-buttons">

                <div class="custom-owl-prev"></div>
                <div class="custom-owl-next"></div>

            </div>

        </div>

    </div>

</div>

<!-- page-section -->



<!-- page-section -->

<!-- page-section -->
<div class="page-section type2">

    <!-- 165x165_brand section -->
    <div class="container">

        <!-- - - - - - - - - - - - - Owl-Carousel - - - - - - - - - - - - - - - -->

        <div class="carousel-type-2 brand-box">

            <div class="owl-carousel" data-max-items="6" data-item-margin="30" data-autoplay="true">

                <!-- Slide -->
                <div class="item-carousel">
                    <!-- Carousel Item -->
                    <a href="https://sirup.lkpp.go.id">
                        <img src="{{URL::asset('depan/852e8-sirup.png')}}" alt=""></a>
                    <!-- /Carousel Item -->
                </div>
                <!-- /Slide -->

                <div class="item-carousel">
                    <!-- Carousel Item -->
                    <a href="https://lapor.go.id">
                        <img src="{{URL::asset('depan/LAPORSP4N.jpeg')}}" alt=""></a>
                    <!-- /Carousel Item -->
                </div>

                <div class="item-carousel">
                    <!-- Carousel Item -->
                    <a href="https://siga.muaraenimkab.go.id">
                        <img src="{{URL::asset('depan/siga_daerah.png')}}" alt=""></a>
                    <!-- /Carousel Item -->
                </div>

                <div class="item-carousel">
                    <!-- Carousel Item -->
                    <a href="https://jdih.muaraenimkab.go.id">
                        <img src="{{URL::asset('depan/0ed89-jdih.png')}}" alt=""></a>
                    <!-- /Carousel Item -->
                </div>

                <div class="item-carousel">
                    <!-- Carousel Item -->
                    <a href="https://lapor.go.id">
                        <img src="{{URL::asset('depan/LAPORSP4N.jpeg')}}" alt=""></a>
                    <!-- /Carousel Item -->
                </div>


                <div class="item-carousel">
                    <!-- Carousel Item -->
                    <a href="https://kla.id">
                        <img src="{{URL::asset('depan/d313b-kla.png')}}" alt=""></a>
                    <!-- /Carousel Item -->
                </div>
                
                <div class="item-carousel">
                    <!-- Carousel Item -->
                    <a href="tel:129"">
                        <img src="{{URL::asset('depan/sapa129.png')}}" alt=""></a>
                    <!-- /Carousel Item -->
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
