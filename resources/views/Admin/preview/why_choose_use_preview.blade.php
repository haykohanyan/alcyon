@extends('admin/layouts/header-footer')
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">


                <form action="{{route('why_choose_use_update')}}" method="post" enctype="multipart/form-data" class="text-center">
                    @csrf
                    <h4 class="my-3">Փոփոխել</h4>
                    <div class="row">
                        <div class="col-md-4">
                            <label for="title_en">Անգլերեն վերնագիր</label>
                            <textarea name="title_en" id="title_en" cols="20" rows="3"
                                      class="form-control">{{$why_choose_use->title_en}}</textarea>
                        </div>
                        <div class="col-md-4"><label for="title_ru">Ռուսերեն վերնագիր</label>
                            <textarea name="title_ru" id="title_ru" cols="20" rows="3"
                                      class="form-control">{{$why_choose_use->title_ru}}</textarea></div>
                        <div class="col-md-4"><label for="title_am">Հայերեն վերնագիր</label>
                            <textarea name="title_am" id="title_am" cols="20" rows="3"
                                      class="form-control">{{$why_choose_use->title_am}}</textarea></div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <label for="article_en">Անգլերեն տեքստ</label>
                            <textarea name="article_en" id="article_en" cols="20" rows="3"
                                      class="form-control">{{$why_choose_use->article_en}}</textarea>
                        </div>
                        <div class="col-md-4">
                            <label for="article_ru">Ռուսերեն տեքստ</label>
                            <textarea name="article_ru" id="article_ru" cols="20" rows="3"
                                      class="form-control">{{$why_choose_use->article_ru}}</textarea></div>
                        <div class="col-md-4">
                            <label for="article_am">Հայերեն տեքստ</label>
                            <textarea name="article_am" id="article_am" cols="20" rows="3"
                                      class="form-control">{{$why_choose_use->article_am}}</textarea>
                        </div>
                    </div>
                    <input type="hidden" value="{{$why_choose_use->id}}" name="id">
                    <button class="btn btn-danger mt-3" type="submit" >Փոփոխել</button>
                </form>
            </div>
        </div>
    </div>
@endsection