{{-- @extends('layout.dashboard')
@section('content') --}}
<x-dashboard-layout>
<div class="col-md-8 py-4" style="margin-right:50px">
    <h3 class="pb-4">إضافه تصنيف</h3>
    {{-- <h3 class="pb-4">{{$title}}</h3> --}}
    <form action="{{route('category.store')}}" class="row" method="POST">
        @csrf
        @if ($errors->any())
        <div class="alert alert-danger alert-dismissible">
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>

            <h5><i class="icon fas fa-ban"></i> Errors!</h5>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
        <div class="form-floating mb-3 p-2 col-md-6">
            <input
                type="text"
                class="form-control"
                id="name"
                name="name"
                placeholder="اسم التصنيف"
            />
            <label for="title">اسم التصنيف </label>
        </div>
        <div class="form-floating mb-3 p-2 col-md-6">
            <input
                type="description"
                class="form-control"
                id="description"
                name="description"
                placeholder="الوصف"
            />
            <label for="auther"> الوصف</label>
        </div>
        <div class="form-floating mb-3 p-2 col-md-12">
            <select
                class="form-control"
                id="description"
                name="parent_id"
            />
            <option value="">No parent</option>
            @foreach ($parents as $parent )
            <option value="{{$parent->id}}">{{$parent->name}} </option>

            @endforeach
        </select>
            <label for="auther"> parent</label>
        </div>
        <div class="row">
            <label for="status">الحالة</label>
        <div class=" mb-3 p-2 col-md-6">
            <label for="active" style="margin-right: 8px ; margin-bottom:10px ;"> فعال</label>
            <input
                type="radio"
                id="active"
                name="status"
                value="active"
            />
        </div>
        <div class=" mb-3 p-2 col-md-6">
            <label for="status" style="margin-right: 8px ; margin-bottom:10px ;"> غير فعال</label>
            <input
                type="radio"
                id="status"
                name="status"
                value="no-active"
            />
        </div>

    </div>
        <div class="mb-3 col-md-12">
            <label for="img" class="form-label">الصورة </label>
            <input
                class="form-control"
                type="file"
                id="img"
                name="image"
            />
        </div>


        <div class="col-lg-12 text-center my-5">
            <input
                type="submit"
                value="إضافة التصنيف"
                class="btn rounded-pill w-25 blue5-3Dbutn hover-blue2 xl-butn fw-bold text-light"
            />
        </div>
    </form>
</div>
</x-dashboard-layout>
{{-- @endsection --}}
