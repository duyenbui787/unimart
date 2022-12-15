@extends('layouts.admin')

@section('content')
<div id="content" class="container-fluid">
    <div class="card">
        <div class="card-header font-weight-bold">
            Thêm bài viết
        </div>
        <div class="card-body">
                <!-- enctype="multipart/form-data" accept-charset="UTF-8 -->
            <form action="{{url('admin/post/store')}}" method="POST" enctype="multipart/form-data">
                @csrf

                <div class="form-group">
                    <label for="name">Tiêu đề bài viết</label>
                    <input class="form-control" type="text" name="title" id="name">
                    @error('title')
                    <small class="text-danger">{{$message}}</small>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="content">Nội dung bài viết</label>
                    <textarea name="desc" class="form-control" id="desc" cols="30" rows="5"></textarea>
                    @error('desc')
                    <small class="text-danger">{{$message}}</small>
                    @enderror
                </div>
                <div class="form-group">
                    <input type="file" name="file" class="form-control-file">
                </div>

                <div class="form-group">
                    <label for="">Danh mục</label>
                    <select class="form-control" id="">
                        <option>Chọn danh mục</option>
                        <option>Danh mục 1</option>
                        <option>Danh mục 2</option>
                        <option>Danh mục 3</option>
                        <option>Danh mục 4</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="">Trạng thái</label>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked>
                        <label class="form-check-label" for="exampleRadios1">
                            Chờ duyệt
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" value="option2">
                        <label class="form-check-label" for="exampleRadios2">
                            Công khai
                        </label>
                    </div>
                </div>



                <button type="submit" class="btn btn-primary">Thêm mới</button>

            </form>
        </div>
    </div>
</div>
@endsection