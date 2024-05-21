@extends('layouts.admin')
@section('title', $viewData['title'])
@section('content')
<link rel="stylesheet" href="{{asset('doanhthu.css')}}">
<body>
  <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#sidebar-collapse">
            
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          
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

  
  <div class="row">
    
  
  
<div class="content">
<table>
  <thead>
    <div class="div_left">
        <lable> Từ ngày </lable> <input type="date" name="ngay-dat" id="ngay-dat" required>
      </div>
      <br>
      <div class="div_left">
      <lable>Đến ngày </lable>  <input type="date" name="ngay-dat" id="ngay-dat" required>
      </div> <br>
      <button class="btn btn-primary">
        <span class="icon">
        <i class="fas fa-check"></i>
        </span>
        <span class="text">Xác nhận </span>
      </button>
      <br>
    <center> <h1 style="color: #FF0000;">Thống kê doanh thu theo món ăn</h1></center>
    <tr>
      <th>STT</th>  
      <th>Mã món ăn</th>
      <th>Tên món ăn</th>
      <th>Từ ngày</th>
      <th>Đến ngày</th>
      <th>Số lượng món</th>
      <th>Giá</th>
      <th>Tổng tiền</th>
      
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>1</td>
      <td>Món ăn A</td>
      <td>Mì xào</td>
      <td>***</td>
      <td>***</td>
      <td>300</td>
      <td>45.000</td>
      <td>13.500.000</td>
    </tr>
    <tr>
      <td>2</td>
      <td>Món ăn B</td>
      <td>Cơm chiên</td>
      <td>***</td>
      <td>***</td>
      <td>100</td>
      <td>25.000</td>
      <td>2.500.000</td>
    </tr>
    <tr>
      <td>3</td>
      <td>Món ăn C</td>
      <td>Lẩu cá</td>
      <td>***</td>
      <td>***</td>
      <td>200</td>
      <td>200.000</td>
      <td>40.000.000</td>
    </tr>
    <tr>
      <td>4</td>
      <td>Món ăn D</td>
      <td>Lẩu cua </td>
      <td>**</td>
      <td>***</td>
      <td>50</td>
      <td>200.000</td>
      <td>10.000.000</td>
    </tr>
   
    
  </tbody>
</table>
</div>

<footer>
<a style="font-size: 20px; font-weight: bold">TỔNG TIỀN: 66.000.000 VND</a>
</footer>

</body>
@endsection