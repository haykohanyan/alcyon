@extends('layouts.header-footer')
@section('content')
    <!-- Swiper-->
    <section class="section swiper-container swiper-slider swiper-slider-classic" data-loop="true" data-autoplay="false"
             data-simulate-touch="true" data-direction="vertical" data-nav="false">
        <div class="swiper-wrapper text-center">

            @foreach($main_slides as $main_slide)
                <div class="swiper-slide" data-slide-bg="{{asset('image/slide/'.$main_slide->image)}}">
                    <div class="swiper-slide-caption section-md">
                        <div class="container">
                            <h1 data-caption-animate="fadeInLeft"
                                data-caption-delay="0">{{$main_slide['title_'.LaravelLocalization::getCurrentLocale()]}}</h1>
                            <p class="text-width-large" data-caption-animate="fadeInRight" data-caption-delay="100">
                                {{$main_slide['article_'.LaravelLocalization::getCurrentLocale()]}}</p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        <!-- Swiper Pagination-->
        <div class="swiper-pagination__module">
            <div class="swiper-pagination__fraction"><span class="swiper-pagination__fraction-index">00</span><span
                        class="swiper-pagination__fraction-divider">/</span><span
                        class="swiper-pagination__fraction-count">00</span></div>
            <div class="swiper-pagination__divider"></div>
            <div class="swiper-pagination"></div>
        </div>
    </section>

    <!-- See all services-->
    <section class="section section-sm section-first bg-default text-center">
        <div class="container">
            <div class="row row-30 justify-content-center">
                <div class="col-md-7 col-lg-5 col-xl-6 text-lg-left wow fadeInUp">
                    @foreach($pictures as $key=>$picture)
                        @if($key==0)
                    <img src="{{asset('image/pictures/'.$picture->picture)}}" alt="" width="1800" height="1500"/>
                        @endif
                        @endforeach

                </div>
                <div class="col-lg-7 col-xl-6">
                    <div class="row row-30 justify-content-center">
                        <div class="col-sm-6 wow fadeInRight">
                            <article class="box-icon-modern box-icon-modern-custom">
                                <div>
                                    <h3 class="box-icon-modern-big-title">
                                        <a href="{{route('main.services')}}">
                                            @foreach($texts as $key=>$text)
                                                @if($key==0)
                                                    {{$text['title_'.LaravelLocalization::getCurrentLocale()]}}
                                                @endif
                                            @endforeach
                                        </a>
                                    </h3>
                                    <div class="box-icon-modern-decor"></div>
                                    <p class="box-icon-modern-text">
                                        @foreach($texts as $key=>$text)
                                            @if($key==1)
                                                {{$text['title_'.LaravelLocalization::getCurrentLocale()]}}
                                            @endif
                                        @endforeach
                                    </p>
                                    <a class="button button-primary button-ujarak" href="{{route('main.services')}}">
                                        @foreach($texts as $key=>$text)
                                            @if($key==2)
                                                {{$text['title_'.LaravelLocalization::getCurrentLocale()]}}
                                            @endif
                                        @endforeach
                                    </a>
                                </div>
                            </article>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>



    <section class="section section-sm section-fluid bg-default">
        <div class="container">
            <h2 class="wow fadeInLeft">
                @foreach($texts as $key=>$text)
                    @if($key==3)
                        {{$text['title_'.LaravelLocalization::getCurrentLocale()]}}
                    @endif
                @endforeach
            </h2>
        </div>
        <!-- Owl Carousel-->
        <div class="owl-carousel owl-classic owl-timeline" data-items="1" data-md-items="2" data-lg-items="3"
             data-xl-items="4" data-margin="30" data-autoplay="false" data-nav="true" data-dots="true">
            @foreach($recents as $recent)
                <div class="owl-item">
                    <!-- Thumbnail Classic-->
                    <article class="thumbnail thumbnail-mary thumbnail-md"  style="min-height: 265px!important;max-height: 265px!important;">
                        <div class="thumbnail-mary-figure">
                            <img src="{{asset('image/works/'.$recent->image)}}" alt="" width="420" height="308" style="height: 265px!important;"/>
                        </div>
                        <div class="thumbnail-mary-caption">
                            <a class="icon fl-bigmug-line-zoom60" href="{{asset('image/works/'.$recent->image)}}" data-lightgallery="item">
                                <img src="{{asset('image/works/'.$recent->image)}}" alt=""  />
                            </a>
                        </div>
                    </article>
                    <div class="thumbnail-mary-description">
                        <h4 class="thumbnail-mary-project"><p>{{$recent['article1_'.LaravelLocalization::getCurrentLocale()]}}</p></h4><span
                                class="thumbnail-mary-decor"></span>

                    </div>
                </div>
            @endforeach
        </div>
    </section>
    <!-- Years of experience-->
    <section class="section section-sm bg-default">
        <div class="container">
            <div class="row row-30 row-xl-24 justify-content-center align-items-center align-items-lg-start text-left">
                @foreach($years as $key=>$year)
                    @if($key==0)
                        <div class="col-md-6 col-lg-5 col-xl-4 text-center">
                            <a class="text-img" href="{{route('main.about')}}">
                                <div id="particles-js"></div>
                                <span class="counter">{{$year->count}}</span>+</a>
                        </div>
                    @endif
                @endforeach
                <div class="col-sm-8 col-md-6 col-lg-5 col-xl-4 text-center">
                    <div class="text-width-extra-small offset-top-lg-24 wow fadeInUp">
                        @foreach($years as $key=>$year)
                            @if($key==0)
                                <h3 class="title-decoration-lines-left"> {{$year['title_'.LaravelLocalization::getCurrentLocale()]}}</h3>
                            @endif
                        @endforeach
                        <p class="text-gray-500">
                            @foreach($texts as $key=>$text)
                                @if($key==12)
                                    {{$text['title_'.LaravelLocalization::getCurrentLocale()]}}
                                @endif
                            @endforeach
                        </p><a class="button button-secondary button-pipaluk"
                                                                    href="{{route('main.about')}}">

                                @foreach($texts as $key=>$text)
                                    @if($key==24)
                                        {{$text['title_'.LaravelLocalization::getCurrentLocale()]}}
                                    @endif
                                @endforeach
                            </a>
                    </div>
                </div>
                <div class="col-sm-10 col-md-8 col-lg-6 col-xl-4 wow fadeInRight" data-wow-delay=".1s">
                    <div class="row justify-content-center  offset-top-xl-26">
                        <div class="col-9 col-sm-6">
                            <div class="counter-amy">
                                @foreach($years as $key=>$year)
                                    @if($key==1)
                                        <div class="counter-amy-number"><span class="counter">{{$year->count}}</span>
                                        </div>
                                        <h6 class="counter-amy-title"> {{nl2br($year['title_'.LaravelLocalization::getCurrentLocale()],false)}}</h6>
                                    @endif
                                @endforeach
                            </div>
                        </div>
                        <div class="col-9"></div>
                        <div class="col-9 col-sm-6">
                            <div class="counter-amy">
                                @foreach($years as $key=>$year)
                                    @if($key==2)
                                        <div class="counter-amy-number"><span class="counter">{{$year->count}}</span>
                                        </div>
                                        <h6 class="counter-amy-title"> {{$year['title_'.LaravelLocalization::getCurrentLocale()]}}</h6>
                                    @endif
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-xl-12 align-self-center">
                    <h2 class="wow fadeInLeft text-center">
                        @foreach($texts as $key=>$text)
                            @if($key==25)
                                {{$text['title_'.LaravelLocalization::getCurrentLocale()]}}
                            @endif
                        @endforeach
                    </h2>

                    <div class="row row-30 justify-content-center">
                    <!-- Owl Carousel-->
                    <div class="owl-carousel owl-classic" data-items="1" data-md-items="2" data-lg-items="3"
                         data-xl-items="4" data-margin="30" data-autoplay="false" data-nav="true" data-dots="true">
                        @foreach($our_partners as $our_partner)
                            <div class=" owl-item mb-3"  style="min-height: 117px!important;max-height: 117px!important;">
                                <a class="clients-classic" href="{{$our_partner->link}}">
                                    <img src="{{asset('image/our_partners/'.$our_partner->image)}}" alt="" style=" height: 117px!important;"/>
                                </a>
                            </div>
                        @endforeach
                    </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Years of experience-->
    <section class="section section-sm section-fluid bg-default">
        <div class="container-fluid">
            <h2>
                @foreach($texts as $key=>$text)
                    @if($key==26)
                        {{$text['title_'.LaravelLocalization::getCurrentLocale()]}}
                    @endif
                @endforeach
            </h2>
            <div class="row row-30 justify-content-center">
                <!-- Owl Carousel-->
                <div class="owl-carousel owl-classic" data-items="1" data-md-items="2" data-lg-items="3"
                     data-xl-items="4" data-margin="30" data-autoplay="false" data-nav="true" data-dots="true">
                    @foreach($teams as $team)
                        <div class="owl-item">
                            <!-- Team Classic-->
                            <article class="team-classic team-classic-lg">
                                <span class="team-classic-figure">
                                    <img
                                            src="{{asset('image/team/'.$team->image)}}" alt="" width="420" height="424" style="height: 265px!important;"/>
                                </span>
                                <div class="team-classic-caption">
                                    <h4 class="team-classic-name"><span >{{$team['name_'.LaravelLocalization::getCurrentLocale()]}}</span></h4>
                                    <p class="team-classic-status">{{$team['position_'.LaravelLocalization::getCurrentLocale()]}}</p>
                                </div>
                            </article>
                        </div>
                    @endforeach
                </div>
            </div>

        </div>
    </section>
@endsection