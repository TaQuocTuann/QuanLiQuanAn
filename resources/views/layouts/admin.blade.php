<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<!--tựa đề-->
<title>@yield('title',"Quan an ")</title>
<!--tựa đề-->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
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
                          
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand" href="trangtong.html"><span>Quản lý</span> quán ăn </a>
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

              <!--Phần Thêm đường ẫn -->
            </nav>
		
			<div id="sidebar-collapse" class="col-sm-3 col-lg-2 sidebar">
				<ul class="nav menu">
                    <li class="active"><a href=""><svg class="glyph stroked open folder"><use xlink:href="#stroked-open-folder"/></svg>Quản lý menu</a></li>
					<li class="active"> <a href="{{route('admin.menu.index')}}"><svg class="glyph stroked bag"><use xlink:href="#stroked-bag"></use></svg>Quản lý món ăn</a></li>
                </ul>
		
			</div><!--/.sidebar-->
            <div id="sidebar-collapse" class="col-sm-3 col-lg-2 sidebar">
                <ul class="nav menu">
                   
                    <li class="active"> <a href="{{route('admin.menu.index')}}"><svg class="glyph stroked bag"><use xlink:href="#stroked-bag"></use></svg>Quản lý món ăn</a></li>
                    <li class="active"><a href="{{route('admin.dsdatban.index')}}"><svg class="glyph stroked bag"><use xlink:href="#stroked-bag"></use></svg>Danh sách đặt bàn</a></li>
                    <li class="active"><a href="{{route('admin.datban.index')}}"><svg class="glyph stroked open folder"><use xlink:href="#stroked-open-folder"/></svg>Form cho khách đặt bàn</a></li>
                    <li class="active"><a href="{{route('admin.order.index')}}"><svg class="glyph stroked open folder"><use xlink:href="#stroked-open-folder"/></svg>Form order món ăn</a></li>
                    <li class="active"><a href="{{route('admin.banan.index')}}"><svg class="glyph stroked open folder"><use xlink:href="#stroked-open-folder"/></svg>Bàn ăn</a></li>
                    <li class="active"><a href="{{route('admin.hoadonCT.index')}}"><svg class="glyph stroked open folder"><use xlink:href="#stroked-open-folder"/></svg>Hóa đơn</a></li>
                    <li class="active"><a href="{{route('admin.thongke.index')}}"><svg class="glyph stroked open folder"><use xlink:href="#stroked-open-folder"/></svg>Thống kê doanh thu của quán </a></li>
                    
                    
                    
                </ul>
            
            </div><!--/.sidebar-->


        <!--Phần Thêm nội dung-->    
		@yield('content')
	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">			
		
		
		<div class="row">
			
            </div>
                                </tbody>
						</table>
                    </div>
                    <div class="panel-footer">
                        <nav aria-label="Page navigation example">
                           
                        </nav>
                    </div>
				</div>
			</div>
		</div><!--/.row-->	
	</div>	<!--/.main-->


	<script src="{{asset('js/jquery-1.11.1.min.js')}}"></script>
<script src="{{asset('js/bootstrap.min.js')}}"></script>
<script src="{{asset('js/bootstrap-table.js')}}"></script>			
</body>

</html>	

