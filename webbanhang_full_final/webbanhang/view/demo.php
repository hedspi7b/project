<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Danh sách các câu truy vấn</title>
<link href="demo-result.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="jquery-1.10.2.min.js"></script>
<script type="text/javascript">
	// Code dong popup	
	var i =1;
	$(document).ready(function() {
	   $(".login-form").hide();
	   $(".login-bg").hide();	
	   $(".close").click(function(){
		   $(".login-form").css("display","none");
		   $(".login-bg").css("display","none");
			$(".login-form").hide();
			$(".login-bg").hide();			   
	   })
	   $(".login").click(function(){
			$(".login-form").show();
			$(".login-bg").show();			   
	   })	   
	   $("#user_name").focusin(function(){
		   if($("#user_name").val()==='Tên tài khoản'){
			 $("#user_name").val("");
			 $("#user_name").css("color","rgb(0,0,0)");
		   }
	   })
	   $("#user_name").focusout(function(){
		   if($("#user_name").val()===''){
			 $("#user_name").val("Tên tài khoản");
			 $("#user_name").css("color","rgb(119,119,119)");
		   }
	   })
	   $("#password_hint").focusin(function(){
			 $("#password_hint").css("display","none");
			 $("#password").css("display","inline-block");
			 $("#password").focus();
	   })
	   $("#password").focusout(function(){
		   if($('#password').val()===''){
   			 $("#password_hint").css("display","inline-block");
			 $("#password").css("display","none");
		   }
	   })
	   $(".search-input").focusin(function(){
		   if($(".search-input").val()==='Tìm kiếm ...'){
			 $(".search-input").val("");
			 $(".search-input").css("color","rgb(0,0,0)");
		   }
	   })
	   $(".search-input").focusout(function(){
		   if($(".search-input").val()===''){
			 $(".search-input").val("Tìm kiếm ...");
			 $(".search-input").css("color","rgb(119,119,119)");
		   }
	   })
	   $(".menu-item").click(function(){
    		$(this).children("ul").toggle();
  	   });
    });
</script>
</head>

<body>
<div class="wraper">
  <div class="bg-header">
    <div class="wraper-header">
      <div class="part-left">
        <div class="logo"> <img src="z41.png" width="140" height="130" /></div>
        <div class="slogan">Giá trị sản phẩm là niềm tự hào của chúng tôi</div>
        <div class="search">
          <form action="" method="post" name="search">
            <input class="search_bt" name="search-submit" type="submit" value="" />
            <input class="search-input" name="search-input" type="text" value="Tìm kiếm ..." />
          </form>
        </div>
      </div>
      <ul class="store-menu">
        <li class="store"><a href="#"> <i class="icon-store-menu"></i> Giỏ hàng: <span class="item">(0)</span> <span class="price">0 ₫</span> </a></li>
        <li class="login"><a href="#">ĐĂNG NHẬP</a></li>
        <li><a href="register.html">ĐĂNG KÝ</a></li>
      </ul>
    </div>
  </div>
  <!--end of wraper-header-->
  <div class="bg-content">
    <div class="bg-menu">
      <div class="wraper-content">
        <ul class="main-menu">
          <li clas="menu"><a href="home.html">Trang chủ</a></li>
          <li clas="menu"><a>Giới thiệu</a></li>
          <li clas="menu"><a>Sản phẩm</a>
            <ul>
              <li><a>Đồng hồ cao cấp</a></li>
              <li><a>Nhẫn đôi</a></li>
              <li><a>Nhẫn cưới</a></li>
              <li><a>Lắc tay</a></li>
              <li><a>Dây chuyền</a></li>
              <li><a>Mặt dây</a></li>
              <li><a>Phụ kiện</a></li>
            </ul>
          </li>
          <li clas="menu"><a>Tin tức</a></li>
          <li clas="menu"><a>Dịch vụ</a>
            <ul>
              <li><a>Chăm sóc khách hàng</a></li>
              <li><a>Ý kiến đóng góp</a></li>
              <li><a>Hỏi & đáp</a></li>
            </ul>
          </li>
          <li clas="menu"><a>QH cổ đông</a></li>
          <li clas="menu"><a>Hệ thống cửa hàng</a></li>
        </ul>
        <div class="content-right">
          <h2 class="title-sale">Danh sách các câu truy vấn</h2>
          <div class="table-box">
			<a href="demo3.php?do=1">+ Tìm kiếm theo loại 1</a>
            <p>select * form sanpham where loai = '1'</p><br />
            <a href="demo3.php?do=2">+ Đưa ra những sp có giá < … , > …. , …<…< …</a>
            <p>
