@extends('layouts.admin')
@section('title', $viewData['title'])
@section('content')
<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">			
    <div class="row">
        <ol class="breadcrumb">
            <li><a href="#"><svg class="glyph stroked home"><use xlink:href="#stroked-home"></use></svg></a></li>
            <li><a href="quanlymonan.html">Quản lý món ăn </a></li>
            <li class="active">Thêm món ăn</li>
        </ol>
    </div><!--/.row-->
    
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Thêm món ăn</h1>
        </div>
    </div><!--/.row-->
    <div class="row">
            <div class="col-lg-12">
                <div class="panel panel-default">
                    <div class="panel-body">
                        <div class="col-md-6">
                            <form action="{{ route('admin.menu.update', ['id' => $viewData['menu']->getid()]) }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                @method('PUT')
                                <div class="form-group">
                                    <label>Mã món ăn</label>
                                    <input required name="Mamonan" type="number" value="{{ $viewData['menu']->getMamonan() }}" min="0" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>Tên món ăn</label>
                                    <input required name="Tenmonan" value="{{ $viewData['menu']->getTenmonan() }}" class="form-control" placeholder="">
                                </div>
                                <div class="form-group">
                                    <label>Giá món ăn</label>
                                    <input required name="Giamonan" type="number" value="{{ $viewData['menu']->getGiamonan() }}" min="0" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label class="col-lg-2 col-md-6 col-sm-12 col-form-label">Ảnh món ăn:</label>
                                    <div class="col-lg-10 col-md-6 col-sm-12">
                                        <input class="form-control" type="file" name="Anhmonan" value="{{$viewData['menu']->getAnhmonan()}}">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="Loaimonan">Loại món ăn</label>
                                    <select name="Loaimonan" class="form-control">
                                        <option value="Lẩu" {{ $viewData['menu']->getLoaimonan() === 'Lẩu' ? 'selected' : '' }}>Lẩu</option>
                                        <option value="Xào" {{ $viewData['menu']->getLoaimonan() === 'Xào' ? 'selected' : '' }}>Xào</option>
                                        <option value="Chiên" {{ $viewData['menu']->getLoaimonan() === 'Chiên' ? 'selected' : '' }}>Chiên</option>
                                        <option value="Hấp" {{ $viewData['menu']->getLoaimonan() === 'Hấp' ? 'selected' : '' }}>Hấp</option>
                                        <option value="Nước uống" {{ $viewData['menu']->getLoaimonan() === 'Nước uống' ? 'selected' : '' }}>Nước uống</option>
                                        
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>Mô tả món ăn</label>
                                    <textarea required name="Mota" class="form-control" rows="3">{{ $viewData['menu']->getMota() }}</textarea>
                                </div>
                               <a href="{{route('admin.menu.index')}}">
                                <button type="submit" class="btn btn-success">Lưu món ăn</button>
                            </a> 
                                <button type="reset" class="btn btn-default">Hủy</button>
                            </form>
                    </div>
                </div>
            </div><!-- /.col-->
        </div><!-- /.row -->
    
</div>	<!--/.main-->	

@endsection