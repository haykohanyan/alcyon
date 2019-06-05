@extends('admin/layouts/header-footer')
@section('content')
    <div class="container-fluid text-center">



        <form action="{{route('cat_store')}}" method="post" class="text-center">
            <h3 class="mt-5" style="color:#727CF5">Ավելացնել կատեգորիա</h3>
            @csrf
            <div class="row mt-5">
                <div class="col-4">
                    <label for="name_am">Կատեգորիայի հայերեն անվանում</label>
                    <input type="text" name="name_am" id="name_am" class="form-control">
                </div>
                <div class="col-4">
                    <label for="name_ru">Կատեգորիայի ռուսերեն անվանում</label>
                    <input type="text" name="name_ru" id="name_ru" class="form-control">
                </div>
                <div class="col-4">
                    <label for="name_en">Կատեգորիայի անգլերեն անվանում</label>
                    <input type="text" name="name_en" id="name_en" class="form-control">
                </div>

            </div>
            <button class="btn btn-danger mt-1" type="submit" >Ավելացնել</button>
        </form>

    </div>
@endsection