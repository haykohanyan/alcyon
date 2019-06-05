<!DOCTYPE html>
<html class="wide wow-animation" lang="en">
<head>
    <title>Alcyon</title>
    <meta name="format-detection" content="telephone=no">
    <meta name="viewport"
          content="width=device-width, height=device-height, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta charset="utf-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="icon" href="{{asset('images/favicon.ico')}}" type="image/x-icon">
    <!-- Stylesheets-->
    <link rel="stylesheet" type="text/css"
          href="//fonts.googleapis.com/css?family=Poppins:400,500,600%7CTeko:300,400,500%7CMaven+Pro:500">
    <link rel="stylesheet" href="{{asset('css/bootstrap.css')}}">
    <link rel="stylesheet" href="{{asset('css/fonts.css')}}">
    <link rel="stylesheet" href="{{asset('css/style.css')}}" id="main-styles-link">
    <style>
        span.stars, span.stars span {
            display: block;
            background: url({{asset('images/stars.png')}}) 0 -16px repeat-x;
            width: 80px;
            height: 16px;
        }

        span.stars span {
            background-position: 0 0;
        }
    </style>
</head>
<body>

<div class="preloader">
    <div class="preloader-body">
        <div class="cssload-container"><span></span><span></span><span></span><span></span>
        </div>
    </div>
