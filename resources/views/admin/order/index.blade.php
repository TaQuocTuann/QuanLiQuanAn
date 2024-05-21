@extends('layouts.admin')
@section('title', $viewData['title'])
@section('content')

<link rel="stylesheet" href="{{asset('order.css')}}">
<body>



<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">			
<div class="row">
<ol class="breadcrumb">
  <li><a href="#"><svg class="glyph stroked home"><use xlink:href="#stroked-home"></use></svg></a></li>
  <li class="active">Danh sách món ăn </li>
</ol>
</div><!--/.row-->

<div class="row">
<div class="col-lg-12">
  <h1 class="page-header">Danh sách order món ăn </h1>
</div>
       <div class="col-lg-8">

          <div class="card">
            <div class="card-body">
              <div class="d-inline-block">
                <form class="search-form d-flex align-items-center search-bar" method="POST" action="#">
                  <input type="text" class="js-name-khach" name="tenkhachorder" placeholder="Nhập tên khách hàng" >
                  <br> <br>
                  <div class="form-group">
                    <label for="Tenbanan">Chọn bàn ăn </label>
                    <select id="changeban" name="Tenbanan" class="form-control">
                        @foreach($banan as $item)
                          <option value="{{$item->ID_banan}}">{{$item->Tenbanan}}</option>
                        @endforeach
                      
                    </select>
                </div>
                  
              </form>
              </div>

              <!-- Bordered Tabs -->
              <div class="d-inline-block">
                <ul class="nav nav-tabs nav-tabs" id="Tab" role="tablist">
                  <li class="nav-item" role="presentation">
                      <button class="btn btn-primary-light" id="home-tab" data-bs-toggle="tab" data-bs-target="#bordered-home" type="button" role="tab" aria-controls="bill1" aria-selected="true" >Số hóa đơn 1</button>
                
                  </li>
                  <li class="nav-item" role="presentation">
                    <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#bordered-profile" type="button" role="tab" aria-controls="bill2" aria-selected="false">+</button>
                  </li>
                </ul>
              </div>
              <div class="d-flex" style="display:flex;width:auto;overflow:auto">
                  @foreach($menu as $item)
                      <div class="card" style="margin:0 15px" >
                          <div class="card-body">
                              <h5 class="card-title"> <strong>{{ $item->Tenmonan }}</strong></h5>
                              <p class="card-text"><strong>{{ $item->Loaimonan }}</strong></p>
                              <p class="card-text"><strong>{{ $item->Giamonan }}</strong></p>
                  
                              <img style="width:60px;height:60px;object-fit:cover" src="{{ asset('/storage/' . $item->Anhmonan) }}" class="card-img-top" alt="...">
                              <button data-id="{{$item->id}}" data-price="{{$item->Giamonan}}" data-name="{{$item->Tenmonan}}" class="js-add-menu" style="background-color: #2c0ddf; color: #fff; padding: 8px 16px; border: none; border-radius: 4px; cursor: pointer; margin-top: 8px;">Chọn</button>

                          </div>
                      </div>
                  @endforeach
              </div>
              
              <table class="table table-striped">
                <thead>
                  <tr>
                  
                    <th>Tên món ăn </th>
                    <th>Ghi chú</th>
                    <th>Giá món</th>
                    <th>Số lượng</th>
               

                  </tr>
                </thead>

                <tbody id="body-item">
                 
               
                  
                        
                          
                </tbody>
              
              </table>
              <div  style=";padding:16px 0">Tổng tiền: <strong class="js-tong-tien"></strong></div>
              <button type="submit"  class="js-submit btn btn-success">Xác nhận  </button>
                <button type="reset" class="btn btn-default">Hủy</button>
                         
                <div id="toolbar" class="btn-group">
                  <a  data-href="{{route('admin.hoadonCT.index')}}" class="btn btn-success js-hoa-don">
                       Xuất hóa đơn 
                  </a>
              </div>
                
              <div class="col-lg-12">
                <div class="card">
                  <div class="card-body">
                    
                    
                  
 

                  </div>
                </div>
      
              </div>
            </div>
          </div>
      
