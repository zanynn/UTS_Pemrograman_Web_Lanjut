@extends('layouts.Master')

@section('title', 'Zanynn - Home')
    
@section('content')

<div id="main-wrapper">
<!-- Page Preloader -->
<div id="preloader">
    <div id="status">
        <div class="status-mes"></div>
    </div>
</div>

<div class="uc-mobile-menu-pusher">

<div class="content-wrapper">
<nav class="navbar m-menu navbar-default navbar-fixed-top">
    <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                    data-target="#navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="/"><img src="img/logo.png" alt=""></a>
        </div>
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="#navbar-collapse-1">

            <ul class="nav-cta hidden-xs">
                <li class="dropdown"><a href="#" data-toggle="dropdown" class="dropdown-toggle"><i
                        class="fa fa-search"></i></a>
                    <ul class="dropdown-menu">
                        <li>
                            <div class="head-search">
                                <form role="form">
                                    <!-- Input Group -->
                                    <div class="input-group">
                                        <input type="text" class="form-control" placeholder="Type Something">
			                                <span class="input-group-btn">
			                                  <button type="submit" class="btn btn-primary">Search</button>
			                                </span>
                                    </div>
                                </form>
                            </div>
                        </li>
                    </ul>
                </li>
            </ul>

            <ul class="nav navbar-nav navbar-right main-nav">
                <li class="active"><a href="/">Home</a></li>
                <li><a href="/about">About</a></li>
                <li><a href="/guide">Guide</a></li>
                <li><a href="/contact">Contact</a></li>
                
                
                @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                <a class="dropdown-header" href="/me"><i class="fa fa-user" aria-hidden="true"></i>  Me</a>
                                    <a class="dropdown-header" href="/manage"><i class="fa fa-cog" aria-hidden="true"></i>  Manage</a>
                                    <a class="dropdown-header" href="/manageabout"><i class="fa fa-pencil" aria-hidden="true"></i>  Edit About Page</a>
                                    <a class="dropdown-header" href="/message"><i class="fa fa-comments-o" aria-hidden="true"></i>  Message</a>
                                    <a class="dropdown-header" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();"><i class="fa fa-sign-out" aria-hidden="true"></i>
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                                
                            </li>
                        @endguest
                    
                </li>
            </ul>

        </div>
        <!-- .navbar-collapse -->
    </div>
    <!-- .container -->
</nav>
<!-- .nav -->

<div id="x-corp-carousel" class="carousel slide hero-slide hidden-xs" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
        <li data-target="#x-corp-carousel" data-slide-to="0" class="active"></li>
        <li data-target="#x-corp-carousel" data-slide-to="1"></li>
        <li data-target="#x-corp-carousel" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
        <div class="item active">
            <img src="https://cdn.motor1.com/images/mgl/OnEVy/s1/toyota-86-rocket-bunny.jpg" alt="Hero Slide">

            <div class="carousel-caption">
                <h1>A style that drives automotive enthusiasts.</h1>

                <p>The Kei Miura design has earned global recognition for the trend-setting 
                style that drives automotive enthusiasts.</p>
            </div>
        </div>
        <div class="item">
            <img src="https://cdn.motor1.com/images/mgl/V6Ep7/s1/toyota-86-rocket-bunny.jpg" alt="...">

            <div class="carousel-caption">
                <h1>Make your car amazing.</h1>

                <p>pengabdian dan kekaguman dari para pembalap, pemenang pameran mobil dan pemasang mereka.</p>
            </div>
        </div>
        <div class="item">
            <img src="https://cdn.motor1.com/images/mgl/lVypw/s1/toyota-86-rocket-bunny.jpg" alt="...">

            <div class="carousel-caption">
                <h1>Good choice for your car</h1>

                <p>konstruksi dan perlengkapan berkualitas terbaik yang hanya dapat disediakan oleh manufaktur 
                presisi. Kit Kelinci / Pandem Roket buatan Jepang hanya menggunakan bahan FRP kualitas tertinggi 
                dan waktu pengeringan yang tepat untuk mencegah distorsi.</p>
            </div>
        </div>
    </div>

    <!-- Controls -->
    <a class="left carousel-control" href="#x-corp-carousel" role="button" data-slide="prev">
        <i class="fa fa-angle-left" aria-hidden="true"></i>
        <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#x-corp-carousel" role="button" data-slide="next">
        <i class="fa fa-angle-right" aria-hidden="true"></i>
        <span class="sr-only">Next</span>
    </a>
</div>
<!-- #x-corp-carousel-->

