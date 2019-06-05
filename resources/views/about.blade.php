@extends('layouts.header-footer')
@section('content')
    <!-- Breadcrumbs -->
    <section class="breadcrumbs-custom-inset">
        <div class="breadcrumbs-custom">
            <div class="container">
                <h1 class="breadcrumbs-custom-title">
                    @foreach($texts as $key=>$text)
                        @if($key==7)
                            {{$text['title_'.LaravelLocalization::getCurrentLocale()]}}
                        @endif
                    @endforeach
                </h1>
            </div>
            @foreach($pictures as $key=>$picture)
                @if($key==1)
            <div class="box-position" style="background-image: url({{asset('image/pictures/'.$picture->picture)}});"></div>
                @endif
            @endforeach
        </div>
    </section>
    <!-- Why choose us-->
    <section class="section section-sm section-first bg-default text-md-left">
        <div class="container">
            <div class="row row-50 justify-content-center align-items-xl-center">
                <div class="col-md-10 col-lg-5 col-xl-6">
                    @foreach($pictures as $key=>$picture)
                        @if($key==2)
                    <img src="{{asset('image/pictures/'.$picture->picture)}}" alt="" width="519" height="564"/>
                        @endif
                    @endforeach
                </div>
                <div class="col-md-10 col-lg-7 col-xl-6">
                    <h2 class="text-spacing-25 font-weight-normal title-opacity-9">
                        @foreach($texts as $key=>$text)
                            @if($key==27)
                                {{$text['title_'.LaravelLocalization::getCurrentLocale()]}}
                            @endif
                        @endforeach
                    </h2>
                    <!-- Bootstrap tabs-->
                    <div class="tabs-custom tabs-horizontal tabs-line" id="tabs-4">
                        <!-- Nav tabs-->
                        <ul class="nav nav-tabs">
                            @foreach($why_choose_uses as $key=>$why_choose_use)
                                @if($key==0)
                                    <li class="nav-item" role="presentation"><a class="nav-link active" href="#tabs-4-1"
                                                                                data-toggle="tab">{{$why_choose_use['title_'.LaravelLocalization::getCurrentLocale()]}}</a></li>
                                @elseif($key==1)
                                    <li class="nav-item" role="presentation"><a class="nav-link" href="#tabs-4-2"
                                                                                data-toggle="tab" style="margin-left: 2em;">{{$why_choose_use['title_'.LaravelLocalization::getCurrentLocale()]}}</a>  </li>

                                        @endif

                        @endforeach
                        </ul>
                        <div class="tab-content">
                            <div class="tab-pane fade show active" id="tabs-4-1">
                                @foreach($why_choose_uses as $key=>$why_choose_use)
                                <p>{{$why_choose_use['article_'.LaravelLocalization::getCurrentLocale()]}}</p>
                            @endforeach
                            </div>
                            <div class="tab-pane fade" id="tabs-4-2">
                                <div class="row row-40 justify-content-center text-center inset-top-10">
                                    @foreach($wcus as $wcu)
                                    <div class="col-sm-4">
                                        <!-- Circle Progress Bar-->
                                        <div class="progress-bar-circle" data-value="0.{{$wcu->count}}" data-gradient="#756aee"
                                             data-empty-fill="transparent" data-size="150" data-thickness="12"
                                             data-reverse="true"><span></span></div>
                                        <p class="progress-bar-circle-title">{{$wcu['title_'.LaravelLocalization::getCurrentLocale()]}}</p>
                                    </div>
                                  @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Latest Projects-->
    <section class="section section-sm section-fluid bg-default">
        <div class="container">
            <h2>
                @foreach($texts as $key=>$text)
                    @if($key==30)
                        {{$text['title_'.LaravelLocalization::getCurrentLocale()]}}
                    @endif
                @endforeach
            </h2>
        </div>
        <!-- Owl Carousel-->
        <div class="owl-carousel owl-classic owl-timeline" data-items="1" data-md-items="2" data-lg-items="3"
             data-xl-items="4" data-margin="30" data-autoplay="true" data-nav="true" data-dots="true">
            @foreach($timelines as $timeline)
            <div class="owl-item">
                <!-- Thumbnail Classic-->
                <article class="thumbnail thumbnail-mary thumbnail-md">
                    <div class="thumbnail-mary-figure">
                        <img src="{{asset('image/timeline/'.$timeline->image)}}" alt="" width="420" height="308"  style="height: 237.51px!important;"/>
                    </div>
                    <div class="thumbnail-mary-caption">
                        <a class="icon fl-bigmug-line-zoom60" href="{{asset('image/timeline/'.$timeline->image)}}" data-lightgallery="item">
                            <img src="{{asset('image/timeline/'.$timeline->image)}}" alt="" width="420" height="308"/>
                        </a>
                    </div>
                </article>
                <div class="thumbnail-mary-description">
                    <h4 class="thumbnail-mary-project"><p>{{$timeline['title_'.LaravelLocalization::getCurrentLocale()]}}</p></h4><span
                            class="thumbnail-mary-decor"></span>
                    <h5 class="thumbnail-mary-time">
                        <time datetime="{{$timeline->year}}">{{$timeline->year}}</time>
                    </h5>
                </div>
            </div>
          @endforeach
        </div>
    </section>

    <!-- What people Say-->
    <section class="section section-sm section-last bg-default">
        <div class="container">
            <h2>
                @foreach($texts as $key=>$text)
                    @if($key==29)
                        {{$text['title_'.LaravelLocalization::getCurrentLocale()]}}
                    @endif
                @endforeach
            </h2>
            <!-- Owl Carousel-->
            <div class="owl-carousel owl-modern" data-items="1" data-stage-padding="15" data-margin="30"
                 data-dots="true" data-animation-in="fadeIn" data-animation-out="fadeOut" data-autoplay="true">
                <!-- Quote Lisa-->
                @foreach($wpses as $wps)
                <article class="quote-lisa">
                    <div class="quote-lisa-body"><span class="quote-lisa-figure" href="#">
                            <img class="img-circles" src="{{asset('image/wps/'.$wps->image)}}" alt="" width="100" height="100"/>
                        </span>
                        <div class="quote-lisa-text">
                            <p class="q">{{$wps['article_'.LaravelLocalization::getCurrentLocale()]}}</p>
                        </div>
                        <h5 class="quote-lisa-cite">
                            <a href="#">{{$wps['title_'.LaravelLocalization::getCurrentLocale()]}}</a>

                        </h5>
                        <span class="stars" style="margin-left: auto;margin-right: auto;">{{$wps->from}}</span>
                    </div>
                </article>
