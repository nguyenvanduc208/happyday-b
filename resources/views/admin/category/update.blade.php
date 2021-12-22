@extends('admin.layout.main')
@section('title')
    Sửa danh mục
@endsection
@section('content')
<div class="main-content-inner">
    <div class="row">
        <div class="col-lg-12 col-ml-12">
            <div class="row">
                <!-- Textual inputs start -->
                <div class="col-12 mt-5">
                    <form action="" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="card">
                        <div class="card-body">
                            <div class="form-group">
                                <label for="">Tên danh mục</label>
                                <input class="form-control" value='{{ old('name', $cate->name) }}' type="text" name="name">
                                @error('name')
                                <div class="alert alert-danger" role="alert">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                            <button type="submit" class="btn btn-primary mt-4 pr-4 pl-4">Submit</button>

                        </div>
                    </div>
                    </form>
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection