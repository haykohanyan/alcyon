@extends('admin/layouts/header-footer')
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">

                <form action="{{route('team_update')}}" method="post" enctype="multipart/form-data" class="text-center">
                    @csrf
                    <h4 class="my-3">Փոփոխել</h4>
                    <div class="row">
                        <div class="col-md-4">
                            <label for="name_en">Անգլերեն անուն</label>
                            <textarea name="name_en" id="name_en" cols="20" rows="3" class="form-control">{{$team->name_en}}</textarea></div>
                        <div class="col-md-4"><label for="name_ru">Ռուսերեն անուն</label>
                            <textarea name="name_ru" id="name_ru" cols="20" rows="3" class="form-control">{{$team->name_ru}}</textarea></div>
                        <div class="col-md-4"><label for="name_am">Հայերեն անուն</label>
                            <textarea name="name_am" id="name_am" cols="20" rows="3"
                                      class="form-control">{{$team->name_am}}</textarea></div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <label for="position_en">Անգլերեն պաշտոն</label>
                            <textarea name="position_en" id="position_en" cols="20" rows="3"
                                      class="form-control">{{$team->position_en}}</textarea>
                        </div>
                        <div class="col-md-4">
                            <label for="position_ru">Ռուսերեն պաշտոն</label>
                            <textarea name="position_ru" id="position_ru" cols="20" rows="3"
                                      class="form-control">{{$team->position_ru}}</textarea></div>
                        <div class="col-md-4">
                            <label for="position_am">Հայերեն պաշտոն</label>
                            <textarea name="position_am" id="position_am" cols="20" rows="3"
                                      class="form-control">{{$team->position_am}}</textarea>
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-md-6">
                            <label for="img5" class="mt-5">Նկար</label>
                            <div class="input-group">
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input"
                                           name="image"  id="img5" >
                                    <label class="custom-file-label" for="img5">Ընտրել Նկար</label>

                                </div>
                            </div>
                        </div>
                        <div class="col-2"></div>
                        <div class="col-2">
                            <img id="view5" src="{{asset('image/team/'.$team->image)}}"  alt="your image"  style=" max-width:180px;"/>
                        </div>
                        <div class="col-2"></div>
                    </div>

                    <input type="hidden" value="{{$team->id}}" name="id">
                    <button class="btn btn-danger mt-3" type="submit" >Փոփոխել
                    </button>
                </form>
                <form action="{{route('team_destroy')}}"  method="post" class="text-center mt-2" >
                    @csrf
                    <button class=" btn btn-primary" type="submit">Ջնջել</button>
                    <input type="hidden" value="{{$team->id}}" name="id">
                </form>
            </div>
        </div>
    </div>
@endsection