{{-- @extends('layout.dashboard')
@section('content') --}}
<x-dashboard-layout>
<x-alert / >
    <div class="container" style="margin-right: 330px; margin-top: -151px;" >
        @if (Session::has('message'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>{{ Session::get('message') }}</strong>
            <button type="button" class="btn-close text-end"
                style="justify-content: space-between; right: 95%;
        top: -4px;"
                data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif
        <div class="">
            <div>
                <div class="form-group pb-2">
                    <h2>قائمة التصنيفات</h2>
                    <form action="{{route('product.index')}}" class="d-flex mb-4">
                        <input type="text" placeholder="إبحث عن تصنيف ..." name="name"
                            style="
                                width: 100%;
                                background-color: #e9e9e9;
                                border: 0;
                                border-radius: 5px;
                                padding: 10px;
                                font-size: 11px;
                                min-height: 40px;
                                -webkit-padding-end: 20px;
                                padding-inline-end: 20px;
                            " />

                        <select name="parent_id" class="form-control me-2" id="">

                            <option value="">جميع التصنيفات </option>
                            @foreach ($categories as $category )
                            <option value="{{$category->id}}">{{$category->name}}</option>
                            @endforeach
                        </select>
                        <button type="submit" class="btn btn-secondary">Filter</button>
                    </form>
                    <div class="search-group" style="position: relative">
                        {{-- <input type="text" placeholder="إبحث عن تصنيف ..." name="name"
                            style="
                                width: 100%;
                                background-color: #e9e9e9;
                                border: 0;
                                border-radius: 5px;
                                padding: 10px;
                                font-size: 11px;
                                min-height: 40px;
                                -webkit-padding-end: 20px;
                                padding-inline-end: 20px;
                            " />--}}
                            {{-- <button
                            style="
                                position: absolute;
                                right: auto;
                                left: 8px;
                                top: 10px;
                                font-size: 13px;
                                border: 0;
                                background: transparent;
                            ">
                            <i class="bi bi-search"></i>
                        </button> --}}
                    </div>
                </div>
            </div>
            <table class="table table-hover table-striped">
                <thead>
                    <tr>
                        <th>الرقم</th>
                        <th>الاسم</th>
                        <th>الصورة</th>
                        <th>التصنيف </th>
                        <th>السعر </th>
                        <th>الكمية</th>
                        <th>تاريخ البداية </th>
                        <th>حدث</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($products as $product )
                    <tr>
                        <th>{{ $loop->index + 1 }}</th>
                        {{-- <td>
                            <img src="" width="50" class="img-fluid" />
                        </td> --}}
                        <td>{{$product->name}}</td>
                        <td class="symbol symbol-45px me-5" style="width: 100px;
                        " data-category="2, 4" data-sort="black sample"
                        style="">
                        <a href="{{ Storage::url($product->image) }}" data-toggle="lightbox"
                            data-title="sample 2 - black">
                            <img class="direct-chat-img" style="border-radius: 50% ; margin-right: -29px;" src="{{ Storage::url($product->image) }}">
                        </a>
                    </td>
                        {{-- <td>{{$product->category->name}}</td> --}}
                        <td>{{$product->price}}</td>
                        <td>{{$product->quantity}}</td>
                        <td>{{$product->status}} </td>
                        <td>{{$product->created_at}}</td>
                        <td>
                            <a href="" class="btn p-1 text-warning"><i class="bi bi-pencil-square"></i></a>
                            <a href="/show" class="btn p-1 text-danger"><i class="bi bi-trash"></i></a>
                            <a href="" class="btn p-1 text-dark"><i class="bi bi-info-circle-fill"></i></a>

                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            {{$products->links()}}
        </div>
    </div>
    </div>
{{-- @endsection --}}
</x-dashboard-layout>