<section class="x-services ptb-100 gray-bg">

    <section class="section-title">
        <div class="container text-center">
            <h2>What We Offer</h2>
            <span class="bordered-icon"><i class="fa fa-circle-thin"></i></span>
        </div>
    </section>
    @foreach ($bodykit as $bk)
    <div class="container">
        <div class="row">
            <div class="col-mt-6">
                <div class="thumbnail clearfix">
                    <a href="#"><img class="img-responsive" src="{{ $bk->imageurl }}" alt="Image"></a>

                    <div class="caption">
                        <h3><a href="#">{{ $bk->title }}</a></h3>

                        <p>{{ Str::limit($bk->content, 100, '...') }}</p>
                        <a href="{{ './article/'.$bk->id }}" class="btn btn-primary">Detail Product & Buy</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- .row -->
    </div>
    @endforeach
    <!-- .container -->
</section>
<!-- .x-services -->

<section class="x-features">
    <section class="section-title">
        <div class="container text-center">
            <h2>What is Rocket Bunny?</h2>
            <span class="bordered-icon"><i class="fa fa-circle-thin"></i></span>
        </div>
    </section>
    <div class="container">
        <div class="row">
            <div class="col-md-6 img-left">
                <img class="img-responsive" src="https://bulletproofautomotive.com/wp-content/uploads/2017/06/rocketbunny-logo.png" alt="">
                
            </div>
            <div class="col-md-6">
                <div class="promo-block-wrapper clearfix">
                    <div class="promo-icon">
                        <i class="fa fa-star-half"></i>
                    </div>
                    <div class="promo-content">
                        <h3>"We will improve the appearance of your car"</h3>

                        <p>Kei Miura’s design has gained global acclaim for the trend-setting style that
                        drives automotive enthusiast, to demand authentic Rocket Bunny / Pandem aero kits.
                        However, it's the top quality Japanese-made versions, which GReddy exclusively imports,
                        ...</p>
                        <a href="/about" class="btn btn-primary">more</a>
                    </div>
                </div>
                <!-- /.promo-block-wrapper -->

                
                <!-- /.promo-block-wrapper -->

            </div>
        </div>
    </div>
</section>
<!-- .x-features -->

<section class="testimonial">
    <section class="section-title">
        <div class="container text-center">
            <h2>Satisfied Customer</h2>
            <span class="bordered-icon"><i class="fa fa-circle-thin"></i></span>
        </div>
    </section>
    <div class="container">
        <div id="testimonialSlider" class="carousel slide" data-ride="carousel">

            <!-- Wrapper for slides -->
            <div class="carousel-inner" role="listbox">
                <div class="item active">
                    <blockquote>
                        <ul>
                            <li><img src="img/img-testimonial-1.jpg" class="img-responsive" alt=""/></li>
                            <li class="name">Jennie</li>
                        </ul>
                        <p>This model was a good car but the only few downsides is that only two doors open,<br>
                        the metal for the body is very plasticy feeling,
                        </p>

                    </blockquote>
                </div>
                <div class="item">
                    <blockquote>
                        <ul>
                            <li><img src="img/img-testimonial-2.jpg" class=" img-responsive" alt=""/></li>
                            <li class="name">Irene</li>
                        </ul>
                        <p>Very fantastic, this bodykit makes my car fantastic I love the wide body detail <br>
                        and the fiber material is very sturdy and very light, I think this is a good <br>
                        choice for your Toyota GT86 car.
                        </p>

                    </blockquote>
                </div>
                <div class="item">
                    <blockquote>
                        <ul>
                            <li><img src="img/img-testimonial-3.jpg" class="img-responsive" alt=""/></li>
                            <li class="name">Lisa</li>
                        </ul>

                        <p>I love this model, it is like magic that makes my car amazing, this is very <br>
                        recommendation to make your car amazing like me
                        </p>
                    </blockquote>
                </div>
            </div>
            <!-- Controls -->
            <a class="left carousel-control" href="#testimonialSlider" role="button" data-slide="prev">
                <span><i class="fa fa-angle-left"></i></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#testimonialSlider" role="button" data-slide="next">
                <span><i class="fa fa-angle-right"></i></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
        <!-- #testimonialSlider -->
    </div>
</section>
<!-- .testimonial -->

