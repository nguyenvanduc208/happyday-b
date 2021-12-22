@extends('admin.layout.main')
@section('title')
    Sửa resort
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
                                <label for="">Tên resort</label>
                                <input class="form-control" value='{{ old('name', $resort->name) }}' type="text" name="name">
                                @error('name')
                                <div class="alert alert-danger" role="alert">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="">Giá</label>
                                <input class="form-control" value='{{ old('price', $resort->price) }}' type="text" name="price">
                                @error('price')
                                <div class="alert alert-danger" role="alert">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="">Giới hạn người ở</label>
                                <input class="form-control" value='{{ old('limit', $resort->limit) }}' type="text" name="limit">
                                @error('price')
                                <div class="alert alert-danger" role="alert">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="">Size</label>
                                <input class="form-control" value='{{ old('size', $resort->size) }}' type="text" name="size">
                                @error('size')
                                <div class="alert alert-danger" role="alert">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="">Số lượng phòng ngủ</label>
                                <input class="form-control" value='{{ old('bed', $resort->bed) }}' type="text" name="bed">
                                @error('bed')
                                <div class="alert alert-danger" role="alert">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="">Danh mục</label>
                                <select name="category_id" id="" class="form-control">
                                    @foreach ($category as $item)
                                        <option {{ $item->id == old('category_id', $resort->category_id) ? ' selected' : '' }} value="{{$item->id}}">{{$item->name}}</option>
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
                            <div class="form-group">
                                <label for="">Chi tiết resort</label>
                                <textarea name="desc" id="" cols="30" rows="10" class="form-control">
                                    {{ old('desc', $resort->desc) }}
                                </textarea>
                                @error('desc')
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