@extends('admin/layouts/header-footer')
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <h3 class="mt-3">Ծառայություններ բաժնի գլխավոր նկար</h3>
                <div class="table-responsive">
                    <table class="table mb-0">
                        <tbody>
                        @foreach($pictures as $key=>$picture)
                            @if($key==4)
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
                <h3 class="mt-3">Ծառայություններ</h3>
                <a href="{{route('services_add')}}"><button class="btn btn-danger">Ավելացնել</button></a>
                <div class="table-responsive">
                    <table class="table mb-0">
                        <thead>
                        <tr>
                            <th scope="col">Վերնագիր</th>
                            <th scope="col">Տեքստ</th>
                            <th scope="col">Դիտել</th>

                        </tr>
                        </thead>
                        <tbody>
                        @foreach($services as $service)
                            <tr>
                                <td>
                                    <p>{{$service->title_am}}</p>
                                </td>
                                <td>
                                    <p>{{$service->article_am}}</p>
                                </td>
                                <td>
                                    <a href="{{route('services_preview',$service->id)}}">
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
                        {{ $services->links() }}
                    </ul>
                </div>
            </div>
        </div>
    </div>

@endsection