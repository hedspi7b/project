<!-- BEGIN: main -->
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
	"">
<html xmlns="" xml:lang="en" lang="en">
	<head>
		<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
		<title>DUY PQ Admin</title>
		<link rel="stylesheet" href="view/css/960.css" type="text/css" media="screen" charset="utf-8" />
		<link rel="stylesheet" href="view/css/template.css" type="text/css" media="screen" charset="utf-8" />
		<link rel="stylesheet" href="view/css/colour.css" type="text/css" media="screen" charset="utf-8" />
        <script type="text/javascript" src="jquery-1.10.2.min.js"></script>
<script type="text/javascript">
	// Code dong popup	
	$(document).ready(function() {
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
	   $("#pass_hint").focusin(function(){
			 $("#pass_hint").css("display","none");
			 $("#pass").css("display","inline-block");
			 $("#pass").focus();
	   })
	   $("#pass").focusout(function(){
		   if($('#pass').val()===''){
   			 $("#pass_hint").css("display","inline-block");
			 $("#pass").css("display","none");
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
    });
</script>
	</head>
	<body>

		<h1 id="head">Admin DUY PQ</h1>

		<ul id="navigation">
        
       
        
        <!--
			<li><span class="active">Overview</span></li>
			<li><a href="#">News</a></li>
			<li><a href="#">Users</a></li>
             -->
		</ul>
		
		<div id="content" class="container_16 clearfix">
			<div class="login-form" style="display: block;">
  <p><a class="close" href="#"></a></p>
  <form action="index.php" method="post" name="login">
    <p class="pre">Username:</p>
    <p>
      <input class="textbox" id="user_name" name="user_name" type="text" value="Tên tài khoản" style="color: rgb(119, 119, 119);">
    </p>
    <p class="pre"> pass:</p>
<input class="password" id="pass" name="pass" type="text" style="color: rgb(119, 119, 119);display:none;">
        <p>
      <input type="text" class="textbox default-value" tabindex="102" name="login_password_hint" id="pass_hint" size="10" value="Mật khẩu" style="display: inline;">
    </p>
    <div>
     
      <p>
        <input class="login_bt" name="submit" type="submit" value="Đăng nhập">
      </p>
    </div>
  </form>
</div>
		</div>

			<div id="foot">
				<i>Designed by </i><a href="">DUY.P.Q</a>
			</div>
		
	</body>
</html>
<!-- END: main -->