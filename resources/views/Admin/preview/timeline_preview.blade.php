@extends('admin/layouts/header-footer')
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">


                <form action="{{route('timeline_update')}}" method="post" enctype="multipart/form-data" class="text-center">
                    @csrf
                    <h4 class="mt-3">Փոփոխել</h4>
                    <div class="row">
                        <div class="col-md-4">
                            <label for="title_en">Անգլերեն անվանում</label>
                            <textarea name="title_en" id="title_en" cols="20" rows="3" class="form-control">{{$timeline->title_en}}</textarea></div>
                        <div class="col-md-4"><label for="title_ru">Ռուսերեն անվանում</label>
                            <textarea name="title_ru" id="title_ru" cols="20" rows="3" class="form-control">{{$timeline->title_ru}}</textarea></div>
                        <div class="col-md-4"><label for="title_am">Հայերեն անվանում</label>
                            <textarea name="title_am" id="title_am" cols="20" rows="3"
                                      class="form-control">{{$timeline->title_am}}</textarea></div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-md-6">
                            <label for="inputGroupFile04">Նկար</label>
                            <div class="input-group">
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input"
                                           name="image"  id="imgInp" >
                                    <label class="custom-file-label" for="imgInp">Ընտրել նկար</label>
                                </div>
                            </div>
                            <label for="year" class="mt-3">Տարեթիվ</label>
                            <input type="text" class="form-control" name="year" value="{{$timeline->year}}" id="year">
                        </div>
                        <div class="col-md-6">
                            <img id="blah" src="{{asset('image/timeline/'.$timeline->image)}}"    alt="your image"   style=" max-width:180px;"/>
                        </div>
                    </div>
                    <input type="hidden" value="{{$timeline->id}}" name="id">
                    <button class="btn btn-danger mt-3" type="submit" >Փոփոխել
                    </button>
                </form>
                <form action="{{route('timeline_destroy')}}"  method="post" class="text-center" >
                    @csrf
                    <button class=" btn btn-primary mt-3" type="submit">Ջնջել</button>
                    <input type="hidden" value="{{$timeline->id}}" name="id">
                </form>
            </div>
        </div>
    </div>
@endsection