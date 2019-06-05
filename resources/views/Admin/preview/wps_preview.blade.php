@extends('admin/layouts/header-footer')
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">


                <form action="{{route('wps_update')}}" method="post" enctype="multipart/form-data" class="text-center">
                    @csrf
                    <h4 class="mt-3">Փոփոխել</h4>
                    <div class="row">
                        <div class="col-md-4">
                            <label for="title_en">Անգլերեն անուն</label>
                            <textarea name="title_en" id="title_en" cols="20" rows="3" class="form-control">{{$wps->title_en}}</textarea></div>
                        <div class="col-md-4"><label for="title_ru">Ռուսերեն անուն</label>
                            <textarea name="title_ru" id="title_ru" cols="20" rows="3" class="form-control">{{$wps->title_ru}}</textarea></div>
                        <div class="col-md-4"><label for="title_am">Հայերեն անուն</label>
                            <textarea name="title_am" id="title_am" cols="20" rows="3"
                                      class="form-control">{{$wps->title_am}}</textarea></div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <label for="article_en">Անգլերեն քոմենթ</label>
                            <textarea name="article_en" id="article_en" cols="20" rows="3"
                                      class="form-control">{{$wps->article_en}}</textarea>
                        </div>
                        <div class="col-md-4">
                            <label for="article_ru">Ռուսերեն քոմենթ</label>
                            <textarea name="article_ru" id="article_ru" cols="20" rows="3"
                                      class="form-control">{{$wps->article_ru}}</textarea></div>
                        <div class="col-md-4">
                            <label for="article_am">Հայերեն քոմենթ</label>
                            <textarea name="article_am" id="article_am" cols="20" rows="3"
                                      class="form-control">{{$wps->article_am}}</textarea>
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-md-6">
                            <label for="img10">Նկար</label>
                            <div class="input-group">
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input"
                                           name="image"  id="img10" >
                                    <label class="custom-file-label" for="img10">Ընտրել նկար</label>
                                </div>
                            </div>
                            <label for="from" class="mt-3">Գնահատական</label>
                            <select name="from" id="from" class="form-control">

                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                                <option value="{{$wps->from}}" selected>{{$wps->from}}</option>
                            </select>
                        </div>
                        <div class="col-md-6">
                            <img id="view10"  src="{{asset('image/wps/'.$wps->image)}}"    alt="your image"   style=" max-width:180px;"/>
                        </div>
                    </div>
                    <input type="hidden" value="{{$wps->id}}" name="id">
                    <button class="btn btn-danger mt-3" type="submit" >Փոփոխել
                    </button>
                </form>
                <form action="{{route('wps_destroy')}}"  method="post" class="text-center" >
                    @csrf
                    <button class=" btn btn-primary mt-3" type="submit">Ջնջել</button>
                    <input type="hidden" value="{{$wps->id}}" name="id">
                </form>
            </div>
        </div>
    </div>
@endsection