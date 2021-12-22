@extends('admin.layout.main')
@section('title')
    Thêm mới thực đơn
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
                                <label for="">Tên thực đơn</label>
                                <input class="form-control" type="text" value="{{ old('title') }}" name="title">
                                @error('title')
                                <div class="alert alert-danger" role="alert">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="">Giá</label>
                                <input class="form-control" value="{{ old('price') }}" type="text" name="price">
                                @error('price')
                                <div class="alert alert-danger" role="alert">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="">Danh mục</label>
                                <select name="category_id" id="" class="form-control">
                                    @foreach ($category as $item)
                                        <option {{ $item->id == old('category_id' , $item->id == 1) ? ' selected' : ''}} value="{{$item->id}}">{{$item->name}}</option>
                                    @endforeach
                                </select>
                                @error('category_id')
                                <div class="alert alert-danger" role="alert">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">Upload</span>
                                </div>
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" name="upFile" id="inputGroupFile01">
                                    <label class="custom-file-label" for="inputGroupFile01">Hình ảnh</label>
                                </div>
                                @error('upFile')
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