</body>

@endsection

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<script>
$(document).ready(function() {
    $('.js-hoa-don').click(function(){
      let $href = $(this).data('href');
      let $hoadon =  $('#changeban').val();
      document.location.href = $href + "?hoadon="+$hoadon;
    })
    $.ajax({
              url: '{{ route('get.data.table') }}',
              type: 'GET',
              data: { value: $('#changeban').val() }, 
              success: function(data) {
                  let $tongtien = $('.js-tong-tien');
                  let tongtien = 0;
                  $('.js-name-khach').val('');

                  if (data && data.length > 0) {
                    $('.js-name-khach').val(data[0].tenkhachorder);

                      data.forEach(function(item) {
                        tongtien += parseInt(item.Soluong) * item.Giamon;
                          $('#body-item').append(`
                            <tr class="js-tr" >
                                  <th class="js-name">${item.TenmonOrder}</th>
                                  <th><input type="text" value="${item.Ghichu}" name="note"></th>
                                  <th class="js-price">${item.Giamon}</th>
                                  <th><input type="number" value="${parseInt(item.Soluong)}" name="soluong"></th>
                                  <th><button class="btn-default js-xoa-item">Xóa</button></th>


                              </tr>
                          `);
                      });
                      
                  } else {
                     
                      $('#body-item').append('<tr><td colspan="5">Không có dữ liệu</td></tr>');
                  }
                  $tongtien.text(tongtien + ' vnđ');
              },
              error: function(xhr, status, error) {
                 
                  console.error('Error:', error);
              }
          });

          $(document).on('click', '.js-xoa-item', function() {
              let $tongtien = $('.js-tong-tien');
              let tongtien = 0;
              let $this = $(this);
              $this.closest('.js-tr').remove();
              $('#body-item').find('.js-tr').each(function() {
                  let $tr = $(this);
                  let gia = parseFloat($tr.find('.js-price').text()); 
                  let soluong = parseInt($tr.find('[name="soluong"]').val()); 
                  tongtien += gia * soluong; 
              });

              // Cập nhật tổng tiền
              $tongtien.text(tongtien + " vnđ");

          });
          $(document).on('change', '[name="soluong"]', function() {
    let $input = $(this);
    let $tr = $input.closest('.js-tr');
    let gia = parseFloat($tr.find('.js-price').text());
    let soluong = parseInt($input.val()); // Lấy số lượng từ input
    let thanhtien = gia * soluong; // Tính thành tiền cho sản phẩm

    // Cập nhật thành tiền cho sản phẩm
    $tr.find('.js-thanhtien').text(thanhtien);

    // Cập nhật tổng tiền
    let tongtien = 0;
    $('#body-item').find('.js-tr').each(function() {
        let gia = parseFloat($(this).find('.js-price').text()); // Lấy giá từ class .js-price
        let soluong = parseInt($(this).find('[name="soluong"]').val()); // Lấy số lượng từ input
        tongtien += gia * soluong; // Tính tổng tiền cho từng sản phẩm
    });
    $('.js-tong-tien').text(tongtien + " vnđ");
});
    $('#changeban').on('change', function() {
        let $this = $(this);
        $('#body-item').html('');
        
        $('.js-name-khach').val('');

        $.ajax({
            url: '{{ route('get.data.table') }}',
            type: 'GET',
            data: { value: $this.val() }, // Sử dụng cú pháp này để truyền dữ liệu với tên biến 'value'
            success: function(data) {
                // Xử lý dữ liệu trả về và thêm vào bảng
                let $tongtien = $('.js-tong-tien');
                  let tongtien = 0;
                  if (data && data.length > 0) {
                  $('.js-name-khach').val(data[0].tenkhachorder);
                    data.forEach(function(item) {
                      tongtien += parseInt(item.Soluong) * item.Giamon;

                        $('#body-item').append(`
                          <tr class="js-tr" >
                                <th class="js-name">${item.TenmonOrder}</th>
                                <th><input type="text" value="${item.Ghichu}" name="note"></th>
                                <th class="js-price">${item.Giamon}</th>
                                <th><input type="number" value="${parseInt(item.Soluong)}" name="soluong"></th>
                                
                                <th><button class="btn-default js-xoa-item">Xóa</button></th>

                            </tr>
                        `);
                    });
                } else {
                    // Xử lý trường hợp không có dữ liệu
                    $('#body-item').append('<tr><td colspan="5">Không có dữ liệu</td></tr>');
                }
                $('#body-item').find('.js-tr').each(function() {
                  let $tr = $(this);
                  let gia = parseFloat($tr.find('.js-price').text()); // Lấy giá từ class .js-price
                  let soluong = parseInt($tr.find('[name="soluong"]').val()); // Lấy số lượng từ input có name="soluong"
                  tongtien += gia * soluong; // Tính tổng tiền cho từng sản phẩm
              });

              // Cập nhật tổng tiền
              $tongtien.text(tongtien + " vnđ");
            },
            error: function(xhr, status, error) {
                // Xử lý lỗi nếu có
                console.error('Error:', error);
            }
        });
    });

    $('.js-add-menu').click(function() {
        let $this = $(this);
        let name = $this.data('name');
        let price = $this.data('price');
        let id = $this.data('id');
        let $tongtien = $('.js-tong-tien');
                  let tongtien = 0;
        // Kiểm tra xem sản phẩm đã tồn tại trong bảng chưa
        let existingItem = $('#body-item').find('.js-name:contains("' + name + '")');
        
        if (existingItem.length) {
            // Nếu sản phẩm đã tồn tại, tăng số lượng lên
            let quantityInput = existingItem.closest('tr').find('input[name="soluong"]');
            let currentQuantity = parseInt(quantityInput.val());
            quantityInput.val(currentQuantity + 1);
        } else {
            // Nếu sản phẩm chưa tồn tại, thêm mới vào bảng
            $('#body-item').append(`
                <tr class="js-tr">
                    <th class="js-name">${name} </th>
                    <th><input type="text" name="note"></th>
                    <th class="js-price">${price}</th>
                    <th><input type="number" value="1" name="soluong"></th>
                    <th><button class="btn-default js-xoa-item">Xóa</button></th>

                </tr>
            `);
        }
        $('#body-item').find('.js-tr').each(function() {
                  let $tr = $(this);
                  let gia = parseFloat($tr.find('.js-price').text()); // Lấy giá từ class .js-price
                  let soluong = parseInt($tr.find('[name="soluong"]').val()); // Lấy số lượng từ input có name="soluong"
                  tongtien += gia * soluong; // Tính tổng tiền cho từng sản phẩm
              });
              $tongtien.text(tongtien + " vnđ");

    });


    $('.js-submit').click(function(){
        let banid =  $('#changeban').val();
        let items = []; // Khởi tạo một mảng để chứa các đối tượng
    
        // Lặp qua tất cả các phần tử có class js-tr
        $(document).find('.js-tr').each(function() {
            let $this = $(this);
            
            // Lấy thông tin từ các phần tử con
            let name = $this.find('.js-name').text().trim();
            let note = $this.find('input[name="note"]').val();
            let price = $this.find('th').eq(2).text();// Lấy giá từ thứ tự thứ 4 trong hàng
            let quantity = $this.find('input[name="soluong"]').val();
            
            // Tạo đối tượng và thêm vào mảng
            let item = {
                name: name,
                note: note,
                price: price,
                quantity: quantity
                
            };
            items.push(item);
        });

        $.ajax({
            url: '{{route('admin.update.order')}}', // Thay 'url_to_server' bằng URL của máy chủ
            type: 'get', // Hoặc 'GET' tùy thuộc vào phương thức gửi dữ liệu
            data: {
              table: banid,
              name: $('.js-name-khach').val(),
              data :JSON.stringify(items)
            }, // Chuyển đổi mảng thành chuỗi JSON trước khi gửi
            success: function(response) {
                alert("Thêm món ăn thành công ");
            },
            error: function(xhr, status, error) {
                // Xử lý lỗi (nếu có)
                console.error('Error:', error);
            }
        });
    })
});


</script>