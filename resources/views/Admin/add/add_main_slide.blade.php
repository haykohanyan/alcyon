@extends('admin/layouts/header-footer')
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">

                <h4 class="mt-3">Ավելացնել Սլայդ</h4>
                <form action="{{route('main_slide_store')}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-md-4">
                            <label for="slide_title_en">Անգլերեն վերնագիր</label>
                            <textarea name="slide_title_en" id="slide_title_en" cols="20" rows="3"
                                      class="form-control"></textarea>
                        </div>
                        <div class="col-md-4"><label for="slide_title_ru">Ռուսերեն վերնագիր</label>
                            <textarea name="slide_title_ru" id="slide_title_ru" cols="20" rows="3"
                                      class="form-control"></textarea></div>
                        <div class="col-md-4"><label for="slide_title_am">Հայերեն վերնագիր</label>
                            <textarea name="slide_title_am" id="slide_title_am" cols="20" rows="3"
                                      class="form-control"></textarea></div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <label for="slide_article_en">Անգլերեն բնութագիր</label>
                            <textarea name="slide_article_en" id="slide_article_en" cols="20" rows="3"
                                      class="form-control"></textarea>
                        </div>
                        <div class="col-md-4">
                            <label for="slide_article_ru">Ռուսերեն բնութագիր</label>
                            <textarea name="slide_article_ru" id="slide_article_ru" cols="20" rows="3"
                                      class="form-control"></textarea></div>
                        <div class="col-md-4">
                            <label for="slide_article_am">Հայերեն բնութագիր</label>
                            <textarea name="slide_article_am" id="slide_article_am" cols="20" rows="3"
                                      class="form-control"></textarea>
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-md-6">
                            <label for="img1">Նկար</label>
                            <div class="input-group">
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input"
                                           name="slide_image"  id="img1" >
                                    <label class="custom-file-label" for="img1">Ընտրել նկար</label>

                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <img id="view1" src=""  alt="your image" class="hide"  style=" max-width:180px;"/>
                        </div>
                    </div>


                    <button class="btn btn-danger mt-1" type="submit" style="margin-left: 40%">Ավելացնել
                    </button>
                </form>

            </div>
        </div>
    </div>
@endsection