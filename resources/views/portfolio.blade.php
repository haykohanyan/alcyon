@extends('layouts.header-footer')
@section('content')
    <!-- Breadcrumbs -->
    <section class="breadcrumbs-custom-inset">
        <div class="breadcrumbs-custom">
            <div class="container">
                <h1 class="breadcrumbs-custom-title">
                    @foreach($texts as $key=>$text)
                        @if($key==9)
                            {{$text['title_'.LaravelLocalization::getCurrentLocale()]}}
                        @endif
                    @endforeach
                </h1>
            </div>
            @foreach($pictures as $key=>$picture)
                @if($key==5)
            <div class="box-position" style="background-image: url({{asset('image/pictures/'.$picture->picture)}});"></div>
                @endif
            @endforeach
        </div>
    </section>

    <section class="section section-sm section-fluid bg-default text-center">
        <div class="container-fluid">
            <h2 class="wow fadeInLeft">{{__('translate.projects')}}</h2>
            <p class="quote-jean wow fadeInRight" data-wow-delay=".1s">
                {{__('translate.latest_projects_sub')}}            </p>
            <div class="isotope-filters isotope-filters-horizontal">
                <button class="isotope-filters-toggle button button-md button-icon button-icon-right button-default-outline button-wapasha" data-custom-toggle="#isotope-3" data-custom-toggle-hide-on-blur="true"><span class="icon fa fa-caret-down"></span>Filter</button>
                <ul class="isotope-filters-list" id="isotope-3">
                    <li><a class="active" href="#" data-isotope-filter="*" data-isotope-group="gallery">All</a></li>
                    @foreach($categories as $category)
                    <li><a href="#" data-isotope-filter="{{$category->id}}" data-isotope-group="gallery">{{$category['name_'.LaravelLocalization::getCurrentLocale()]}}</a></li>
                    @endforeach
                </ul>
            </div>
            <div class="row row-30 isotope" data-isotope-layout="fitRows" data-isotope-group="gallery" data-lightgallery="group">
               @foreach($works as $work)
                <div class="col-sm-6 col-lg-4 col-xxl-3 isotope-item wow fadeInLeft" data-filter=" @foreach($work->categories as $category) {{$category->id}} @endforeach">
                    <!-- Thumbnail Classic-->
                    <article class="thumbnail thumbnail-classic thumbnail-md">
                        <div class="thumbnail-classic-figure"><img src="{{asset('image/works/'.$work->image)}}" alt="" width="420" height="350" style="height: 358.75px!important;"/>
                        </div>
                        <div class="thumbnail-classic-caption">
                            <div class="thumbnail-classic-title-wrap">
                                <a class="icon fl-bigmug-line-zoom60" href="{{asset('image/works/'.$work->image)}}" data-lightgallery="item">
                                    <img src="{{asset('image/works/'.$work->image)}}" alt="" width="420" height="350"/></a>
                                <h5 class="thumbnail-classic-title"><a href="{{$work->link}}">{{$work['article1_'.LaravelLocalization::getCurrentLocale()]}}</a></h5>
                            </div>
                            <p class="thumbnail-classic-text">{{$work['article2_'.LaravelLocalization::getCurrentLocale()]}}</p>
                        </div>
                    </article>
                </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- Section Pricing-->
    {{--<section class="section section-sm section-first bg-default">--}}
        {{--<div class="container">--}}
            {{--<h3>White</h3>--}}
            {{--<div class="row row-30 justify-content-center">--}}
                {{--<div class="col-md-6 col-lg-5 col-xl-4">--}}
                    {{--<div class="box-pricing">--}}
                        {{--<div class="box-pricing-body">--}}
                            {{--<div class="box-pricing-caption">--}}
                                {{--<h5 class="box-pricing-title">Basic</h5>--}}
                                {{--<h3 class="box-pricing-price">$500.00</h3>--}}
                                {{--<div class="box-pricing-time">starting at</div>--}}
                            {{--</div>--}}
                            {{--<div class="divider divider-35"></div>--}}
                            {{--<ul class="box-pricing-list">--}}
                                {{--<li class="active">Concept development</li>--}}
                                {{--<li class="active">UI design</li>--}}
                                {{--<li>Configuration management</li>--}}
                                {{--<li>Software quality assurance</li>--}}
                                {{--<li>App integration</li>--}}
                            {{--</ul>--}}
                        {{--</div>--}}
                        {{--<div class="box-pricing-button"><a class="button button-lg button-block button-gray-4" href="#">Get started</a></div>--}}
                    {{--</div>--}}
                {{--</div>--}}
                {{--<div class="col-md-6 col-lg-5 col-xl-4">--}}
                    {{--<div class="box-pricing box-pricing-popular">--}}
                        {{--<div class="box-pricing-body">--}}
                            {{--<div class="box-pricing-caption">--}}
                                {{--<h5 class="box-pricing-title">Optimal</h5>--}}
                                {{--<h3 class="box-pricing-price">$800.00</h3>--}}
                                {{--<div class="box-pricing-time">starting at</div>--}}
                            {{--</div>--}}
                            {{--<div class="divider divider-35"></div>--}}
                            {{--<ul class="box-pricing-list">--}}
                                {{--<li class="active">Concept development</li>--}}
                                {{--<li class="active">UI design</li>--}}
                                {{--<li class="active"> Configuration management</li>--}}
                                {{--<li class="active"> Software quality assurance</li>--}}
                                {{--<li>App integration</li>--}}
                            {{--</ul>--}}
                        {{--</div>--}}
                        {{--<div class="box-pricing-button"><a class="button button-lg button-block button-primary" href="#">Get started</a></div>--}}
                        {{--<div class="box-pricing-badge">popular</div>--}}
                    {{--</div>--}}
                {{--</div>--}}
                {{--<div class="col-md-6 col-lg-5 col-xl-4">--}}
                    {{--<div class="box-pricing">--}}
                        {{--<div class="box-pricing-body">--}}
                            {{--<div class="box-pricing-caption">--}}
                                {{--<h5 class="box-pricing-title">Ultimate</h5>--}}
                                {{--<h3 class="box-pricing-price">$1200.00</h3>--}}
                                {{--<div class="box-pricing-time">starting at</div>--}}
                            {{--</div>--}}
                            {{--<div class="divider divider-35"></div>--}}
                            {{--<ul class="box-pricing-list">--}}
                                {{--<li class="active">Concept development</li>--}}
                                {{--<li class="active">UI design</li>--}}
                                {{--<li class="active"> Configuration management</li>--}}
                                {{--<li class="active"> Software quality assurance</li>--}}
                                {{--<li class="active">  App integration</li>--}}
                            {{--</ul>--}}
                        {{--</div>--}}
                        {{--<div class="box-pricing-button"><a class="button button-lg button-block button-gray-4" href="#">Get started</a></div>--}}
                    {{--</div>--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--</div>--}}
    {{--</section>--}}

    <!-- Section Pricing-->
    {{--<section class="section section-sm section-last bg-default">--}}
        {{--<div class="container">--}}
            {{--<h3>Black</h3>--}}
            {{--<div class="row row-30 justify-content-center">--}}
                {{--<div class="col-md-6 col-lg-5 col-xl-4">--}}
                    {{--<div class="box-pricing box-pricing-black">--}}
                        {{--<div class="box-pricing-body">--}}
                            {{--<h5 class="box-pricing-title">basic</h5>--}}
                            {{--<h3 class="box-pricing-price">$500.00</h3>--}}
                            {{--<div class="box-pricing-time">starting at</div>--}}
                            {{--<div class="box-pricing-divider">--}}
                                {{--<div class="divider"></div><span>Basic</span>--}}
                            {{--</div>--}}
                            {{--<ul class="box-pricing-list">--}}
                                {{--<li class="active">Concept development</li>--}}
                                {{--<li class="active">UI design</li>--}}
                                {{--<li>Configuration management</li>--}}
                                {{--<li>Software quality assurance</li>--}}
                                {{--<li>App integration</li>--}}
                            {{--</ul>--}}
                        {{--</div>--}}
                        {{--<div class="box-pricing-button"><a class="button button-lg button-block button-gray-4" href="#">Get started</a></div>--}}
                    {{--</div>--}}
                {{--</div>--}}
                {{--<div class="col-md-6 col-lg-5 col-xl-4">--}}
                    {{--<div class="box-pricing box-pricing-black box-pricing-popular">--}}
                        {{--<div class="box-pricing-body">--}}
                            {{--<h5 class="box-pricing-title">Optimal</h5>--}}
                            {{--<h3 class="box-pricing-price">$800.00</h3>--}}
                            {{--<div class="box-pricing-time">starting at</div>--}}
                            {{--<div class="box-pricing-divider">--}}
                                {{--<div class="divider"></div><span>Optimal</span>--}}
                            {{--</div>--}}
                            {{--<ul class="box-pricing-list">--}}
                                {{--<li class="active">Concept development</li>--}}
                                {{--<li class="active">UI design</li>--}}
                                {{--<li class="active">Configuration management</li>--}}
                                {{--<li class="active">Software quality assurance</li>--}}
                                {{--<li>App integration</li>--}}
                            {{--</ul>--}}
                        {{--</div>--}}
                        {{--<div class="box-pricing-button"><a class="button button-lg button-block button-primary" href="#">Get started</a></div>--}}
                        {{--<div class="box-pricing-badge">popular</div>--}}
                    {{--</div>--}}
                {{--</div>--}}
                {{--<div class="col-md-6 col-lg-5 col-xl-4">--}}
                    {{--<div class="box-pricing box-pricing-black">--}}
                        {{--<div class="box-pricing-body">--}}
                            {{--<h5 class="box-pricing-title">Ultimate</h5>--}}
                            {{--<h3 class="box-pricing-price">$1200.00</h3>--}}
                            {{--<div class="box-pricing-time">starting at</div>--}}
                            {{--<div class="box-pricing-divider">--}}
                                {{--<div class="divider"></div><span>Ultimate</span>--}}
                            {{--</div>--}}
                            {{--<ul class="box-pricing-list">--}}
                                {{--<li class="active">Concept development</li>--}}
                                {{--<li class="active">UI design</li>--}}
                                {{--<li class="active">Configuration management</li>--}}
                                {{--<li class="active">Software quality assurance</li>--}}
                                {{--<li class="active">App integration</li>--}}
                            {{--</ul>--}}
                        {{--</div>--}}
                        {{--<div class="box-pricing-button"><a class="button button-lg button-block button-gray-4" href="#">Get started</a></div>--}}
                    {{--</div>--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--</div>--}}
    {{--</section>--}}

@endsection