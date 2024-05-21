@extends('layouts.admin')
@section('title', $viewData['title'])
@section('content')
<link rel="stylesheet" href="{{asset('datban.css')}}">
		<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
				<div class="container-fluid">
					<div class="navbar-header">
						
						<a class="navbar-brand" href="trangtong.html"><span>Quản lý </span>quán ăn </a>
						<ul class="user-menu">
							<li class="dropdown pull-right">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown"><svg class="glyph stroked male-user"><use xlink:href="#stroked-male-user"></use></svg> Admin <span class="caret"></span></a>
								<ul class="dropdown-menu" role="menu">
									<li><a href="#"><svg class="glyph stroked male-user"><use xlink:href="#stroked-male-user"></use></svg> Hồ sơ</a></li>
									<li><a href="#"><svg class="glyph stroked cancel"><use xlink:href="#stroked-cancel"></use></svg> Đăng xuất</a></li>
								</ul>
							</li>
						</ul>
					</div>
									
				</div><!-- /.container-fluid -->
			</nav>
		
			
    <div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">			
	<form id = "form_datban" class = "bg-light p-4 my-3" action="" method="post">
		
		<div class="row">
			
		
		<header>
			<h1>Đặt bàn online</h1>
		  </header>
		<div class="row">
			
			<div class="col-md-12">
					<div class="panel panel-default">
							<div class="panel-body" >
								<form action="{{ route('admin.datban.create') }}" method="post" enctype="multipart/form-data">
									@csrf
								<div class="form-group">
									<label>Mã đặt bàn </label>
									<input required name="Madatban" type="number" value="{{ old('Madatban') }}" min="0" class="form-control">
								  </div>
								<div class="form-group">
									<label >Tên khách hàng</label>
									<input required name="Tenkhachhang" value="{{ old('Tenkhachhang') }}" class="form-control" placeholder="">
                               
								  </div>
								<div class="form-group">
									<label >Số điện thoại</label>
									<input required name="Sodienthoai" type="number" value="{{ old('Sodienthoai') }}" min="0" class="form-control">
								 
								  </div>
								  <div class="form-group">
									<label >Số lượng bàn</label>
									<input required name="Soluongban" type="number" value="{{ old('Soluongban') }}" min="0" class="form-control">
								 
								  </div>
								  <div class="form-group">
									<label >Số lượng khách</label>
									<input required name="Soluongkhach" type="number" value="{{ old('Soluongkhach') }}" min="0" class="form-control">
								 
								  </div>
								  <div class="form-group">
									<label >Ngày đặt</label>
									<input required name="Ngaydatban" type="date" value="{{ old('Ngaydatban') }}" min="0" class="form-control">
								 
								  </div>
								  <div class="form-group">
									<label>Thời gian</label>
									<input required name="Giodatban" type="time" value="{{ old('Giodatban') }}" min="0" class="form-control">
								 
								  </div>
								  <div class="form-group">
									<label >Ghi chú</label>
									<textarea required name="Ghichu" class="form-control" rows="3">{{ old('Ghichu') }}</textarea>
								</div>
								  <button type="submit">Đặt bàn</button>
							</div>
							
						</div>
			</div>
		</div><!--/.row-->
	</div>	<!--/.main-->



@endsection