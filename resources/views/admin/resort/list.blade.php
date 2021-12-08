@extends('admin.layout.main')
@section('title')
    Danh sách
@endsection
@section('content')
    <div class="main-content-inner">
        <div class="row">
            <div class="col-lg-12 mt-5">
                <div class="card">
                    <div class="card-body">
                        <h4 class="header-title">Thead Primary</h4>
                        <div class="single-table">
                            <div class="table-responsive">
                                <table class="table text-center">
                                    <thead class="text-uppercase bg-primary">
                                        <tr class="text-white">
                                            <th scope="col">ID</th>
                                            <th scope="col">Name</th>
                                            <th scope="col">price</th>
                                            <th scope="col">limit</th>
                                            <th scope="col">size</th>
                                            <th scope="col">bed</th>
                                            <th scope="col">category</th>
                                            <th scope="col">image</th>
                                            <th scope="col">action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($resorts as $resort)
                                        <tr>
                                            <th scope="row">{{ $resort->id }}</th>
                                            <td>{{$resort->name}}</td>
                                            <td>{{$resort->price}}</td>
                                            <td>{{$resort->limit}}</td>
                                            <td>{{$resort->size}}</td>
                                            <td>{{$resort->bed}}</td>
                                            <td>{{$resort->category_id}}</td>
                                            <td><img src="{{ asset('storage/' . $resort->image->path) }}" width="70px" height="80px" ></td>
                                            <td><a href="{{route("edit.resort", ["id" => $resort->id])}}" class="btn btn-primary">sửa</a>
                                                <button data-route="{{route("remove.resort", ["id" => $resort->id])}}" class="btn btn-danger delete" data-bs-toggle="modal" data-bs-target="#exampleModal">xóa</button></td>
                                        </tr>
                                    @endforeach
                
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection
