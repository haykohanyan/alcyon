@extends('admin/layouts/header-footer')
@section('content')
    <div class="container-fluid">

        <form action="{{route('image_store')}}" method="post" enctype="multipart/form-data" class="text-center">
            @csrf
            <h2 class="page-title">Նկարներ</h2>
            <h3 class="mt-5" style="color:#727CF5">Ավելացնել նկար</h3>
            <div class="row">
                <div class="col-4">
                    <label for="article1_am">Նկարի հայերեն անվանում</label>
                    <textarea name="article1_am" id="article1_am" cols="20" rows="3"
                              class="form-control"></textarea>
                    <label for="article2_am">Նկարի հայերեն բնութագիր</label>
                    <textarea name="article2_am" id="article2_am" cols="20" rows="3"
                              class="form-control"></textarea>
                </div>
                <div class="col-4">
                    <label for="article1_ru">Նկարի ռուսերեն անվանում</label>
                    <textarea name="article1_ru" id="article1_ru" cols="20" rows="3"
                              class="form-control"></textarea>
                    <label for="article2_ru">Նկարի ռուսերեն բնութագիր</label>
                    <textarea name="article2_ru" id="article2_ru" cols="20" rows="3"
                              class="form-control"></textarea>
                </div>
                <div class="col-4">
                    <label for="article1_en">Նկարի անգլերեն անվանում</label>
                    <textarea name="article1_en" id="article1_en" cols="20" rows="3"
                              class="form-control"></textarea>
                    <label for="article2_en">Նկարի անգլերեն բնութագիր</label>
                    <textarea name="article2_en" id="article2_en" cols="20" rows="3"
                              class="form-control"></textarea>
                </div>
            </div>
            <div class="row">
                <div class="col-6">
                    <label for="img14">Նկար</label>
                    <div class="input-group">
                        <div class="custom-file">
                            <input type="file" class="custom-file-input" id="img14" name="image">
                            <label class="custom-file-label" for="img14">Ընտրել նկար</label>
                        </div>
                    </div>
                </div>
                <div class="col-2"></div>
                <div class="col-2">
                    <img id="view14" src=""  alt="your image" class="hide" style=" max-width:200px;margin: 0 auto"/><br>
                </div>
                <div class="col-2"></div>

            </div>
            <div class="row">
                <div class="col-6">
                    <label for="image_cat">Ընտրել կատեգորիան</label>
                    <select name="image_cats[]" id="image_cat" class="form-control select2-multiple"   data-toggle="select2"  multiple>
                        @foreach($cats as $cat)
                            <option value="{{$cat->id}}">{{$cat->name_am}}</option>
                        @endforeach
                    </select>
                </div>
            </div>


            <button class="btn btn-danger mt-3" type="submit" >Ավելացնել
            </button>
        </form>
    </div>
@endsection
