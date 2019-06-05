@extends('admin/layouts/header-footer')
@section('content')
    <div class="container-fluid">


        <form action="{{route('image_update')}}" method="post" enctype="multipart/form-data" class="text-center">
            @csrf
            <h2 class="page-title">Նկարներ</h2>
            <div class="row mt-3">
                <div class="col-4">
                    <label for="article1_am">Նկարի հայերեն անվանում</label>
                    <textarea name="article1_am" id="article1_am" cols="20" rows="3"
                              class="form-control">{{$image->article1_am}}</textarea>
                    <label for="article2_am">Նկարի հայերեն բնութագիր</label>
                    <textarea name="article2_am" id="article2_am" cols="20" rows="3"
                              class="form-control">{{$image->article2_am}}</textarea>
                </div>
                <div class="col-4">
                    <label for="article1_ru">Նկարի ռուսերեն անվանում</label>
                    <textarea name="article1_ru" id="article1_ru" cols="20" rows="3"
                              class="form-control">{{$image->article1_ru}}</textarea>
                    <label for="article2_ru">Նկարի ռուսերեն բնութագիր</label>
                    <textarea name="article2_ru" id="article2_ru" cols="20" rows="3"
                              class="form-control">{{$image->article2_ru}}</textarea>
                </div>
                <div class="col-4">
                    <label for="article1_en">Նկարի անգլերեն անվանում</label>
                    <textarea name="article1_en" id="article1_en" cols="20" rows="3"
                              class="form-control">{{$image->article1_en}}</textarea>
                    <label for="article2_en">Նկարի անգլերեն բնութագիր</label>
                    <textarea name="article2_en" id="article2_en" cols="20" rows="3"
                              class="form-control">{{$image->article2_en}}</textarea>
                </div>
            </div>
            <input type="hidden" name="id" value="{{$image->id}}">
            <div class="row mt-3">
                <div class="col-6">
                    <label for="img4">Նկար</label>
                    <div class="input-group">
                        <div class="custom-file">
                            <input type="file" class="custom-file-input" id="img4" name="image">
                            <label class="custom-file-label" for="img4">Ընտրել նկար</label>
                        </div>
                    </div>
                </div>
                <div class="col-2"></div>
                <div class="col-2">
                    <img id="view4" src="{{asset('image/gallery/'.$image->image)}}"  alt="your image"  style=" max-width:200px;margin: 0 auto"/><br>
                </div>
                <div class="col-2"></div>

            </div>
            <div class="row mt-3">

                <div class="col-12">
                    <label>Ջնջել կատեգորիա</label>
                    <br>
                    @foreach($image->cats as $cat)
                        <span>{{$cat->name_am}}</span>
                        <a class="btn btn-danger mt-1 mb-2" href="/admin/ic_destroy/{{$image->id}}/{{$cat->id}}" style="margin-left: 40%" >Ջնջել
                        </a>
                        <br>
                    @endforeach
                    <label for="image_category">Ավելացնել կատեգորիան</label>
                    <select name="image_categories[]" id="image_category" class="form-control select2-multiple"   data-toggle="select2"  multiple>
                        @foreach($cats as $cat)
                            <option value="{{$cat->id}}">{{$cat->name_am}}</option>
                        @endforeach
                    </select>
                </div>
            </div>


            <button class="btn btn-danger mt-2" type="submit" >Փոփոխել</button>
        </form>
        <form action="{{route('image_destroy')}}"  method="post" class="text-center" style="padding: 5px 0">
            @csrf
            <button class=" btn btn-primary" type="submit">Ջնջել</button>
            <input type="hidden" value="{{$image->id}}" name="id">
        </form>
    </div>
@endsection
