@extends('admin/layouts/header-footer')
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">


                <form action="{{route('main_slide_update')}}" method="post" enctype="multipart/form-data" class=" text-center">
                    <h3 class="mt-3 mb-3">Փոփոխել</h3>
                    @csrf
                    <div class="row">
                        <div class="col-md-4">
                            <label for="slide_title_en">Անգլերեն վերնագիր</label>
                            <textarea name="slide_title_en" id="slide_title_en" cols="20" rows="3"
                                      class="form-control">{{$main_slide->title_en}}</textarea>
                        </div>
                        <div class="col-md-4"><label for="slide_title_ru">Ռուսերեն վերնագիր</label>
                            <textarea name="slide_title_ru" id="slide_title_ru" cols="20" rows="3"
                                      class="form-control">{{$main_slide->title_ru}}</textarea></div>
                        <div class="col-md-4"><label for="slide_title_am">Հայերեն վերնագիր</label>
                            <textarea name="slide_title_am" id="slide_title_am" cols="20" rows="3"
                                      class="form-control">{{$main_slide->title_am}}</textarea></div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <label for="slide_article_en">Անգլերեն տեքստ</label>
                            <textarea name="slide_article_en" id="slide_article_en" cols="20" rows="3"
                                      class="form-control">{{$main_slide->article_en}}</textarea>
                        </div>
                        <div class="col-md-4">
                            <label for="slide_article_ru">Ռուսերեն տեքստ</label>
                            <textarea name="slide_article_ru" id="slide_article_ru" cols="20" rows="3"
                                      class="form-control">{{$main_slide->article_ru}}</textarea></div>
                        <div class="col-md-4">
                            <label for="slide_article_am">Հայերեն տեքստ</label>
                            <textarea name="slide_article_am" id="slide_article_am" cols="20" rows="3"
                                      class="form-control">{{$main_slide->article_am}}</textarea>
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-md-6">
                            <label for="img2">Նկար</label>
                            <div class="input-group">
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input"
                                           name="slide_image"  id="img2" >
                                    <label class="custom-file-label" for="img2">Ընտրել Նկար</label>

                                </div>
                            </div>
                        </div>
                        <div class="col-2"></div>
                        <div class="col-2">
                            <img id="view2" src="{{asset('image/slide/'.$main_slide->image)}}"  alt="your image" style=" max-width:180px;"/>
                        </div>
                        <div class="col-2"></div>
                    </div>

                    <input type="hidden" value="{{$main_slide->id}}" name="id">
                    <button class="btn btn-danger mt-1" type="submit" >Փոփոխել
                    </button>
                </form>
                <form action="{{route('main_slide_destroy')}}"  method="post" class="text-center" style="padding: 5px 0">
                    @csrf
                    <button class=" btn btn-primary" type="submit">Ջնջել</button>
                    <input type="hidden" value="{{$main_slide->id}}" name="id">
                </form>
            </div>
        </div>
    </div>
@endsection