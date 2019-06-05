@extends('admin/layouts/header-footer')
@section('content')
    <div class="container-fluid">

{{--        <form action="{{route('picture_store')}}" method="post" enctype="multipart/form-data" class="text-center">--}}
{{--            @csrf--}}
{{--            <div class="row">--}}
{{--                <div class="col-6">--}}
{{--                    <label for="img14">Նկար</label>--}}
{{--                    <div class="input-group">--}}
{{--                        <div class="custom-file">--}}
{{--                            <input type="file" class="custom-file-input" id="img14" name="picture">--}}
{{--                            <label class="custom-file-label" for="img14">Ընտրել նկար</label>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}


{{--            <button class="btn btn-danger mt-3" type="submit" >Ավելացնել--}}
{{--            </button>--}}
{{--        </form>--}}


{{--        <form action="{{route('text_store')}}" method="post" class="text-center">--}}
{{--            <h3 class="mt-5" style="color:#727CF5">Ավելացնել կատեգորիա</h3>--}}
{{--            @csrf--}}
{{--            <div class="row mt-5">--}}
{{--                <div class="col-4">--}}
{{--                    <label for="title_am">Կատեգորիայի հայերեն անվանում</label>--}}
{{--                    <input type="text" name="title_am" id="title_am" class="form-control">--}}
{{--                </div>--}}
{{--                <div class="col-4">--}}
{{--                    <label for="title_ru">Կատեգորիայի ռուսերեն անվանում</label>--}}
{{--                    <input type="text" name="title_ru" id="title_ru" class="form-control">--}}
{{--                </div>--}}
{{--                <div class="col-4">--}}
{{--                    <label for="title_en">Կատեգորիայի անգլերեն անվանում</label>--}}
{{--                    <input type="text" name="title_en" id="title_en" class="form-control">--}}
{{--                </div>--}}

{{--            </div>--}}
{{--            <button class="btn btn-danger mt-1" type="submit" >Ավելացնել</button>--}}
{{--        </form>--}}

        <h2>Գլխավոր էջ</h2>
        <div class="row">
            <div class="col-12">
                <h3 class="mt-3">Մենյուի բաժինների անվանումներ</h3>
                <div class="table-responsive">
                    <table class="table mb-0">
                        <tbody>
                        @foreach($texts as $key=>$text)
                            @if($key>=6&&$key<=11)
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
                <h3 class="mt-3">Սլայդշոու</h3>
                <a href="{{route('main_slide_add')}}"><button class="btn btn-danger">Ավելացնել</button></a>
                <div class="table-responsive">
                    <table class="table mb-0">
                        <thead>
                        <tr>
                            <th scope="col">Անգլերեն վերնագիր</th>
                            <th scope="col">Ռուսերեն վերնագիր</th>
                            <th scope="col">Հայերեն վերնագիր</th>
                            <th scope="col">Դիտել</th>

                        </tr>
                        </thead>
                        <tbody>
                        @foreach($main_slides as $main_slide)
                            <tr>
                                <td>
                                    <p>{{$main_slide->title_en}}</p>
                                </td>
                                <td>
                                    <p>{{$main_slide->title_ru}}</p>
                                </td>
                                <td>
                                    <p>{{$main_slide->title_am}}</p>
                                </td>
                                <td>
                                    <a href="{{route('main_slide_preview',$main_slide->id)}}">
                                        <button class="btn btn-primary">
                                            Դիտել
                                        </button>
                                    </a>
                                </td>
                            </tr>

                        @endforeach
                        </tbody>
                    </table>
                </div>
                <div class="dataTables_paginate paging_simple_numbers"
                     id="basic-datatable_paginate">
                    <ul class="pagination pagination-rounded">
                        {{ $main_slides->links() }}
                    </ul>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <h3 class="mt-3">Մեր ծառյությունները բաժնի նկար</h3>
                <div class="table-responsive">
                    <table class="table mb-0">
                        <tbody>
                        @foreach($pictures as $key=>$picture)
                            @if($key==0)
                            <form action="{{route('picture_update')}}" method="post" enctype="multipart/form-data">
                                @csrf
                                <tr>
                                    <td>
                                        <img src="{{asset('image/pictures/'.$picture->picture)}}" alt="" width="300px" height="180px">
                                    </td>
                                    <td>
                                        <div class="custom-file mt-5" >
                                            <input type="file" class="custom-file-input imgInp5"
                                                  name="picture">
                                            <label class="custom-file-label">Ընտրել նկար</label>
                                        </div>
                                    </td>
                                    <input type="hidden" value="{{$picture->id}}" name="id">
                                    <td>
                                        <button class="btn btn-primary mt-5">Փոփոխել
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
                <h3 class="mt-3">Մեր ծառյությունները բաժնի տեքստ</h3>
                <div class="table-responsive">
                    <table class="table mb-0">
                        <tbody>
                        @foreach($texts as $key=>$text)
                            @if($key==0||$key==1)
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
                <h3 class="mt-3">Մեր ծառյությունները բաժնի կոճակ</h3>
                <div class="table-responsive">
                    <table class="table mb-0">
                        <tbody>
                        @foreach($texts as $key=>$text)
                            @if($key==2)
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
                <h3 class="mt-3">Վերջին Նախագծերը բաժնի վերնագիր</h3>
                <div class="table-responsive">
                    <table class="table mb-0">
                        <tbody>
                        @foreach($texts as $key=>$text)
                            @if($key==3)
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
                <h3 class="mt-3">Տարիների փորձ բաժնի տեքստ</h3>
                <div class="table-responsive">
                    <table class="table mb-0">
                        <tbody>
                        @foreach($texts as $key=>$text)
                            @if($key==12)
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
                <h3 class="mt-3">Տարիների փորձ բաժնի կոճակ</h3>
                <div class="table-responsive">
                    <table class="table mb-0">
                        <tbody>
                        @foreach($texts as $key=>$text)
                            @if($key==24)
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
                <h3 class="mt-3">Տարիների փորձ</h3>
                <div class="table-responsive">
                    <table class="table mb-0">
                        <thead>
                        <tr>
                            <th scope="col">Անգլերեն վերնագիր</th>
                            <th scope="col">Ռուսերեն վերնագիր</th>
                            <th scope="col">Հայերեն վերնագիր</th>
                            <th scope="col">Քանակ </th>
                            <th scope="col">Փոփոխել</th>

                        </tr>
                        </thead>
                        <tbody>
                        @foreach($years as $year)
                            <form action="{{route('year_update')}}" method="post">
                                @csrf
                            <tr>
                                <td>
                                    <input type="text" value="{{$year->title_en}}" name="title_en" class="form-control">
                                </td>
                                <td>
                                    <input type="text" value="{{$year->title_ru}}" name="title_ru" class="form-control">
                                </td>
                                <td>
                                    <input type="text" value="{{$year->title_am}}" name="title_am" class="form-control">
                                </td>
                                <td>
                                    <input type="number" value="{{$year->count}}" name="count" class="form-control">
                                </td>
                                <input type="hidden" value="{{$year->id}}" name="id">
                                <td>
                                        <button class="btn btn-primary">Փոփոխել
                                        </button>
                                </td>
                            </tr>
                            </form>
                        @endforeach
                        </tbody>
                    </table>
                </div>
                <div class="dataTables_paginate paging_simple_numbers"
                     id="basic-datatable_paginate">
                    <ul class="pagination pagination-rounded">
                        {{ $years->links() }}
                    </ul>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <h3 class="mt-3">Մեզ հետ համագործակցող ընկերությունները բաժնի վերնագիր</h3>
                <div class="table-responsive">
                    <table class="table mb-0">
                        <tbody>
                        @foreach($texts as $key=>$text)
                            @if($key==25)
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
                <h3 class="mt-3">Մեզ հետ համագործակցող ընկերությունները</h3>
                <a href="{{route('our_partners_add')}}"><button class="btn btn-danger">Ավելացնել ընկերություն</button></a>
                <div class="table-responsive">
                    <table class="table mb-0">
                        <thead>
                        <tr>
                            <th scope="col">Հղում</th>
                            <th scope="col">Նկար</th>
                            <th scope="col">Փոփոխել</th>
                            <th scope="col">Ջնջել</th>
                        </thead>
                        <tbody>
                        @foreach($our_partners as $our_partner)
                            <form action="{{route('our_partners_update')}}" method="post" enctype="multipart/form-data">
                                @csrf
                                <tr>
                                    <td>
                                        <input type="text" name="link"  class="form-control" value="{{$our_partner->link}}">
                                    </td>
                                    <td class="text-center">
                                        <div class="row">
                                            <div class="col-2"> <img src="{{asset('image/our_partners/'.$our_partner->image)}}" alt="" height="50" width="50" ></div>
                                            <div class="col-10">      <div class="input-group" >
                                                    <div class="custom-file" >
                                                        <input type="file" class="custom-file-input imgInp5"
                                                               id="our_clients-{{$our_partner->image}}" name="image">
                                                        <label class="custom-file-label"
                                                               for="our_clients-{{$our_partner->image}}">Ընտրել նկար</label>
                                                    </div>
                                                </div></div>
                                        </div>
                                    </td>
                                    <input type="hidden" value="{{$our_partner->id}}" name="id"><td>
                                        <button class="btn btn-primary">Փոփոխել</button>
                                    </td>
                            </form>
                            <td>
                                <a href="{{route('our_partners_destroy',$our_partner->id)}}">
                                    <button class="btn btn-danger">
                                        Ջնջել
                                    </button>
                                </a>
                            </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                    <div class="dataTables_paginate paging_simple_numbers"
                         id="basic-datatable_paginate">
                        <ul class="pagination pagination-rounded">
                            {{ $our_partners->links() }}
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <h3 class="mt-3">Մեր թիմը բաժնի վերնագիր</h3>
                <div class="table-responsive">
                    <table class="table mb-0">
                        <tbody>
                        @foreach($texts as $key=>$text)
                            @if($key==26)
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
                <h3 class="mt-3">Մեր թիմը</h3>
                <a href="{{route('team_add')}}"><button class="btn btn-danger">Ավելացնել</button></a>
                <div class="table-responsive">
                    <table class="table mb-0">
                        <thead>
                        <tr>
                            <th scope="col">Անուն</th>
                            <th scope="col">Պաշտոն</th>
                            <th scope="col">Դիտել</th>

                        </tr>
                        </thead>
                        <tbody>
                        @foreach($teams as $team)
                            <tr>
                                <td>
                                    <p>{{$team->name_am}}</p>
                                </td>
                                <td>
                                    <p>{{$team->position_am}}</p>
                                </td>
                                <td>
                                    <a href="{{route('team_preview',$team->id)}}">
                                        <button class="btn btn-primary">
                                            Դիտել
                                        </button>
                                    </a>
                                </td>
                            </tr>

                        @endforeach
                        </tbody>
                    </table>
                </div>
                <div class="dataTables_paginate paging_simple_numbers"
                     id="basic-datatable_paginate">
                    <ul class="pagination pagination-rounded">
                        {{ $teams->links() }}
                    </ul>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <h3 class="mt-3">Footer բաժնի տեքստ</h3>
                <div class="table-responsive">
                    <table class="table mb-0">
                        <tbody>
                        @foreach($texts as $key=>$text)
                            @if($key>=13&&$key<=24)
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
    </div>

@endsection