@extends('admin.layout.main')
@section('title')
    Thêm mới blog
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
                                <label for="">Title</label>
                                <input class="form-control" type="text" value="{{ old('title') }}" name="title">
                                @error('title')
                                <div class="alert alert-danger" role="alert">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="">Chi tiết</label>
                                <textarea name="desc" id="" cols="30" rows="10" class="form-control">
                                    {{ old('desc') }}
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