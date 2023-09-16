@extends('layout.dashboard')
@section('content')
    <div class="container" style="margin-right: 330px; margin-top: -151px;" >
        <div class="">
            <div>
                <div class="form-group pb-2">
                    <h2>قائمة التصنيفات</h2>
                    <form action="{{route('category.index')}}" class="d-flex mb-4">
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
                            @foreach ($parents as $parent )
                            <option value="{{$parent->id}}">{{$parent->name}}</option>
                            @endforeach
                        </select>
                        <button type="submit" class="btn btn-secondary">Filter</button>
                    </form>
                    {{-- <div class="search-group" style="position: relative">
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
                            " /><button
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
                        </button>
                    </div> --}}
                </div>
            </div>
            <table class="table table-hover table-striped">
                <thead>
                    <tr>
                        <th>الرقم</th>
                        <th>الاسم</th>
                        <th>parent id </th>
                        <th>الحالة</th>
                        <th>تاريخ البداية </th>
                        <th>حدث</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($categories as $category )
                    <tr>
                        <th>{{ $loop->index + 1 }}</th>
                        {{-- <td>
                            <img src="" width="50" class="img-fluid" />
                        </td> --}}
                        <td>{{$category->name}}</td>
                        <td>{{$category->parent_id}}</td>
                        <td>{{$category->status}}</td>
                        <td>{{$category->created_at}}</td>
                        <td>
                            <a href="" class="btn p-1 text-warning"><i class="bi bi-pencil-square"></i></a>
                            <a href="" class="btn p-1 text-dark"><i class="bi bi-info-circle-fill"></i></a>
                            <a href="/show" class="btn p-1 text-danger"><i class="bi bi-trash"></i></a>
                        </td>
                    </tr>
                    @endforeach

                </tbody>
            </table>
        </div>
    </div>
    </div>
@endsection
