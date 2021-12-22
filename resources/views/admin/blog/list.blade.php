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
                        <h4 class="header-title">List blog</h4>
                        <div class="single-table">
                            <div class="table-responsive">
                                <table class="table text-center">
                                    <thead class="text-uppercase bg-primary">
                                        <tr class="text-white">
                                            <th scope="col">ID</th>
                                            <th scope="col">Title</th>
                                            <th scope="col">Description</th>
                                            <th scope="col">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($data as $blog)
                                            <tr>
                                                <th scope="row">{{ $blog->id }}</th>
                                                <td>{{ $blog->title }}</td>
                                                <td>{{ $blog->desc }}</td>
                                                <td><a href="{{ route('blog-edit', ['id' => $blog->id]) }}"
                                                        class="btn btn-primary">Sửa</a>
                                                    <a href="{{ route('blog-remove', ['id' => $blog->id]) }}"
                                                        onclick="return confirm('Bạn có chắc muốn xóa blog này')"
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
