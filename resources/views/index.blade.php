@extends('layouts.admin')

@section('content')
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>@yield('title',"Quan an ")</title>

<link href="{{asset('/css/bootstrap.min.css')}}" rel="stylesheet">
<link href="{{asset('/css/datepicker3.css')}}" rel="stylesheet">
<link href="{{asset('/css/bootstrap-table.css')}}" rel="stylesheet">
<link href="{{asset('/css/styles.css')}}" rel="stylesheet">
<link rel="stylesheet" href="{{asset('')}}">
<!--Icons-->
<script src="{{asset('/js/lumino.glyphs.js')}}"></script>


</head>

<body>
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#sidebar-collapse">
                        <span class="sr-only">web quan an </span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="trangtong.html"><span>Quản lý</span> quán ăn</a>
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
    
        <div id="sidebar-collapse" class="col-sm-3 col-lg-2 sidebar">
            <ul class="nav menu">
                <li class="active"><a href="Quanlyquanan.html"><svg class="glyph stroked open folder"><use xlink:href="#stroked-open-folder"/></svg>Quản lý menu</a></li>
                <li class="active"><a href="quanlymonan.html"><svg class="glyph stroked open folder"><use xlink:href="#stroked-open-folder"/></svg>Quản lý món ăn</a></li>
                <li class="active"><a href="danhsachdatban.html"><svg class="glyph stroked open folder"><use xlink:href="#stroked-open-folder"/></svg>Danh sách đặt bàn</a></li>
                <li class="active"><a href="datban.html"><svg class="glyph stroked open folder"><use xlink:href="#stroked-open-folder"/></svg>Form cho khách đặt bàn</a></li>
                <li class="active"><a href="hoadon.html"><svg class="glyph stroked open folder"><use xlink:href="#stroked-open-folder"/></svg>Hóa đơn</a></li>
                <li class="active"><a href="thongke.html"><svg class="glyph stroked open folder"><use xlink:href="#stroked-open-folder"/></svg>Thống kê doanh thu</a></li>
                <li class="active"><a href="order_monan.html"><svg class="glyph stroked open folder"><use xlink:href="#stroked-open-folder"/></svg>Form order món ăn</a></li>

                
            </ul>
    
        </div><!--/.sidebar-->
        
</body>

</html>	



    @endsection 


