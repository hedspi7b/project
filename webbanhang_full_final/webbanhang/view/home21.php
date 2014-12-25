<!-- BEGIN: main -->
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>register</title>
<link href="product.css" rel="stylesheet" type="text/css" />
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
          <form action="timkiem.php" method="get" name="search">
            <input class="search_bt" name="search-submit" type="submit" value="" />
            <input class="search-input" name="search-input" type="text" value="Tìm kiếm ..." />
          </form>
        </div>
      </div>
          </div>
  </div>
  <!--end of wraper-header-->
  <div class="bg-content">
    <div class="bg-menu">
      <div class="wraper-content">
        <ul class="main-menu">
          <li clas="menu"><a href="index.php">Trang chủ</a></li>
          <li clas="menu"><a>Giới thiệu</a></li>
          <li clas="menu"><a>Sản phẩm</a>
            <ul>
              <li><a href="sanpham.php?loai=1">Đồng hồ cao cấp</a></li>
              <li><a href="sanpham.php?loai=2">Nhẫn đôi</a></li>
              <li><a href="sanpham.php?loai=3">Nhẫn cưới</a></li>
              <li><a href="sanpham.php?loai=4">Lắc tay</a></li>
              <li><a href="sanpham.php?loai=5">Dây chuyền</a></li>
              <li><a href="sanpham.php?loai=6">Mặt dây</a></li>
              <li><a href="sanpham.php?loai=7">Phụ kiện</a></li>
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
        <div class="content-left">
          <div class="part-content-title"> DANH MỤC </div>
          <ul>
            <li class="menu-item"><a class="menu-item1"><span class="before"></span>Tất cả sản phẩm</a>
              <ul class="submenu">
                <li><a href="sanpham.php?loai=1">Đồng hồ cao cấp</a></li>
                <li><a href="sanpham.php?loai=2">Nhẫn đôi</a></li>
                <li><a href="sanpham.php?loai=3">Nhẫn cưới</a></li>
                <li><a href="sanpham.php?loai=4">Lắc tay</a></li>
                <li><a href="sanpham.php?loai=5">Dây chuyền</a></li>
                <li><a href="sanpham.php?loai=6">Mặt dây</a></li>
                <li><a href="sanpham.php?loai=7">Phụ kiện</a></li>
              </ul>
            </li>
            <li class="menu-item"><a class="menu-item1"><span class="before"></span>Đồng hồ cao cấp</a>
              <ul class="submenu">
                <li><a href="sanpham.php?loai=1&h=0">Orient</a></li>
                <li><a href="sanpham.php?loai=1&h=1">Romanson</a></li>
                <li><a href="sanpham.php?loai=1&h=2">Olym Pianus</a></li>
              </ul>
            </li>
            <li class="menu-item"><a class="menu-item1"><span class="before"></span>Nhẫn kim cương</a>
              <ul class="submenu">
                <li><a href="sanpham.php?loai=7&h=0">Orient</a></li>
                <li><a href="sanpham.php?loai=7&h=1">Romanson</a></li>
                <li><a href="sanpham.php?loai=7&h=2">Olym Pianus</a></li>
              </ul>
            </li>
          </ul>
          <div class="part-content-title"><a href="sanpham.php?do=tt">GIỎ HÀNG</a> </div>
          
                        <div class="facebook-like">
                <div class="fb-like-box" data-href="https://www.facebook.com/pages/BeCo-Shop/121440401216060?fref=ts" data-width="300" data-height="295" data-colorscheme="light" data-show-faces="true" data-stream="false" data-header="true">
                 <iframe scrolling="no" style="width: 270px; height:295px;" src="http://www.facebook.com/plugins/likebox.php?href=https%3A%2F%2Fwww.facebook.com%2Fpages%2FBeCo-Shop%2F121440401216060%3Ffref%3Dts&amp;height=295&amp;width=300&amp;header=true&amp;show_faces=true&amp;stream=false&amp;colorscheme=light&amp;show_border=true" frameborder="0"></iframe>
                </div>
                       <div class="skype-block"> <a href="skype:brodev?call"> <img class="imageStatusSkype" src="skype.png" alt="Skype Me™!"> </a>
                <p>Nguyễn Ngọc Thủy (sale) </p>
                <p><span class="phone">0987332497</span></p>
              </div>
              </div>
        </div>
        <div class="content-right">
        	
             <ul class="list-product">
            {content}
            </div>
              </ul>
              {page}
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
<!-- END: main -->