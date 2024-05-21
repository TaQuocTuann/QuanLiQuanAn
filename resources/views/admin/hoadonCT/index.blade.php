@extends('layouts.admin')
@section('title', $viewData['title'])
@section('content')
<link rel="stylesheet" href="{{asset('danhsachdatban.css')}}">
<body>
   
 <div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">			

    
    <div class="row">
        
    <body>
<div class="container">
    <div class="header">
      <center>
        <h1 style="color: black;">Hóa đơn chi tiết</h1>
      </center>
    </div>
    <form action="xuly.php" method="post">
        <div class="form-group">
          <label for="tenkhachhang">Tên khách hàng: <strong> {{$viewData['data'][0]->tenkhachorder}}</strong></label>
    
       
        </div>
       
        <div class="form-group">
          <label for="soba">Số bàn: <strong> {{$viewData['data'][0]->soban}}</strong></label>
          
      </form>
<table class="table">
<thead>
  <tr>
    <th>Món</th>
    <th>SL</th>
    <th>Ghi chú</th>
    <th>Giá</th>
    <th>Tổng giá tiền</th>
  </tr>
</thead>
<tbody>
  @php
    $tongtien = 0;
  @endphp
  @foreach($viewData['data'] as $key => $item)
    @php
    $tongtien +=  $item->tonggiatien;
    @endphp
  <tr>
    <td>{{$item->TenmonOrder}}</td>
    <td>{{$item->Soluong}}</td>
    
    <td>{{$item->Ghichu}}</td>
    <td>{{$item->Giamon}}</td>
    <td>{{$item->tonggiatien}}</td> 
  </tr>
  @endforeach

</tbody>
<div>
  
  
</div>

</table>



</body>
<strong <a style="font-size: 20px; font-weight: bold";>Tổng tiền: {{$tongtien}} vnđ </a></strong> 
@endsection