@extends('layouts.admin')
@section('title', $viewData['title'])
@section('content')
<link rel="stylesheet" href="{{asset('datban.css')}}">
<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
    <div class="container-fluid">
        <div class="navbar-header">   
            <a class="navbar-brand" href=""><span>Quản lý </span>quán ăn </a>
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
<form id = "form_banan" class = "bg-light p-4 my-3" action="" method="post">

<div class="row">
    <header>
        <h1>Thêm bàn ăn</h1>
      </header>
    <div class="row">
        
        <div class="col-md-12">
                <div class="panel panel-default">
                        <div class="panel-body" >
                            <form action="{{ route('admin.banan.create') }}" method="post" enctype="multipart/form-data">
                                @csrf
                            <div class="form-group">
                                <label>Mã bàn ăn </label>
                                <input required name="Mabanan" value="{{ old('Mabanan') }}" class="form-control" placeholder="">
                              </div>
                            <div class="form-group">
                                <label >Tên bàn ăn </label>
                                <input required name="Tenbanan" value="{{ old('Tenbanan') }}" class="form-control" placeholder="">
                              </div>
                            </div>
                              <button type="submit">Thêm bàn ăn</button>
                        </div>
                        
                    </div>
        </div>
    </div><!--/.row-->
</div>	<!--/.main-->




@endsection