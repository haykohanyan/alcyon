@extends('admin/layouts/header-footer')
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">


                <form action="{{route('services_store')}}" method="post" enctype="multipart/form-data" class="text-center">
                    @csrf
                    <h4 class="mt-3">Ավելացնել ծառայություն</h4>
                    <div class="row">
                        <div class="col-md-4">
                            <label for="title_en">Անգլերեն վերնագիր</label>
                            <textarea name="title_en" id="title_en" cols="20" rows="3" class="form-control"></textarea></div>
                        <div class="col-md-4"><label for="title_ru">Ռուսերեն վերնագիր</label>
                            <textarea name="title_ru" id="title_ru" cols="20" rows="3" class="form-control"></textarea></div>
                        <div class="col-md-4"><label for="title_am">Հայերեն վերնագիր</label>
                            <textarea name="title_am" id="title_am" cols="20" rows="3"
                                      class="form-control"></textarea></div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <label for="article_en">Անգլերեն տեքստ</label>
                            <textarea name="article_en" id="article_en" cols="20" rows="3"
                                      class="form-control"></textarea>
                        </div>
                        <div class="col-md-4">
                            <label for="article_ru">Ռուսերեն տեքստ</label>
                            <textarea name="article_ru" id="article_ru" cols="20" rows="3"
                                      class="form-control"></textarea></div>
                        <div class="col-md-4">
                            <label for="article_am">Հայերեն տեքստ</label>
                            <textarea name="article_am" id="article_am" cols="20" rows="3"
                                      class="form-control"></textarea>
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-md-6">
                            <label for="img12">Նկար</label>
                            <div class="input-group">
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input"
                                           name="image"  id="img12" >
                                    <label class="custom-file-label" for="img12">Ընտրել նկար</label>

                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <img id="view12" src=""  alt="your image" class="hide"  style=" max-width:180px;"/>
                        </div>
                    </div>
                    <button class="btn btn-danger mt-3" type="submit" >Ավելացնել
                    </button>
                </form>

            </div>
        </div>
    </div>
@endsection