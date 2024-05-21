@extends('layouts.admin')
@section('title', $viewData['title'])  
@section('content')




	
<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">			
    <div class="row">
        <ol class="breadcrumb">
            <li><a href="#"><svg class="glyph stroked home"><use xlink:href="#stroked-home"></use></svg></a></li>
            <li class="active">Danh sách món ăn </li>
        </ol>
    </div><!--/.row-->
    
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Danh sách món ăn </h1>
        </div>
        </div><!--/.row-->
    <div id="toolbar" class="btn-group">
        <a href="add_themmonan.html" class="btn btn-success">
            <i class="glyphicon glyphicon-plus"></i> Thêm món ăn
        </a>
    </div>
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-body">
                    <table 
                        data-toolbar="#toolbar"
                        data-toggle="table">

                        <thead>
                        <tr>
                            <th data-field="id" data-sortable="true">STT</th> 
                            <th>Ảnh món ăn</th>
                            <th data-field="name"  data-sortable="true">Tên món ăn</th>
                            <th data-field="price" data-sortable="true">Giá</th>
                           
                            <th>Đơn vị tính </th>
                            <th>Loại món ăn</th>
                            <th>Mô tả</th>
                            <th>Chỉnh sửa hoặc xóa</th>
                        </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td style="text-align: center"><img width="130" height="150" src="COM-CHIEN-TRUNG-1.jpg" /></td>
                                <td>Cơm chiên trứng</td>
                                
                                <td>25.000</td>
                                
                                <td>Đĩa</td>
                                <td>Chiên</td>
                                <td>.....</td>
                                <td class="form-group">
                                    <a href="edit_product.html" class="btn btn-primary"><i class="glyphicon glyphicon-pencil"></i></a>
                                    <a href="#" class="btn btn-danger"><i class="glyphicon glyphicon-remove"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td style="text-align: center"><img width="130" height="150" src="2cachlammixaotrung-1200x676.jpg" /></td>
                                <td>Mì xào trứng</td>
                                <td>25.000</td>
                                
                                <td>Đĩa</td>
                                <td>Chiên</td>
                                <td>.....</td>
                                <td class="form-group">
                                    <a href="edit_product.html" class="btn btn-primary"><i class="glyphicon glyphicon-pencil"></i></a>
                                    <a href="#" class="btn btn-danger"><i class="glyphicon glyphicon-remove"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td style="text-align: center"><img width="130" height="150" src="cach-nau-lau-ca-bop-thit-beo-mem-ngot-ma-khong-tanh-202202150950507162.jpg" /></td>
                                <td>Lẩu cá</td>
                                <td>200.000</td>
                                
                                <td>Phần</td>
                                <td>Lẩu</td>
                                <td>....</td>
                                <td class="form-group">
                                    <a href="edit_product.html" class="btn btn-primary"><i class="glyphicon glyphicon-pencil"></i></a>
                                    <a href="#" class="btn btn-danger"><i class="glyphicon glyphicon-remove"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td>4</td>
                                <td style="text-align: center"><img width="130" height="150" src="base64-1623171951116882580064.webp" /></td>
                                <td>Lẩu riêu cua</td>
                                <td>200.000</td>
                                
                                <td>Phần</td>
                                <td>Lẩu</td>
                                <td>...</td>
                                <td class="form-group">
                                    <a href="edit_product.html" class="btn btn-primary"><i class="glyphicon glyphicon-pencil"></i></a>
                                    <a href="#" class="btn btn-danger"><i class="glyphicon glyphicon-remove"></i></a>
                                </td>
                            </tr>
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
    </div><!--/.row-->	
</div>	<!--/.main-->







@endsection