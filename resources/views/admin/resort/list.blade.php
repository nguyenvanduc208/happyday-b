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
                        <h4 class="header-title">List Resort</h4>
                        <div class="single-table">
                            <div class="table-responsive">
                                <table class="table text-center">
                                    <thead class="text-uppercase bg-primary">
                                        <tr class="text-white">
                                            <th scope="col">ID</th>
                                            <th scope="col">Name</th>
                                            <th scope="col">price</th>
                                            <th scope="col">Limit</th>
                                            <th scope="col">Size</th>
                                            <th scope="col">Bed</th>
                                            <th scope="col">Category</th>
                                            <th scope="col">Image</th>
                                            <th scope="col">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($resorts as $resort)
                                            <tr>
                                                <th scope="row">{{ $resort->id }}</th>
                                                <td>{{ $resort->name }}</td>
                                                <td>{{ $resort->price }}</td>
                                                <td>{{ $resort->limit }}</td>
                                                <td>{{ $resort->size }}</td>
                                                <td>{{ $resort->bed }}</td>
                                                <td>{{ $resort->category->name }}</td>
                                                <td><img src="{{ asset('storage/' . $resort->image->path) }}" width="70px"
                                                        height="80px"></td>
                                                <td><a href="{{ route('resort-edit', ['id' => $resort->id]) }}"
                                                        class="btn btn-primary">Sửa</a>
                                                    <a href="{{ route('resort-remove', ['id' => $resort->id]) }}"
                                                        onclick="return confirm('Bạn có chắc muốn xóa resort này')"
                                                        class="btn btn-danger delete">Xóa</a>
                                                </td>
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
