@extends('layouts.admin')
@section('title', $viewData['title'])
@section('content')
<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">			
    <div class="row">

    </div>
    
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Danh sách món ăn </h1>
        </div>
        </div><!--/.row-->
    <div id="toolbar" class="btn-group">
        <a href="{{route('admin.addmonan.index')}}" class="btn btn-success">
            <i class="glyphicon glyphicon-plus"></i> Thêm món ăn
        </a>
    </div>
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-body">
                  
<!--Bảng -->                  
                    <table 
                        data-toolbar="#toolbar"
                        data-toggle="table">
                        <thead>
                        <tr>
                            <th data-field="id" data-sortable="true">STT</th> 
                            <th>Ảnh món ăn</th>
                            <th data-field="name"  data-sortable="true">Tên món ăn</th>
                            <th data-field="price" data-sortable="true">Giá</th>
                            <th>Loại món ăn</th>
                            <th>Mô tả</th>
                            <th>Chỉnh sửa</th>
                            <th>Xóa</th>
                        </tr>
                        </thead>
                        <tbody>
                            @foreach ($viewData['menus'] as $menu)                    
<tr>   
    <td>{{ $menu->getMamonan() }}</td>
    <td><img style="width:200px;height:200px; object-fit:cover" src="{{ asset('/storage/' . $menu->getAnhmonan()) }}"
        class="card-img-top">
    </td>
<td>{{ $menu->getTenmonan() }}</td>
<td>{{ $menu->getGiamonan() }}</td>
<td>{{ $menu->getLoaimonan() }}</td>
<td>{{ $menu->getMota() }}</td>
<td>
    <a
    href="{{route('admin.editmenu.index', ['id'=> $menu->getid()])}}">
    <button class="btn btn-primary">
        <i class="bi-pencil"></i>
        </button>    </a> </td>
<td>
    <form action="{{ route('admin.menu.delete', $menu->getid()) }}"
        method="POST">
        @csrf
        @method('DELETE')
        <button class="btn btn-danger">
        <i class="bi-trash"></i>
        </button>
        
    </form>
</td>

</tr>
@endforeach
                            </tbody>
                    </table>
                </div>
                <div class="panel-footer">
                    <nav aria-label="Page navigation example">
                        <ul class="pagination">
                            <li class="page-item"><a class="page-link" href="#">&laquo;</a></li>
                            <li class="page-item"><a class="page-link" href="#">1</a></li>
                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                            <li class="page-item"><a class="page-link" href="#">&raquo;</a></li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</div>	
@endsection