{{-- @extends('layout.dashboard')
@section('content') --}}
<x-dashboard-layout>
<div class="col-md-8 py-4" style="margin-right:50px">
    <h3 class="pb-4">إضافه منتج </h3>
    {{-- <h3 class="pb-4">{{$title}}</h3> --}}
    <form action="{{route('product.store')}}" class="row" method="POST">
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
            <label for="title">اسم المنتج </label>
        </div>
        <div class="form-floating mb-3 p-2 col-md-6">
            <input
                type="text"
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
                id="category_id "
                name="category_id "
            />
            {{-- <option value="">No parent</option> --}}
            @foreach ($categories as $category )
            <option value="{{$category->id}}">{{$category->name}} </option>

            @endforeach
        </select>
            <label for="auther"> المنتج</label>
        </div>
        <div class="form-floating mb-3 p-2 col-md-12">
            <input
                type="number"
                class="form-control"
                id="price"
                name="price"
                placeholder="السعر"
            />
            <label for="auther"> السعر</label>
        </div>
        <div class="form-floating mb-3 p-2 col-md-6">
            <input
                type="number"
                class="form-control"
                id="sale_price"
                name="sale_price"
                placeholder="الخصم على المنتج"
            />
            <label for="auther"> الخصم على المنتج </label>
        </div>
        <div class="form-floating mb-3 p-2 col-md-6">
            <input
                type="number"
                class="form-control"
                id="quantity"
                name="quantity"
                placeholder="الكمية"
            />
            <label for="quantity"> الكمية</label>
        </div>
        <div class="form-floating mb-3 p-2 col-md-12">
            <input
                type="text"
                class="tags form-control "
                id="tags"
                name="tags"
            />
            <label for="tags"> العلامة التجارية </label>
        </div>
        <div class="row">
            <label for="status">الحالة</label>
        <div class=" mb-3 p-2 col-md-3">
            <label for="active" style="margin-right: 8px ; margin-bottom:10px ;"> متاح للبيع </label>
            <input
                type="radio"
                id="active"
                name="status"
                value="in-stock"
            />
        </div>
        <div class=" mb-3 p-2 col-md-3">
            <label for="status" style="margin-right: 8px ; margin-bottom:10px ;">  انتهت الكمية المتوفرة</label>
            <input
                type="radio"
                id="status"
                name="status"
                value="sold-out"
            />
        </div>
        <div class=" mb-3 p-2 col-md-6">
            <label for="draft" style="margin-right: 8px ; margin-bottom:10px ;"> غير منشور</label>
            <input
                type="radio"
                id="draft"
                name="status"
                value="draft"
            />
        </div>

    </div>
        <div class="mb-3 col-md-12">
            <label for="img" class="form-label">الصورة </label>
            <div class="mb-2">
                <img src="{{$product->image_url}}" height="200" alt="">
            </div>
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
{{--cssيعني يستخدم ال فقط في هذه الصفحة  --}}
@push('css')
<link rel="stylesheet" href="{{asset('assets/js/tagify/tagify.css')}}" />
@endpush

@push('js')
<script src="{{asset('assets/js/tagify/tagify.min.js')}}"></script>
<script>
    // var inputElm = document.querySelector('.tags'),
    // tagify = new Tagify (inputElm);
    var input = document.querySelector('#tags')
var tagify = new Tagify(input, {
  dropdown: {
    enabled: 0
  },
   whitelist: ["a", "aa", "b", "bb", "ccc"]
})

tagify.on('change', console.log)

tagify.addTags(["a", "b"])
</script>
@endpush