<section class="client-logo ptb-100">
    <section class="section-title">
        <div class="container text-center">
            <h2>Our Clients</h2>
            <span class="bordered-icon"><i class="fa fa-circle-thin"></i></span>
        </div>
    </section>
    <div class="container">
        <div class="row">
            <div class="col-md-2 col-sm-4 col-xs-6 section-margin">
                <a href="#"><img src="img/logo-client-1.jpg" alt="Image"></a>
            </div>
            <div class="col-md-2 col-sm-4 col-xs-6 section-margin">
                <a href="#"><img src="img/logo-client-2.jpg" alt="Image"></a>
            </div>
            <div class="col-md-2 col-sm-4 col-xs-6 section-margin">
                <a href="#"><img src="img/logo-client-3.jpg" alt="Image"></a>
            </div>
            <div class="col-md-2 col-sm-4 col-xs-6 section-margin">
                <a href="#"><img src="img/logo-client-4.jpg" alt="Image"></a>
            </div>
            <div class="col-md-2 col-sm-4 col-xs-6 section-margin">
                <a href="#"><img src="img/logo-client-5.jpg" alt="Image"></a>
            </div>
            <div class="col-md-2 col-sm-4 col-xs-6 section-margin">
                <a href="#"><img src="img/logo-client-6.jpg" alt="Image"></a>
            </div>
        </div>
    </div>
    <!--end of .container -->
</section>
<!-- /.client-logo -->


<footer class="footer">

    <!-- Footer Widget Section -->
    <div class="footer-widget-section">
        <div class="container text-center">
            <div class="row">
                <div class="col-sm-4 footer-block">
                    <div class="footer-widget widget_text">
                        <div class="footer-logo">
                            <a href="#"><img src="img/logo.png" alt=""></a>
                        </div>
                        <p>Our business was founded by car enthusiasts, just like you. Our passion has fueled us
                        to become the one stop shop for all your performance related needs. We’re a small team
                        based out of Las Vegas, Nevada with over 15 years of experience in both racing and
                        the automotive aftermarket!</p>

                    </div>
                </div><!-- /.col-sm-4 -->

                <div class="col-sm-4 footer-block">
                    <div class="footer-widget widget_text">
                        <h3>We will make your car amazing</h3>
                        <p>We have been following the development of the 86 chassis since the very beginning to 
                        thoroughly understand its strengths and weaknesses. This helps us effectively source or 
                        manufacture the best possible parts for your car! If we wouldn’t put it on our car, 
                        we don’t expect you to either.</p>
                    </div>
                </div><!-- /.col-sm-4 -->

                <div class="col-sm-4 footer-block last">
                    <div class="footer-widget widget_text">
                        <h3>Contact Us</h3>
                        <address>
                            Call Us 08xxxxx or 021xxxxxxx<br>
                            Send an Email on <a href="mailto:#">zanynn@hotmail.com</a><br>
                            Visit Us The Breeze , South Tangerang<br>
                            Indonesia<br>
                        </address>

                        <ul class="list-inline social-links">
                            <li><a href="https://www.instagram.com/zanynn_/"><i class="fa fa-instagram"></i></a></li>
                            <li><a href="https://twitter.com/Zanynn_"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="https://www.youtube.com/channel/UCVrKbudeXfPYKomd0_K1AJg"><i class="fa fa-youtube"></i></a></li>
                            <li><a href="https://www.twitch.tv/riotgames"><i class="fa fa-twitch"></i></a></li>
                        </ul>
                    </div>
                </div><!-- /.col-sm-4 -->
            </div>
        </div>
    </div><!-- /.Footer Widget Section -->

    <div class="copyright-section">
        <div class="container clearfix">
            <span class="copytext">&copy; ZANYNN. All rights reserved. | Design By: <a href="#">Muhammad Fauzan Tri Aji - 1931710150</a></span>

            <ul class="list-inline pull-right">
                <li class="active"><a href="/">Home</a></li>
                <li><a href="/about">About</a></li>
                <li><a href="/guide">Guide</a></li>
                <li><a href="/contact">Contact</a></li>
                <li><a href="/me">Me</a></li>
            </ul>
        </div><!-- .container -->
    </div><!-- .copyright-section -->
</footer>
<!-- .footer -->

</div>
<!-- .content-wrapper -->
</div>
<!-- .offcanvas-pusher -->

<div class="uc-mobile-menu uc-mobile-menu-effect">
    <button type="button" class="close" aria-hidden="true" data-toggle="offcanvas"
            id="uc-mobile-menu-close-btn">&times;</button>
    <div>
        <div>
            <ul id="menu">
                <li><a href="index.html">Home</a></li>
                <li><a href="about.html">About</a></li>
                <li><a href="services.html">Services</a></li>
                <li><a href="contact.html">Contact</a></li>
            </ul>
        </div>
    </div>
</div>
<!-- .uc-mobile-menu -->

</div>
<!-- #main-wrapper -->


<!-- Script -->
<script src="js/jquery-2.1.4.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"
        integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS"
        crossorigin="anonymous"></script>
<script src="js/smoothscroll.js"></script>
<script src="js/mobile-menu.js"></script>
<script src="js/flexSlider/jquery.flexslider-min.js"></script>
<script src="js/scripts.js"></script>
</body>
</html>
@endsection