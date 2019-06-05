@extends('layouts.header-footer')
@section('content')
    <!-- Breadcrumbs -->
    <section class="breadcrumbs-custom-inset">
        <div class="breadcrumbs-custom">
            <div class="container">
                <h1 class="breadcrumbs-custom-title">
                    @foreach($texts as $key=>$text)
                        @if($key==8)
                            {{$text['title_'.LaravelLocalization::getCurrentLocale()]}}
                        @endif
                    @endforeach
                </h1>
            </div>
            @foreach($pictures as $key=>$picture)
                @if($key==4)
            <div class="box-position" style="background-image: url({{asset('image/pictures/'.$picture->picture)}});"></div>
                @endif
            @endforeach
        </div>
    </section>
    <!-- Section-services-->
    <section class="section section-xl bg-default">
        <div class="container">
            <div class="row row-40 justify-content-center">
@foreach($services as $service)
                <div class="col-md-6 col-lg-4">
                    <article class="box-icon-modern">
                        <div class="box-icon-modern-icon">
                            <img src="{{asset('image/services/'.$service->image)}}"  style="width: 48px; ">
                        </div>
                        <h5 class="box-icon-modern-title"><a href="#">{{$service['title_'.LaravelLocalization::getCurrentLocale()]}}</a></h5>
                        <div class="box-icon-modern-decor"></div>
                        <p class="box-icon-modern-text">
                            {{$service['article_'.LaravelLocalization::getCurrentLocale()]}}
                        </p>
                    </article>
                </div>
    @endforeach
            </div>
        </div>
    </section>

@endsection