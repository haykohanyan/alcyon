@extends('admin/layouts/header-footer')
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">


                <form action="{{route('timeline_store')}}" method="post" enctype="multipart/form-data" class="text-center">
                    @csrf
                    <h4 class="mt-3">Ավելացնել</h4>
                    <div class="row">
                        <div class="col-md-4">
                            <label for="title_en">Անգլերեն անվանում</label>
                            <textarea name="title_en" id="title_en" cols="20" rows="3" class="form-control"></textarea></div>
                        <div class="col-md-4"><label for="title_ru">Ռուսերեն անվանում</label>
                            <textarea name="title_ru" id="title_ru" cols="20" rows="3" class="form-control"></textarea></div>
                        <div class="col-md-4"><label for="title_am">Հայերեն անվանում</label>
                            <textarea name="title_am" id="title_am" cols="20" rows="3"
                                      class="form-control"></textarea></div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-md-6">
                            <label for="img7">Նկար</label>
                            <div class="input-group">
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input"
                                           name="image"  id="img7" >
                                    <label class="custom-file-label" for="img7">Ընտրել նկար</label>
                                </div>
                            </div>
                            <label for="year" class="mt-3">Տարեթիվ</label>
                            <input type="text" class="form-control " name="year" id="year">
                        </div>
                        <div class="col-md-6">
                            <img id="view7" src=""  alt="your image" class="hide"  style=" max-width:180px;"/>
                        </div>
                    </div>
                    <button class="btn btn-danger mt-3" type="submit" >Ավելացնել
                    </button>
                </form>

            </div>
        </div>
    </div>
@endsection