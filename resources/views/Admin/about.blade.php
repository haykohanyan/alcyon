@extends('admin/layouts/header-footer')
@section('content')
    <div class="container-fluid">
        <h2>Մեր Մասին </h2>
        <div class="row">
            <div class="col-12">
                <h3 class="mt-3">Մեր մասին բաժնի գլխավոր նկար</h3>
                <div class="table-responsive">
                    <table class="table mb-0">
                        <tbody>
                        @foreach($pictures as $key=>$picture)
                            @if($key==1)
                            <form action="{{route('picture_update')}}" method="post" enctype="multipart/form-data">
                                @csrf
                                <tr>
                                    <td>
                                        <img src="{{asset('image/pictures/'.$picture->picture)}}" alt="" width="300px" height="100px">
                                    </td>
                                    <td>
                                        <div class="custom-file mt-4" >
                                            <input type="file" class="custom-file-input imgInp5"
                                                   name="picture">
                                            <label class="custom-file-label">Ընտրել նկար</label>
                                        </div>
                                    </td>
                                    <input type="hidden" value="{{$picture->id}}" name="id">
                                    <td>
                                        <button class="btn btn-primary mt-4">Փոփոխել
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
                <h3 class="mt-3">Ինչու ընտրել մեզ բաժնի վերնագիր</h3>
                <div class="table-responsive">
                    <table class="table mb-0">
                        <tbody>
                        @foreach($texts as $key=>$text)
                            @if($key==27)
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
                <h3 class="mt-3">Ինչու ընտրել մեզ</h3>
                <div class="table-responsive">
                    <table class="table mb-0">
                        <thead>
                        <tr>
                            <th scope="col">Բաժնի անվանում</th>
                            <th scope="col">Դիտել</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($why_choose_uses as $why_choose_use)
                            <tr>
                                <td>
                                    <p>{{$why_choose_use->title_am}}</p>
                                </td>
                                <td>
                                    <a href="{{route('why_choose_use_preview',$why_choose_use->id)}}">
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
                        {{ $why_choose_uses->links() }}
                    </ul>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <h3 class="mt-3">Ինչու ընտրել մեզ բաժնի նկար</h3>
                <div class="table-responsive">
                    <table class="table mb-0">
                        <thead>

                        </thead>
                        <tbody>
                        @foreach($pictures as $key=>$picture)
                            @if($key==2)
                            <form action="{{route('picture_update')}}" method="post" enctype="multipart/form-data">
                                @csrf
                                <tr>
                                    <td>
                                        <img src="{{asset('image/pictures/'.$picture->picture)}}" alt="" width="200px" height="200px">
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
                <h3 class="mt-3">ժամանակացույց բաժնի վերնագիր</h3>
                <div class="table-responsive">
                    <table class="table mb-0">
                        <tbody>
                        @foreach($texts as $key=>$text)
                            @if($key==30)
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
                <h3 class="mt-3">ժամանակացույց</h3>
                <a href="{{route('timeline_add')}}"><button class="btn btn-danger">Ավելացնել</button></a>
                <div class="table-responsive">
                    <table class="table mb-0">
                        <thead>
                        <tr>
                            <th scope="col">Անուն</th>
                            <th scope="col">Տարեթիվ</th>
                            <th scope="col">Դիտել</th>

                        </tr>
                        </thead>
                        <tbody>
                        @foreach($timelines as $timeline)
                            <tr>
                                <td>
                                    <p>{{$timeline->title_am}}</p>
                                </td>
                                <td>
                                    <p>{{$timeline->year}}</p>
                                </td>
                                <td>
                                    <a href="{{route('timeline_preview',$timeline->id)}}">
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
                        {{ $timelines->links() }}
                    </ul>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <h3 class="mt-3">Ինչ են ասում մարդիկ բաժնի վերնագիր</h3>
                <div class="table-responsive">
                    <table class="table mb-0">
                        <tbody>
                        @foreach($texts as $key=>$text)
                            @if($key==29)
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
                <h3 class="mt-3">Ինչ են ասում մարդիկ</h3>
                <a href="{{route('wps_add')}}"><button class="btn btn-danger">Ավելացնել</button></a>
                <div class="table-responsive">
                    <table class="table mb-0">
                        <thead>
                        <tr>
                            <th scope="col">Անուն</th>
                            <th scope="col">Քոմենթ</th>
                            <th scope="col">Դիտել</th>

                        </tr>
                        </thead>
                        <tbody>
                        @foreach($wpses as $wps)
                            <tr>
                                <td>
                                    <p>{{$wps->title_am}}</p>
                                </td>
                                <td>
                                    <p>{{$wps->article_am}}</p>
                                </td>
                                <td>
                                    <a href="{{route('wps_preview',$wps->id)}}">
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
                        {{ $wpses->links() }}
                    </ul>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <h3 class="mt-3">Արդյունքներ</h3>
                <div class="table-responsive">
                    <table class="table mb-0">
                        <thead>
                        <tr>
                            <th scope="col">Անգլերեն վերնագիր</th>
                            <th scope="col">Ռուսերեն վերնագիր</th>
                            <th scope="col">Հայերեն վերնագիր</th>
                            <th scope="col">Քանակ</th>
                            <th scope="col">Փոփոխել</th>

                        </tr>
                        </thead>
                        <tbody>
                        @foreach($results as $result)
                            <form action="{{route('result_update')}}" method="post">
                                @csrf
                                <tr>
                                    <td>
                                        <input type="text" value="{{$result->title_en}}" name="title_en" class="form-control">
                                    </td>
                                    <td>
                                        <input type="text" value="{{$result->title_ru}}" name="title_ru" class="form-control">
                                    </td>
                                    <td>
                                        <input type="text" value="{{$result->title_am}}" name="title_am" class="form-control">
                                    </td>
                                    <td>
                                        <input type="number" value="{{$result->count}}" name="count" class="form-control">
                                    </td>
                                    <input type="hidden" value="{{$result->id}}" name="id">
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
                        {{ $results->links() }}
                    </ul>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <h3 class="mt-3">Արդյունքներ բաժնի նկար</h3>
                <div class="table-responsive">
                    <table class="table mb-0">
                        <tbody>
                        @foreach($pictures as $key=>$picture)
                            @if($key==3)
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
                <h3 class="mt-3">Մեր հաճախորդները բաժնի վերնագիր</h3>
                <div class="table-responsive">
                    <table class="table mb-0">
                        <tbody>
                        @foreach($texts as $key=>$text)
                            @if($key==28)
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
                <h3 class="mt-3">Մեր հաճախորդները</h3>
                <a href="{{route('our_clients_add')}}"><button class="btn btn-danger">Ավելացնել հաճախորդ</button></a>
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
                        @foreach($our_clients as $our_client)
                            <form action="{{route('our_clients_update')}}" method="post" enctype="multipart/form-data">
                                @csrf
                                <tr>
                                    <td>
                                        <input type="text" name="link"  class="form-control" value="{{$our_client->link}}">
                                    </td>
                                    <td class="text-center">
                                        <div class="row">
                                            <div class="col-2">
                                                <img class="prev5 mt-2" src="{{asset('image/our_clients/'.$our_client->image)}}"  alt="your image"  height="50" width="50"/><br>
                                            </div>
                                            <div class="col-10">
                                                <div class="input-group">
                                                    <div class="custom-file">
                                                        <input type="file" class="custom-file-input imgInp5"
                                                               id="our_clients-{{$our_client->image}}" name="image">
                                                        <label class="custom-file-label"
                                                               for="our_clients-{{$our_client->image}}">Ընտրել նկար</label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>


                                    </td>
                                    <input type="hidden" value="{{$our_client->id}}" name="id"><td>
                                        <button class="btn btn-primary">Փոփոխել</button>
                                    </td>
                            </form>
                            <td>
                                <a href="{{route('our_clients_destroy',$our_client->id)}}">
                                    <button class="btn btn-danger">
                                        Ջնջել
                                    </button>
                                </a>
                            </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div> <div class="dataTables_paginate paging_simple_numbers"
                            id="basic-datatable_paginate">
                    <ul class="pagination pagination-rounded">
                        {{ $our_clients->links() }}
                    </ul>
                </div>

            </div>

        </div>
    </div>
@endsection