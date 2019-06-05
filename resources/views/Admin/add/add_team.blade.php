@extends('admin/layouts/header-footer')
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">


                <form action="{{route('team_store')}}" method="post" enctype="multipart/form-data" class="text-center">
                    @csrf
                    <h4 class="mt-3">Ավելացնել թմի անդամ</h4>
                    <div class="row">
                        <div class="col-md-4">
                            <label for="name_en">Անգլերեն անուն</label>
                            <textarea name="name_en" id="name_en" cols="20" rows="3" class="form-control"></textarea></div>
                        <div class="col-md-4"><label for="name_ru">Ռուսերեն անուն</label>
                            <textarea name="name_ru" id="name_ru" cols="20" rows="3" class="form-control"></textarea></div>
                        <div class="col-md-4"><label for="name_am">Հայերեն անուն</label>
                            <textarea name="name_am" id="name_am" cols="20" rows="3"
                                      class="form-control"></textarea></div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <label for="position_en">Անգլերեն պաշտոն</label>
                            <textarea name="position_en" id="position_en" cols="20" rows="3"
                                      class="form-control"></textarea>
                        </div>
                        <div class="col-md-4">
                            <label for="position_ru">Ռուսերեն պաշտոն</label>
                            <textarea name="position_ru" id="position_ru" cols="20" rows="3"
                                      class="form-control"></textarea></div>
                        <div class="col-md-4">
                            <label for="position_am">Հայերեն պաշտոն</label>
                            <textarea name="position_am" id="position_am" cols="20" rows="3"
                                      class="form-control"></textarea>
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-md-6">
                            <label for="img6">Նկար</label>
                            <div class="input-group">
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input"
                                           name="image"  id="img6" >
                                    <label class="custom-file-label" for="img6">Ընտրել նկար</label>

                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <img id="view6" src=""  alt="your image" class="hide"  style=" max-width:180px;"/>
                        </div>
                    </div>
                    <button class="btn btn-danger mt-3" type="submit" >Ավելացնել
                    </button>
                </form>

            </div>
        </div>
    </div>
@endsection