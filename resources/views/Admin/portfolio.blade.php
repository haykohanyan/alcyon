@extends('admin/layouts/header-footer')
@section('content')
    <div class="container-fluid">
        <h2>Մեր Աշխատանքները</h2>
        <div class="row">
            <div class="col-12">
                <h3 class="mt-3">Մեր Աշխատանքները բաժնի գլխավոր նկար</h3>
                <div class="table-responsive">
                    <table class="table mb-0">
                        <tbody>
                        @foreach($pictures as $key=>$picture)
                            @if($key==5)
                            <form action="{{route('picture_update')}}" method="post" enctype="multipart/form-data">
                                @csrf
                                <tr>
                                    <td>
                                        <img src="{{asset('image/pictures/'.$picture->picture)}}" alt="" width="300px" height="100px">
                                    </td>
                                    <td>
                                        <div class="custom-file mt-3" >
                                            <input type="file" class="custom-file-input imgInp5"
                                                   name="picture">
                                            <label class="custom-file-label">Ընտրել նկար</label>
                                        </div>
                                    </td>
                                    <input type="hidden" value="{{$picture->id}}" name="id">
                                    <td>
                                        <button class="btn btn-primary mt-3">Փոփոխել
                                        </button>
                                    </td>
                                </tr>
                            </form>
                            @endif
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <h3 class="mt-3">Մեր աշխատանքները բաժնի տեքստ</h3>
                <div class="table-responsive">
                    <table class="table mb-0">
                        <tbody>
                        @foreach($texts as $key=>$text)
                            @if($key==4||$key==5)
                                <form action="{{route('text_update')}}" method="post" >
                                    @csrf
                                    <tr>
                                        <td>
                                            <input type="text" class="form-control" name="title_am" value="{{$text->title_am}}">
                                        </td>
                                        <td>
                                            <input type="text" class="form-control" name="title_ru" value="{{$text->title_ru}}">
                                        </td>
                                        <td>
                                            <input type="text" class="form-control" name="title_en" value="{{$text->title_en}}">
                                        </td>
                                        <input type="hidden" value="{{$text->id}}" name="id">
                                        <td>
                                            <button class="btn btn-primary ">Փոփոխել
                                            </button>
                                        </td>
                                    </tr>
                                </form>
                            @endif
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <h3 class="page-title mt-3">Աշխատանքներ</h3>
                <a href="{{route('add_work')}}">
                    <button class="btn btn-primary">Ավելացնել աշխատանք</button>
                </a>
                <div class="table-responsive">
                    <table class="table mb-0">
                        <thead>
                        <tr>
                            <th scope="col">Անուն</th>
                            <th scope="col">Բնութագիր</th>
                            <th scope="col">Դիտել</th>

                        </tr>
                        </thead>
                        <tbody>
                        @foreach($works as $work)
                            @csrf
                            <tr>
                                <td>
                                  <span>
                                      {{$work->article1_am}}
                                  </span>
                                </td>
                                <td>
                                    <span>
                                      {{$work->article2_am}}
                                     </span>
                                </td>
                                <td><a href="{{route('work_preview',$work->id)}}">
                                        <button class="btn btn-primary">
                                            Դիտել
                                        </button>
                                    </a></td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
                <div class="dataTables_paginate paging_simple_numbers"
                     id="basic-datatable_paginate">
                    <ul class="pagination pagination-rounded">
                        {{ $works->links() }}
                    </ul>
                </div>
            </div>

        </div>
        <div class="row">
            <div class="col-12">
                <h3 class="page-title mt-3">Կատեգորիաներ</h3>
                <a href="{{route('add_category')}}">
                    <button class="btn btn-primary">Ավելացնել կատեգորիա</button>
                </a>
                <div class="table-responsive">
                    <table class="table mb-0">
                        <thead>
                        <tr>
                            <th scope="col">Հայերեն անվանում</th>
                            <th scope="col">Ռուսերեն անվանում</th>
                            <th scope="col">Անգլերեն անվանում</th>
                            <th scope="col">Փոփոխել</th>
                            <th scope="col">Ջնջել</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($categories as $category)
                            <form action="{{route('category_update')}}" method="post" enctype="multipart/form-data">
                                @csrf
                                <tr>
                                    <td>
                                        <input type="text" name="name_am" class="form-control" value=" {{$category->name_am}}">
                                    </td>
                                    <td>
                                        <input type="text" name="name_ru" class="form-control" value=" {{$category->name_ru}}">
                                    </td>
                                    <td>
                                        <input type="text" name="name_en" class="form-control" value=" {{$category->name_en}}">
                                    </td>
                                    <input type="hidden" value="{{$category->id}}" name="id">
                                    <td>
                                        <button class="btn btn-danger" type="submit">Փոփոխել</button>
                                    </td>
                            </form>

                            <td>
                                <form action="{{route('category_destroy')}}"  method="post">
                                    @csrf
                                    <button class=" btn btn-primary" type="submit">Ջնջել</button>
                                    <input type="hidden" value="{{$category->id}}" name="id">
                                </form>
                            </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
                <div class="dataTables_paginate paging_simple_numbers"
                     id="basic-datatable_paginate">
                    <ul class="pagination pagination-rounded">
                        {{ $categories->links() }}
                    </ul>
                </div>
            </div>
        </div>
    </div>
@endsection