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
                        <h4 class="header-title">List food</h4>
                        <div class="single-table">
                            <div class="table-responsive">
                                <table class="table text-center">
                                    <thead class="text-uppercase bg-primary">
                                        <tr class="text-white">
                                            <th scope="col">ID</th>
                                            <th scope="col">Title</th>
                                            <th scope="col">Price</th>
                                            <th scope="col">Category</th>
                                            <th scope="col">Image</th>
                                            <th scope="col">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($data as $food)
                                            <tr>
                                                <th scope="row">{{ $food->id }}</th>
                                                <td>{{ $food->title }}</td>
                                                <td>{{ $food->price }}</td>
                                                <td>{{ $food->category->name }}</td>
                                                <td><img src="{{ asset('storage/' . $food->image) }}" width="70px"
                                                    height="80px"></td>
                                                <td><a href="{{ route('food-edit', ['id' => $food->id]) }}"
                                                        class="btn btn-primary">Sửa</a>
                                                    <a href="{{ route('food-remove', ['id' => $food->id]) }}"
                                                        onclick="return confirm('Bạn có chắc muốn xóa food này')"
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
