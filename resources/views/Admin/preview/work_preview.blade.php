@extends('admin/layouts/header-footer')
@section('content')
    <div class="container-fluid">


        <form action="{{route('work_update')}}" method="post" enctype="multipart/form-data" class="text-center">
            @csrf
            <h3 class="mt-5" style="color:#727CF5">Փոփոխել </h3>
            <div class="row mt-3">
                <div class="col-4">
                    <label for="article1_am">Աշխատանքի հայերեն անվանում</label>
                    <textarea name="article1_am" id="article1_am" cols="20" rows="3"
                              class="form-control">{{$work->article1_am}}</textarea>
                    <label for="article2_am">Աշխատանքի հայերեն բնութագիր</label>
                    <textarea name="article2_am" id="article2_am" cols="20" rows="3"
                              class="form-control">{{$work->article2_am}}</textarea>
                </div>
                <div class="col-4">
                    <label for="article1_ru">Աշխատանքի ռուսերեն անվանում</label>
                    <textarea name="article1_ru" id="article1_ru" cols="20" rows="3"
                              class="form-control">{{$work->article1_ru}}</textarea>
                    <label for="article2_ru">Աշխատանքի ռուսերեն բնութագիր</label>
                    <textarea name="article2_ru" id="article2_ru" cols="20" rows="3"
                              class="form-control">{{$work->article2_ru}}</textarea>
                </div>
                <div class="col-4">
                    <label for="article1_en">Աշխատանքի անգլերեն անվանում</label>
                    <textarea name="article1_en" id="article1_en" cols="20" rows="3"
                              class="form-control">{{$work->article1_en}}</textarea>
                    <label for="article2_en">Աշխատանքի անգլերեն բնութագիր</label>
                    <textarea name="article2_en" id="article2_en" cols="20" rows="3"
                              class="form-control">{{$work->article2_en}}</textarea>
                </div>
            </div>
            <input type="hidden" name="id" value="{{$work->id}}">
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
                    <img id="view4" src="{{asset('image/works/'.$work->image)}}"  alt="your image"  style=" max-width:200px;margin: 0 auto"/><br>
                </div>
                <div class="col-2"></div>

            </div>
            <div class="row mt-3">
                <div class="col-6">
                    <label for="link">Հղում(պարտադիր չէ)</label>
                    <input type="text" name="link" id="link" class="form-control" value="{{$work->link}}">
                </div>
                <div class="col-6">
                    <label>Ջնջել կատեգորիա</label>
                    <br>
                    @foreach($work->categories as $category)
                        <span>{{$category->name_am}}</span>
                        <a class="btn btn-danger mt-1 mb-2" href="/admin/wc_destroy/{{$work->id}}/{{$category->id}}" style="margin-left: 40%" >Ջնջել
                        </a>
                        <br>
                    @endforeach
                    <label for="work_category">Ավելացնել կատեգորիան</label>
                    <select name="work_categories[]" id="work_category" class="form-control select2-multiple"   data-toggle="select2"  multiple>
                        @foreach($categories as $category)
                            <option value="{{$category->id}}">{{$category->name_am}}</option>
                        @endforeach
                    </select>
                </div>
            </div>


            <button class="btn btn-danger mt-2" type="submit" >Փոփոխել</button>
        </form>
        <form action="{{route('work_destroy')}}"  method="post" class="text-center" style="padding: 5px 0">
            @csrf
            <button class=" btn btn-primary" type="submit">Ջնջել</button>
            <input type="hidden" value="{{$work->id}}" name="id">
        </form>
    </div>
@endsection
