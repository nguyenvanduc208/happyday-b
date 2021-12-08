@extends('admin.layout.main')
@section('title')
    Thêm mới
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
                                <input class="form-control" type="text" name="name">
                            </div>
                            <div class="form-group">
                                <label for="">Giá</label>
                                <input class="form-control" type="text" name="price">
                            </div>
                            <div class="form-group">
                                <label for="">Giới hạn người ở</label>
                                <input class="form-control" type="text" name="limit">
                            </div>
                            <div class="form-group">
                                <label for="">Size</label>
                                <input class="form-control" type="text" name="size">
                            </div>
                            <div class="form-group">
                                <label for="">Số lượng phòng ngủ</label>
                                <input class="form-control" type="text" name="bed">
                            </div>
                            <div class="form-group">
                                <label for="">Danh mục</label>
                                <select name="category_id" id="" class="form-control">
                                    @foreach ($category as $item)
                                        <option value="{{$item->id}}">{{$item->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">Upload</span>
                                </div>
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" name="upFile" id="inputGroupFile01">
                                    <label class="custom-file-label" for="inputGroupFile01">Hình ảnh</label>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="">Chi tiết resort</label>
                                <textarea name="desc" id="" cols="30" rows="10" class="form-control">
                    
                                </textarea>
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