@extends('admin/layouts/header-footer')
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">

                <form action="{{route('services_update')}}" method="post" enctype="multipart/form-data" class="text-center">
                    @csrf
                    <h4 class="mt-3">Փոփոխել</h4>
                    <div class="row">
                        <div class="col-md-4">
                            <label for="title_en">Անգլերեն վերնագիր</label>
                            <textarea name="title_en" id="title_en" cols="20" rows="3" class="form-control">{{$service->title_en}}</textarea></div>
                        <div class="col-md-4"><label for="title_ru">Ռուսերեն վերնագիր</label>
                            <textarea name="title_ru" id="title_ru" cols="20" rows="3" class="form-control">{{$service->title_ru}}</textarea></div>
                        <div class="col-md-4"><label for="title_am">Հայերեն վերնագիր</label>
                            <textarea name="title_am" id="title_am" cols="20" rows="3"
                                      class="form-control">{{$service->title_am}}</textarea></div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <label for="article_en">Անգլերեն տեքստ</label>
                            <textarea name="article_en" id="article_en" cols="20" rows="3"
                                      class="form-control">{{$service->article_en}}</textarea>
                        </div>
                        <div class="col-md-4">
                            <label for="article_ru">Ռուսերեն տեքստ</label>
                            <textarea name="article_ru" id="article_ru" cols="20" rows="3"
                                      class="form-control">{{$service->article_ru}}</textarea></div>
                        <div class="col-md-4">
                            <label for="article_am">Հայերեն տեքստ</label>
                            <textarea name="article_am" id="article_am" cols="20" rows="3"
                                      class="form-control">{{$service->article_am}}</textarea>
                        </div>
                    </div>
                    <div class="row mt-5">
                        <div class="col-md-6">
                            <label for="img13" >Նկար</label>
                            <div class="input-group">
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input"
                                           name="image"  id="img13" >
                                    <label class="custom-file-label" for="img13">Ընտրել Նկար</label>

                                </div>
                            </div>
                        </div>
                        <div class="col-2"></div>
                        <div class="col-2">
                            <img id="view13" src="{{asset('image/services/'.$service->image)}}"  alt="your image" style=" max-width:180px;"/>
                        </div>
                        <div class="col-2"></div>
                    </div>

                    <input type="hidden" value="{{$service->id}}" name="id">
                    <button class="btn btn-danger mt-3" type="submit" >Փոփոխել
                    </button>
                </form>
                <form action="{{route('services_destroy')}}"  method="post" class="text-center" >
                    @csrf
                    <button class=" btn btn-primary mt-3" type="submit">Ջնջել</button>
                    <input type="hidden" value="{{$service->id}}" name="id">
                </form>
            </div>
        </div>
    </div>
@endsection