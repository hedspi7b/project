<!-- BEGIN: main -->
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Project</title>
<link href="project.css" rel="stylesheet" type="text/css" />
</head>

<body>
<div class="wraper">
  <div class="bg-header">
    <div class="wraper-header">
      <div class="logo"> <img src="z41.png" width="140" height="130" /></div>
      <div class="slogan">Giá trị sản phẩm là niềm tự hào của chúng tôi</div>
      <ul class="store-menu">
        <li class="store"><a href="#"> <i class="icon-store-menu"></i> Giỏ hàng: <span class="item">(0)</span> <span class="price">0 ₫</span> </a></li>
        <li class="login"><a href="#">ĐĂNG NHẬP</a></li>
        <li><a href="#">ĐĂNG KÝ</a></li>
      </ul>
    </div>
  </div>
  <!--end of wraper-header-->
  <div class="bg-content">
    <div class="bg-menu">
      <div class="wraper-content">
        <ul class="main-menu">
          <li clas="menu"><a>Trang chủ</a></li>
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
        <div class="main-content">
          <div class="title"> BEDECK FASHION - CHẤT LƯỢNG MỖI NGÀY - VÀNG BẠC NHẬP KHẨU - THAILAND - AMERICA - SINGAPORE</div>
          <div class="ads">
            <section class="slider">
              <div class="flexslider">
                <ul class="slides">
                  <li><img src="h14.jpg" width="1132" height="530" /></li>
                  <li><img src="h15.jpg" width="1132" height="530" /></li>
                  <li><img src="h16.jpg" width="1132" height="530" /></li>
                  <li><img src="h18.jpg" width="1132" height="530" /></li>
                </ul>
              </div>
            </section>
          </div>
       <div class= ads-small> <img class ="img-right" src="h19.jpg" width="560" height="218" /> <img src="h20.jpg" width="560" height="218" /> </div>
          <div class="content-2">
            <div class ="hot-sale">
              <ul class="list-product">
                <li class="product-item">
                  <h2 class="item-name"><a href="#">{bc1.name}</a></h2>
                  <a href="#"><img src="{bc1.img}" width="244" height="246" /></a>
                  <div class="price-cart">
                    <p class="item-price"><a href="#">{bc1.gia}</a></p>
                    <p class="add-cart"><a href="#">Thêm vào giỏ</a></p>
                  </div>
                </li>
              </ul>
            </div>
            <div class="contact">
              <div class="skype-block"> <a href="skype:brodev?call"> <img class="imageStatusSkype" src="skype.png" alt="Skype Me™!"> </a>
                <p>Nguyễn Ngọc Thủy (sale) </p>
                <p><span class="phone">0987332497</span></p>
              </div>
              <div class="facebook-like">
                <div class="fb-like-box" data-href="https://www.facebook.com/pages/BeCo-Shop/121440401216060?fref=ts" data-width="300" data-height="295" data-colorscheme="light" data-show-faces="true" data-stream="false" data-header="true">
                  <iframe scrolling="no" style="width: 288px; height:295px;" src="http://www.facebook.com/plugins/likebox.php?href=https%3A%2F%2Fwww.facebook.com%2Fpages%2FBeCo-Shop%2F121440401216060%3Ffref%3Dts&amp;height=295&amp;width=300&amp;header=true&amp;show_faces=true&amp;stream=false&amp;colorscheme=light&amp;show_border=true" frameborder="0"></iframe>
                </div>
              </div>
            </div>
          </div>
          <!-- jQuery --> 
          <script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script> 
          <script>window.jQuery || document.write('<script src="js/libs/jquery-1.7.min.js">\x3C/script>')</script> 
          
          <!-- FlexSlider --> 
          <script defer src="jquery.flexslider.js"></script> 
          <script type="text/javascript">
    $(function(){
      SyntaxHighlighter.all();
    });
    $(window).load(function(){
      $('.flexslider').flexslider({
        animation: "slide",
		controlNav:false,
      });
    });
  </script> 
        </div>
      </div>
      <!--end of main-menu--> 
    </div>
  </div>
  <!--end of wraper-content-->
  <div class="bg-footer">
    <div class="wraper-footer"> 
    	<a href="#">@BEDECK FASHION</a>
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
</body>
</html>
<!-- END: main -->