@endforeach
            </div>
        </div>
    </section>

    <!-- Counter Classic-->
    <section class="section section-fluid bg-default">
        <div class="container-fluid">
            @foreach($pictures as $key=>$picture)
                @if($key==3)
            <div class="parallax-container" data-parallax-img="{{asset('image/pictures/'.$picture->picture)}}">
                @endif
                @endforeach
                <div class="parallax-content section-xl">
                    <div class="container">
                        <div class="row row-50 justify-content-center border-classic">
                            @foreach($results as $result)
                            <div class="col-sm-6 col-md-5 col-lg-3">
                                <div class="counter-classic">
                                    <div class="counter-classic-number"><span class="counter">{{$result->count}}</span>
                                    </div>
                                    <h4 class="counter-classic-title">{{$result['title_'.LaravelLocalization::getCurrentLocale()]}}</h4>
                                </div>
                            </div>
                                @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Our clients-->
    <section class="section section-xl bg-default">
        <div class="container">
            <h2>
                @foreach($texts as $key=>$text)
                    @if($key==28)
                        {{$text['title_'.LaravelLocalization::getCurrentLocale()]}}
                    @endif
                @endforeach
            </h2>
            <div class="row row-30 row-sm">
                @foreach($our_clients as $our_client)
                <div class="col-sm-6 col-md-4 col-xl-3 wow fadeInDown" data-wow-delay=".3s">
                    <a class="clients-classic border_radius" href="{{$our_client->link}}">
                        <img src="{{asset('image/our_clients/'.$our_client->image)}}" alt="" width="270" height="145" style="height: 143.92px!important;"/>
                    </a>
                </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>


@endsection