Select * from sanpham where gia between 10000 and 20000</p><br/>
            
            <a href="demo3.php?do=3">+ Tìm sản phẩm theo tên</a>
            <p>Select * from sanpham where name like %aaaa%</p><br />
            
             <a href="demo3.php?do=5">+ Hãng cung cấp nhiều sp nhất, ít nhất , = số cụ thể</a>
            <p>Select sanpham.*,nsx.id from nsx,sanpham where nsx.id=id_nsx group by nsx.id having count(sanpham.id)>all( Select sanpham.*,nsx.id from nsx,sanpham where nsx.id=id_nsx group by nsx.id)<br  />
Select sanpham.*,nsx.id from nsx,sanpham where nsx.id=id_nsx group by nsx.id having count(sanpham.id)< all( Select sanpham.*,nsx.id from nsx,sanpham where nsx.id=id_nsx group by nsx.id)<br  />

Select sanpham.*,nsx.id from nsx,sanpham where nsx.id=id_nsx group by nsx.id having count(sanpham.id)=5</p><br />

             <a href="demo3.php?do=6">+ Tông giá trị bán đc trong 1 tháng</a>
            <p>select sum(sp.gia) from sanpham as sp, hoadon as hd where sp.id=hd.ipsp and month(ngay_mua) = 1</p><br />
            
            <a href="demo3.php?do=7">+ Đưa ra các sp có nhiều hơn 1 nhà sx cung cấp</a>
            <p>Select * from sanpham as sp group by name having count(idnsx)>1</p><br />
            
            <a href="demo3.php?do=8">+ Đưa ra sản phẩm có số lượng lớn nhất</a>
            <p>Select * from sanpham where soluong >=all(select soluong from sanpham)</p><br />
            
            <a href="demo3.php?do=9">+ Đưa ra những hóa đơn chưa thanh toán</a>
            <p>Select * from hoadon  where tinhtrang=0</p><br />
            
            <a href="demo3.php?do=10">+ Đưa ra nhiều nhất 5 sản phẩm bán chạy nhất trong từng tháng</a>
            <p>SELECT sanpham.*,ma,m, y <br />
FROM sanpham,(select C as ma,idsp,m,y<br />
             from (select count(idsp) as C,idsp,month(ngay_mua) as m, year(ngay_mua) as y<br />
                  from hoadon<br />
                  group by idsp,month(ngay_mua),year(ngay_mua) having C>all(select C as ma,idsp,m,y<br />
             from (select count(idsp) as C,idsp,month(ngay_mua) as m, year(ngay_mua) as y<br />
                  from hoadon<br />
                  group by idsp,month(ngay_mua),year(ngay_mua))limit 5)as s
             group by m,y)as d<br />
WHERE sanpham.id=idsp
</p><br />
          </div>
        </div>
      </div>
      <!--end of main-menu--> 
    </div>
  </div>
  <!--end of wraper-content-->
  <div class="bg-footer">
    <div class="wraper-footer"> <a href="#">@BEDECK FASHION</a>
      <ul>
        <li><a href="#"><img src="facebook.png" width="32" height="32" /></a></li>
        <li><a href="#"><img src="googleplus.png" width="31" height="32" /></a></li>
        <li><a href="#"><img src="twitter.png" width="31" height="31" /></a></li>
        <li><a href="#"><img src="zing.png" width="33" height="32" /></a></li>
      </ul>
    </div>
  </div>
  <!--end of wraper-footer--> 
</div>
<div class="login-bg"></div>
<div class="login-form">
  <p><a class="close" href="#"></a></p>
  <form action="" method="post" name="login">
    <p class="pre">Username:</p>
    <p>
      <input class="textbox" id="user_name" name="user_name" type="text" value="Tên tài khoản" style="color: rgb(119, 119, 119);"/>
    </p>
    <p class="pre">Password:</p>
    <p>
      <input type="password" class="textbox" tabindex="102" name="login_password" id="password" size="10" style="display: none;">
    </p>
    <p>
      <input type="text" class="textbox default-value" tabindex="102" name="login_password_hint" id="password_hint" size="10" value="Mật khẩu" style="display: inline;">
    </p>
    <p class="pre">
      <input name="memory" type="checkbox"/>
      Ghi nhớ?</p>
    <div>
      <p>
        <input class="forgot_bt"name="forgot_pass" type="submit" value="Quên mật khẩu" />
      </p>
      <p>
        <input class="login_bt" name="submit" type="submit" value="Đăng nhập" />
      </p>
    </div>
  </form>
</div>
</body>
</html>
