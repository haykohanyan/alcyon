@extends('layouts.header-footer')
@section('content')
    <!-- Breadcrumbs -->
    <section class="breadcrumbs-custom-inset">
        <div class="breadcrumbs-custom">
            <div class="container">
                <h1 class="breadcrumbs-custom-title">
                    @foreach($texts as $key=>$text)
                        @if($key==10)
                            {{$text['title_'.LaravelLocalization::getCurrentLocale()]}}
                        @endif
                    @endforeach
                </h1>
            </div>
            @foreach($pictures as $key=>$picture)
                @if($key==6)
            <div class="box-position" style="background-image: url({{asset('image/pictures/'.$picture->picture)}});"></div>
                @endif
            @endforeach
        </div>
    </section>
    <!-- Grid Gallery-->
    <section class="section section-xl bg-default text-center isotope-wrap">
        <div class="container">
            <div class="isotope-filters isotope-filters-horizontal">
                <button class="isotope-filters-toggle button button-md button-icon button-icon-right button-default-outline button-wapasha" data-custom-toggle="#isotope-1" data-custom-toggle-hide-on-blur="true"><span class="icon fa fa-caret-down"></span>Filter</button>
                <ul class="isotope-filters-list" id="isotope-1">
                    <li><a class="active" href="#" data-isotope-filter="*" data-isotope-group="gallery">All</a></li>
                    @foreach($cats as $cat)
                        <li><a href="#" data-isotope-filter="{{$cat->id}}" data-isotope-group="gallery">{{$cat['name_'.LaravelLocalization::getCurrentLocale()]}}</a></li>
                    @endforeach
                </ul>
            </div>
            <div class="row row-50 isotope" data-isotope-layout="fitRows" data-isotope-group="gallery" data-lightgallery="group">
                @foreach($images as $image)

                <div class="col-md-6 col-lg-4 isotope-item" data-filter="@foreach($image->cats as $cat) {{$cat->id}} @endforeach">

                    <article class="thumbnail thumbnail-modern thumbnail-sm">
                        <a class="thumbnail-modern-figure" href="{{asset('image/gallery/'.$image->image)}}" data-lightgallery="item">
                            <img src="{{asset('image/gallery/'.$image->image)}}" alt="" width="370" height="303" style="height: 310.56px!important;"/>
                        </a>
                        <div class="thumbnail-modern-caption">
                            <h5 class="thumbnail-modern-title"><a href="#">{{$image['article1_'.LaravelLocalization::getCurrentLocale()]}}</a></h5>
                            <p class="thumbnail-modern-subtitle">{{$image['article2_'.LaravelLocalization::getCurrentLocale()]}}</p>
                        </div>
                    </article>
                </div>
               @endforeach
            </div>

            <!-- <div class="button-wrap">
              <button class="button button-md button-default-outline button-wapasha">Load More</button>
            </div> -->
        </div>

    </section>


@endsection