</div>
<div class="page">
    <!-- Page Header-->
    <header class="section page-header">
        <!-- RD Navbar-->
        <div class="rd-navbar-wrap">
            <nav class="rd-navbar rd-navbar-classic" data-layout="rd-navbar-fixed" data-sm-layout="rd-navbar-fixed"
                 data-md-layout="rd-navbar-fixed" data-md-device-layout="rd-navbar-fixed"
                 data-lg-layout="rd-navbar-static" data-lg-device-layout="rd-navbar-fixed"
                 data-xl-layout="rd-navbar-static" data-xl-device-layout="rd-navbar-static"
                 data-xxl-layout="rd-navbar-static" data-xxl-device-layout="rd-navbar-static"
                 data-lg-stick-up-offset="46px" data-xl-stick-up-offset="46px" data-xxl-stick-up-offset="46px"
                 data-lg-stick-up="true" data-xl-stick-up="true" data-xxl-stick-up="true">
                <div class="rd-navbar-main-outer">
                    <div class="rd-navbar-main">
                        <!-- RD Navbar Panel-->
                        <div class="rd-navbar-panel">
                            <!-- RD Navbar Toggle-->
                            <button class="rd-navbar-toggle" data-rd-navbar-toggle=".rd-navbar-nav-wrap"><span></span>
                            </button>
                            <!-- RD Navbar Brand-->
                            <div class="rd-navbar-brand"><a class="brand" href="{{route('main.index')}}"><img
                                            src="{{asset('images/logo.png')}}" alt="" width="191" height="52"/></a>
                            </div>
                        </div>
                        <div class="rd-navbar-main-element">
                            <div class="rd-navbar-nav-wrap">
                                <div class="rd-navbar-share fl-bigmug-line-share27"
                                     data-rd-navbar-toggle=".rd-navbar-share-list" style="left: 40px;">
                                    <ul class="list-inline rd-navbar-share-list">
                                        <li class="rd-navbar-share-list-item"><a class="icon fa fa-facebook"
                                                                                 href="#"></a></li>
                                        <li class="rd-navbar-share-list-item"><a class="icon fa fa-twitter"
                                                                                 href="#"></a></li>
                                        <li class="rd-navbar-share-list-item"><a class="icon fa fa-google-plus"
                                                                                 href="#"></a></li>
                                        <li class="rd-navbar-share-list-item">
                                            <a href="#">
                                                <img src="{{asset('images/up.ico')}}" alt="" class="ic"
                                                     style="width: 30px;height: 30px;max-width: unset!important;">
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                                <!-- RD Navbar Nav-->
                                <ul class="rd-navbar-nav" id="header_menu">
                                    @foreach($texts as $key=>$text)
                                        @if($key==6)
                                            <li class="rd-nav-item "><a class="rd-nav-link"
                                                                        href="{{route('main.index')}}">{{$text['title_'.LaravelLocalization::getCurrentLocale()]}}</a>
                                            </li>
                                        @elseif($key==7)
                                            <li class="rd-nav-item"><a class="rd-nav-link"
                                                                       href="{{route('main.about')}}">{{$text['title_'.LaravelLocalization::getCurrentLocale()]}}</a>
                                            </li>
                                        @elseif($key==8)
                                            <li class="rd-nav-item"><a class="rd-nav-link"
                                                                       href="{{route('main.services')}}">{{$text['title_'.LaravelLocalization::getCurrentLocale()]}}</a>
                                            </li>
                                        @elseif($key==9)
                                            <li class="rd-nav-item"><a class="rd-nav-link"
                                                                       href="{{route('main.portfolio')}}">{{$text['title_'.LaravelLocalization::getCurrentLocale()]}}</a>
                                        @elseif($key==10)
                                            <li class="rd-nav-item"><a class="rd-nav-link"
                                                                       href="{{route('main.gallery')}}">{{$text['title_'.LaravelLocalization::getCurrentLocale()]}}</a>
                                            </li>
                                        @elseif($key==11)
                                            <li class="rd-nav-item"><p class="rd-nav-link sm"
                                                                       title="#contact">{{$text['title_'.LaravelLocalization::getCurrentLocale()]}}</p>
                                            </li>
                                        @endif
                                    @endforeach
                                    <li class="rd-nav-item">
                                        <a href="">
                                            @if(LaravelLocalization::getCurrentLocaleNative()=='Eng')
                                                <img src="{{asset('images/lang/1.png')}}" alt="en">
                                            @elseif(LaravelLocalization::getCurrentLocaleNative()=='Рус')
                                                <img src="{{asset('images/lang/2.png')}}" alt="ru">
                                            @elseif(LaravelLocalization::getCurrentLocaleNative()=='Հայ')
                                                <img src="{{asset('images/lang/3.png')}}" alt="am">
                                            @endif
                                            {{ LaravelLocalization::getCurrentLocaleNative()}}</a>
                                        <ul class="rd-menu rd-navbar-dropdown">
                                            @foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
                                                <li class="rd-dropdown-item">
                                                    @if($properties['native']=='English')
                                                        <img src="{{asset('images/lang/1.png')}}" alt="en"
                                                             style="display: inline-block">
                                                    @elseif($properties['native']=='Русский')
                                                        <img src="{{asset('images/lang/2.png')}}" alt="ru">
                                                    @elseif($properties['native']=='Հայերեն')
                                                        <img src="{{asset('images/lang/3.png')}}" alt="am">
                                                    @endif
                                                    <a rel="alternate" hreflang="{{ $localeCode }}"
                                                       class="rd-dropdown-link" style="display: inline-block"
                                                       href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}">
                                                        {{ $properties['native'] }}
                                                    </a>
                                                </li>
                                            @endforeach
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </nav>
        </div>
    </header>
    @yield('content')

    <footer class="section section-fluid footer-classic" id="contact">
        <div class="container-fluid bg-gray-15">
            <div class="row row-30 justify-content-between">
                <div class="col-md-10 col-lg-12 col-xl-4 wow fadeInRight">
                    <div class="box-footer box-footer-small">
                        <div class="footer-brand"><a href="{{route('main.index')}}"><img
                                        src="{{asset('images/logo.png')}}" alt="" width="191" height="52"/></a></div>

                        <p class="text-width-medium">
                            @foreach($texts as $key=>$text)
                                @if($key==13)
                                    {{$text['title_'.LaravelLocalization::getCurrentLocale()]}}
                                @endif
                            @endforeach
                        </p>

                        <div class="contact-classic">
                            <div class="contact-classic-item">
                                <div class="unit unit-spacing-md align-items-center">
                                    <div class="unit-left">

                                        <h6 class="contact-classic-title">
                                            @foreach($texts as $key=>$text)
                                                @if($key==14)
                                                    {{$text['title_'.LaravelLocalization::getCurrentLocale()]}}
                                                @endif
                                            @endforeach
                                        </h6>
                                    </div>

                                    <div class="unit-body contact-classic-link"><a href="#">
                                            @foreach($texts as $key=>$text)
                                                @if($key==15)
                                                    {{$text['title_'.LaravelLocalization::getCurrentLocale()]}}
                                                @endif
                                            @endforeach
                                        </a></div>
                                </div>
                            </div>
                            <div class="contact-classic-item">
                                <div class="unit unit-spacing-md align-items-center">
                                    <div class="unit-left">

                                        <h6 class="contact-classic-title">
                                            @foreach($texts as $key=>$text)
                                                @if($key==16)
                                                    {{$text['title_'.LaravelLocalization::getCurrentLocale()]}}
                                                @endif
                                            @endforeach
                                        </h6>
                                    </div>
                                    <div class="unit-body contact-classic-link"><a href="tel:#">+1 323-913-4688</a>, <a
                                                href="tel:#"> +1 323-888-4554</a>
                                    </div>
                                </div>
                            </div>
                            <div class="contact-classic-item">
                                <div class="unit unit-spacing-md align-items-center">
                                    <div class="unit-left">

                                        <h6 class="contact-classic-title">
                                            @foreach($texts as $key=>$text)
                                                @if($key==17)
                                                    {{$text['title_'.LaravelLocalization::getCurrentLocale()]}}
                                                @endif
                                            @endforeach
                                        </h6>
                                    </div>
                                    <div class="unit-body contact-classic-link"><a href="mailto:#">
                                            info@demolink.org</a>, <a href="mailto:#"> mail@demolink.org</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <ul class="list-inline list-inline-sm footer-social-list">
                            <li><a class="icon fa fa-facebook" href="#"></a></li>
                            <li><a class="icon fa fa-twitter" href="#"></a></li>
                            <li><a class="icon fa fa-google-plus" href="#"></a></li>
                            <li><a class="icon fa fa-instagram" href="#"></a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-10 col-lg-6 col-xl-4 wow fadeInRight" data-wow-delay=".2s">
                    <div class="box-footer">

                        <!-- Google Map-->
                        <section class="section" id="contacts" style="margin-top: 2%;">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m10!1m8!1m3!1d762.013651705631!2d44.52410641660233!3d40.18559817806327!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sru!2s!4v1523555988679"
                                    width="100%" height="508" frameborder="0" style="border:0" allowfullscreen="">
                            </iframe>
                        </section>
                    </div>
                </div>
                <div class="col-md-10 col-lg-6 col-xl-4 wow fadeInRight" data-wow-delay=".1s">
                    <div class="box-footer">

                        <h3 class="font-weight-normal">
                            @foreach($texts as $key=>$text)
                                @if($key==11)
                                    {{$text['title_'.LaravelLocalization::getCurrentLocale()]}}
                                @endif
                            @endforeach
                        </h3>

                        <p class="text-width-medium">
                            @foreach($texts as $key=>$text)
                                @if($key==18)
                                    {{$text['title_'.LaravelLocalization::getCurrentLocale()]}}
                                @endif
                            @endforeach
                        </p>
                        <form method="post" action="{{route('email')}}">
                            @csrf
                            <div class="form-wrap">

                                <input class="form-input" id="contact-name-6" type="text" name="name"
                                       data-constraints="@Required" @foreach($texts as $key=>$text) @if($key==19) placeholder="{{$text['title_'.LaravelLocalization::getCurrentLocale()]}}" @endif @endforeach/>
                            </div>
                            <div class="form-wrap">

                                    <input class="form-input" id="contact-email-6" type="email" name="email"
                                           data-constraints="@Email @Required"
                                           @foreach($texts as $key=>$text) @if($key==17) placeholder="{{$text['title_'.LaravelLocalization::getCurrentLocale()]}}" @endif @endforeach/>
                                                        </div>
                            <div class="form-wrap">

                                    <input class="form-input" id="contact-phone-6" type="text" name="phone"
                                           data-constraints="@Numeric" @foreach($texts as $key=>$text) @if($key==20) placeholder="{{$text['title_'.LaravelLocalization::getCurrentLocale()]}}" @endif @endforeach/>

                            </div>
                            <div class="form-wrap">

                                <textarea class="form-input" id="contact-message-6" name="text"
                                                 data-constraints="@Required"
                                          @foreach($texts as $key=>$text) @if($key==21) placeholder="{{$text['title_'.LaravelLocalization::getCurrentLocale()]}}" @endif @endforeach/></textarea>
                            </div>
                            <button class="button button-block button-primary"
                                    type="submit">
                                @foreach($texts as $key=>$text)
                                    @if($key==22)
                                        {{$text['title_'.LaravelLocalization::getCurrentLocale()]}}
                                    @endif
                                @endforeach
                            </button>
                        </form>
                    </div>
                </div>

            </div>
        </div>
        <div class="container footer-bottom-panel wow fadeInUp">
            <!-- Rights-->
            <p class="rights"><span>&copy;&nbsp;</span><span class="copyright-year"></span>
                <span>Alcyon</span>. @foreach($texts as $key=>$text)
                    @if($key==23)
                        {{$text['title_'.LaravelLocalization::getCurrentLocale()]}}
                    @endif
                @endforeach.
            </p>

        </div>
    </footer>
</div>
<!-- Global Mailform Output-->
<div class="snackbars" id="form-output-global"></div>
<!-- Javascript-->

<script src="{{asset('js/core.min.js')}}"></script>
<script src="{{asset('js/script.js')}}"></script>
<script>
    $(function () {
        $('span.stars').stars();
    });
</script>
</body>
</html>