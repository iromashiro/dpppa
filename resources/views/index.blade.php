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

                                        <h5 class="entry-title"><a href="{{route('berita.guest', $b->slug)}}">{{$b->judul}}</a></h5>

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

<div class="section-with-carousel with-bg parallax-section" data-bg="{{URL::asset('depan/images/dppa-biru.jpg')}}">

    <div class="comment-section align-center">

        <div class="container">

            <h2 class="section-title">Profil Pejabat</h2>

            <!-- - - - - - - - - - - - - Owl-Carousel - - - - - - - - - - - - - - - -->

            <div class="carousel-type-1">

                <div class="owl-carousel testimonial type-2" data-max-items="3" data-item-margin="30" data-autoplay="true">

                    <!-- Slide -->
                    <div class="item-carousel">
                        <!-- Carousel Item -->

                        <div class="comment-item">

                            <div class="comment-holder">

                                <blockquote>
                                    <p>“Quotes Disini”</p>
                                </blockquote>

                            </div>

                            <!-- bottom-separator -->
                            <div class="bottom-separator"></div>

                        </div>

                        <div class="author-box">

                            <a href="#" class="avatar">
                                <img src="{{URL::asset('depan/images/100x100_author1.jpg')}}" alt="">
                            </a>

                            <div class="author-info">

                                <span class="author-name">Nama Pejabat</span>

                            </div>

                        </div>

                        <!-- /Carousel Item -->
                    </div>
                </div>

            </div>

        </div>

    </div>

</div>

<!-- page-section -->



<!-- page-section -->

<div class="holder-bg type-3 parallax-section" data-bg="{{URL::asset('depan/header.jpg')}}">

    <div class="container">
        <div class="row">
            <div class="col-sm-6">

                <h2 class="section-title">Pertanyaan Yang Sering Ditanyakan</h2>
                <div class="accordion style-2">

                    <!--accordion item-->
                    <div class="accordion-item">
                        <h6 class="a-title">Ut tellus dolor, dapibus eget?</h6>
                        <div class="a-content">
                            <p>
                                Donec eget tellus non erat lacinia fermentum. Donec in velit vel ipsum
                                auctor pulvinar. Vestibulum iaculis lacinia est. Proin dictum elementum
                                velit. Fusce euismod consequat ante.
                            </p>
                            <p>
                                Sed in lacus ut enim adipiscing aliquet. Nulla venenatis. In pede mi,
                                aliquet sit amet, euismod in, auctor ut, ligula.
                            </p>
                        </div>
                    </div>

                    <!--accordion item-->
                    <div class="accordion-item">
                        <h6 class="a-title active">In pede mi, aliquet sit amet, euismod?</h6>
                        <div class="a-content">
                            <p>
                                Donec eget tellus non erat lacinia fermentum. Donec in velit vel ipsum
                                auctor pulvinar. Vestibulum iaculis lacinia est. Proin dictum elementum
                                velit. Fusce euismod consequat ante.
                            </p>
                            <p>
                                Sed in lacus ut enim adipiscing aliquet. Nulla venenatis. In pede mi,
                                aliquet sit amet, euismod in, auctor ut, ligula.
                            </p>
                        </div>
                    </div>

                    <!--accordion item-->
                    <div class="accordion-item">
                        <h6 class="a-title">Quis autem vel eum?</h6>
                        <div class="a-content">
                            <p>
                                Donec eget tellus non erat lacinia fermentum. Donec in velit vel ipsum
                                auctor pulvinar. Vestibulum iaculis lacinia est. Proin dictum elementum
                                velit. Fusce euismod consequat ante.
                            </p>
                            <p>
                                Sed in lacus ut enim adipiscing aliquet. Nulla venenatis. In pede mi,
                                aliquet sit amet, euismod in, auctor ut, ligula.
                            </p>
                        </div>
                    </div>

                    <!--accordion item-->
                    <div class="accordion-item">
                        <h6 class="a-title">Proin dictum elementum velit?</h6>
                        <div class="a-content">
                            <p>
                                Donec eget tellus non erat lacinia fermentum. Donec in velit vel ipsum
                                auctor pulvinar. Vestibulum iaculis lacinia est. Proin dictum elementum
                                velit. Fusce euismod consequat ante.
                            </p>
                            <p>
                                Sed in lacus ut enim adipiscing aliquet. Nulla venenatis. In pede mi,
                                aliquet sit amet, euismod in, auctor ut, ligula.
                            </p>
                        </div>
                    </div>

                    <!--accordion item-->
                    <div class="accordion-item">
                        <h6 class="a-title">Aenean auctor wisi et urna?</h6>
                        <div class="a-content">
                            <p>
                                Donec eget tellus non erat lacinia fermentum. Donec in velit vel ipsum
                                auctor pulvinar. Vestibulum iaculis lacinia est. Proin dictum elementum
                                velit. Fusce euismod consequat ante.
                            </p>
                            <p>
                                Sed in lacus ut enim adipiscing aliquet. Nulla venenatis. In pede mi,
                                aliquet sit amet, euismod in, auctor ut, ligula.
                            </p>
                        </div>
                    </div>

                </div>

            </div>
            <div class="col-sm-6">

                <div class="title-holder">

                    <h2 class="section-title">Kontak Kami</h2>

                </div>

                <form>

                    <input type="text" placeholder="Parent’s name">

                    <input type="text" placeholder="Phone">

                    <input type="email" placeholder="Email">

                    <textarea rows="5" placeholder="Message"></textarea>

                    <a href="#" class="btn">Submit</a>

                </form>


            </div>
        </div>
    </div>

</div>

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
                    <a href="#">
                        <img src="{{URL::asset('depan/852e8-sirup.png')}}" alt=""></a>
                    <!-- /Carousel Item -->
                </div>
                <!-- /Slide -->

                <div class="item-carousel">
                    <!-- Carousel Item -->
                    <a href="#">
                        <img src="{{URL::asset('depan/LAPORSP4N.jpeg')}}" alt=""></a>
                    <!-- /Carousel Item -->
                </div>

                <div class="item-carousel">
                    <!-- Carousel Item -->
                    <a href="#">
                        <img src="{{URL::asset('depan/siga_daerah.png')}}" alt=""></a>
                    <!-- /Carousel Item -->
                </div>

                <div class="item-carousel">
                    <!-- Carousel Item -->
                    <a href="#">
                        <img src="{{URL::asset('depan/0ed89-jdih.png')}}" alt=""></a>
                    <!-- /Carousel Item -->
                </div>

                <div class="item-carousel">
                    <!-- Carousel Item -->
                    <a href="#">
                        <img src="{{URL::asset('depan/LAPORSP4N.jpeg')}}" alt=""></a>
                    <!-- /Carousel Item -->
                </div>


                <div class="item-carousel">
                    <!-- Carousel Item -->
                    <a href="#">
                        <img src="{{URL::asset('depan/d313b-kla.png')}}" alt=""></a>
                    <!-- /Carousel Item -->
                </div>
            </div>

        </div>

    </div>

</div>
@endsection
