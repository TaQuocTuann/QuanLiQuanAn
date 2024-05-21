@extends('layouts.admin')
@section('title', $viewData['title'])
@section('content')
<link rel="stylesheet" href="{{asset('danhsachdatban.css')}}">

<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">		


<div class="row">


<div class="container">
<div class="header">
<center>
<h1 style="color: rgb(240, 234, 234);">Danh sách đặt bàn</h1>
</center>
</div> 
<br>
<div class="search-bar">
<input type="text" placeholder="Tìm kiếm bàn ăn">
<i class="fas fa-search"></i>
</div>
<script>
  const searchInput = document.getElementById("search-input");
  const cards = document.querySelectorAll(".card");
  
  searchInput.addEventListener("input", () => {
    const searchValue = searchInput.value.toLowerCase();
  
    cards.forEach((card) => {
      const cardTitle = card.querySelector("h2").textContent.toLowerCase();
  
      if (cardTitle.includes(searchValue)) {
        card.style.display = "block";
      } else {
        card.style.display = "none";
      }
    });
  });
  </script>
<br>
<div class="container_swap">
<div class="div_left">
<input type="date" name="ngay-dat" id="ngay-dat" required>
</div>
<div class="div_right">
<input type="time" name="thoi-gian" id="thoi-gian" required>
</div>
</div>
<br>
<div class="content">
<table>
<thead>
<tr>
  <th>Chọn</th>
  <th>Mã đặt bàn</th>
  <th>Tên khách hàng</th>
  
  <th>Số lượng bàn</th>
  <th>Số lượng khách</th>
  <th>Ngày đặt</th>
  <th>Thời gian</th>
  <th>Số điện thoại</th>
  <th>Ghi chú</th>
</tr>
</thead>
<tbody>
  @foreach ($viewData['datbanans'] as $datbanan)
  <td><input type="checkbox" name="chon" value="chọn"></td>
  <td>{{ $datbanan->getMadatban() }}</td>
  <td>{{ $datbanan->getTenkhachhang() }}</td>
  <td>{{ $datbanan->getSoluongban() }}</td>
  <td>{{ $datbanan->getSoluongkhach() }}</td>
  <td>{{ $datbanan->getNgaydatban() }}</td>
  <td>{{ $datbanan->getGiodatban() }}</td>
  <td>{{ $datbanan->getSodienthoai() }}</td>
  <td>{{ $datbanan->getGhichu() }}</td>

  
</tbody>

  @endforeach
</table>
<button type="button" class="btn btn-success">Xác nhận đặt bàn</button>
</div>
<div class="footer">

</div>
</div>


@endsection