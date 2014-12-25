<!-- BEGIN: main -->
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>register</title>
<link href="register.css" rel="stylesheet" type="text/css" />
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

<div class="content-right">
        	<h2 class="title-sale">thông tin khách hàng</h2>
            <div class="register-content">
            <form action="sanpham.php?do=hd&save=1" method="post" name="register">
            	<div class="test"><h3 class="register-title">Tên</h3><input class="text-field" name="name" type="text" /></div>
                <div class="test"><h3 class="register-title">Email</h3><input class="text-field" name="email" type="text" /></div>
                <div class="test"><h3 class="register-title">Số điện thoại</h3><input class="text-field" name="phone" type="text" /></div>
                <div class="test"><h3 class="register-title">Số CMTND</h3><input class="text-field" name="cmtnd" type="text" /></div>
                <div class="test"><h3 class="register-title">Địa chỉ</h3><textarea style="width:300px; 	border-radius:5px;
	border:1px solid #CCC; display:block"  name="address" rows="8"></textarea></div>
                <input class="register_bt" name="register_bt" type="submit" value="SEND"/>
            </form>
            </div>
<!-- END: main -->