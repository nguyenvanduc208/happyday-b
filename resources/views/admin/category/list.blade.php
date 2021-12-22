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
                        <h4 class="header-title">Danh sách danh mục</h4>
                        <div class="single-table">
                            <div class="table-responsive">
                                <table class="table text-center">
                                    <thead class="text-uppercase bg-primary">
                                        <tr class="text-white">
                                            <th scope="col">ID</th>
                                            <th scope="col">Name</th>
                                                <th scope="col">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($data as $cate)
                                
                                            <tr>
                                                <th scope="row">{{ $cate->id }}</th>
                                                <td>{{ $cate->name }}</td>
                                                @if ($cate->id == 1)
                                                @continue
                                            @endif
                                                <td><a href="{{ route('category-edit', ['id' => $cate->id]) }}"
                                                        class="btn btn-primary">Sửa</a>
                                                    <a href="{{ route('category-remove', ['id' => $cate->id]) }}"
                                                        onclick="return confirm('Bạn có chắc muốn xóa category này')"
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
