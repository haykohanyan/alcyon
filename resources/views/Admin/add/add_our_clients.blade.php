@extends('admin/layouts/header-footer')
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">

                <form action="{{route('our_clients_store')}}" method="post" enctype="multipart/form-data" class="text-center">
                    @csrf
                    <h4 class="mt-3">Ավելացնել հաճախորդ</h4>
                    <div class="row offset-2">
                        <div class="col-md-8">
                            <label for="link">Հղում</label>
                            <input name="link" id="link" class="form-control">
                        </div>
                    </div>
                    <div class="row offset-2 mt-2">
                        <div class="col-md-4">
                            <label for="img11">Նկար</label>
                            <div class="input-group">
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" id="img11"
                                           name="image">
                                    <label class="custom-file-label" for="img11">Ընտրել նկար</label>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <img id="view11" src=""  alt="your image" class="hide"  style=" max-width:180px;"/>
                        </div>
                    </div>
                    <div class="row offset-2 mt-3">
                        <div class="col-2"></div>
                        <div class="col-4">
                            <img id="prev4" src=""  alt="your image" class="hide" style=" max-width:200px;margin: 0 auto"/><br>
                        </div>
                        <div class="col-2"></div>
                    </div>
                    <button class="btn btn-danger mt-3" type="submit">Ավելացնել</button>
                </form>

            </div>
        </div>
    </div>
@endsection