@extends('admin/layouts/header-footer')
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">


                <form action="{{route('why_choose_use_update')}}" method="post" enctype="multipart/form-data" class="text-center">
                    @csrf
                    <h4 class="my-3">Փոփոխել</h4>
                    <div class="row">
                        <div class="col-md-4">
                            <label for="title_en">Անգլերեն վերնագիր</label>
                            <textarea name="title_en" id="title_en" cols="20" rows="3"
                                      class="form-control">{{$why_choose_use->title_en}}</textarea>
                        </div>
                        <div class="col-md-4"><label for="title_ru">Ռուսերեն վերնագիր</label>
                            <textarea name="title_ru" id="title_ru" cols="20" rows="3"
                                      class="form-control">{{$why_choose_use->title_ru}}</textarea></div>
                        <div class="col-md-4"><label for="title_am">Հայերեն վերնագիր</label>
                            <textarea name="title_am" id="title_am" cols="20" rows="3"
                                      class="form-control">{{$why_choose_use->title_am}}</textarea></div>
                    </div>

                    <input type="hidden" value="{{$why_choose_use->id}}" name="id">
                    <button class="btn btn-danger mt-1" type="submit" >Փոփոխել</button>
                </form>
                <div class="row">
                    <div class="col-12">
                        <h3 class="mt-3">Մեր տվյալները</h3>
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
                                @foreach($wcus as $wcu)
                                    <form action="{{route('wcu_update')}}" method="post">
                                        @csrf
                                        <tr>
                                            <td>
                                                <input type="text" value="{{$wcu->title_en}}" name="title_en" class="form-control">
                                            </td>
                                            <td>
                                                <input type="text" value="{{$wcu->title_ru}}" name="title_ru" class="form-control">
                                            </td>
                                            <td>
                                                <input type="text" value="{{$wcu->title_am}}" name="title_am" class="form-control">
                                            </td>
                                            <td>
                                                <input type="number" value="{{$wcu->count}}" name="count" class="form-control">
                                            </td>
                                            <input type="hidden" value="{{$wcu->id}}" name="id">
                                            <td>
                                                <button class="btn btn-primary" type="submit">Փոփոխել
                                                </button>
                                            </td>
                                        </tr>
                                    </form>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection