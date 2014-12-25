<?php
$admin_content = new XTemplate("view/news_content.php");
if(isset($_GET['do'])== true)
 {
	 switch($_GET['do'])
	 {
		 case 'form':
		 $f = new XTemplate("view/news/form.php");
		 $query = "SELECT * FROM category";
		 $result = mysql_query($query) or die(mysql_error());
		 while($row = mysql_fetch_assoc($result))
			 {
				 $f->assign("cat",$row);
				 $f->parse("main.select_cat");
			 }
		
		
		$query = "SELECT * FROM nsx";
		 $result = mysql_query($query) or die(mysql_error());
		 while($r = mysql_fetch_assoc($result))
			 {
				 $f->assign("the",$r);
				 $f->parse("main.select_cat2");
			 }
		$f->parse("main");
		 		 $formHTML = $f->text("main");//return
		 $admin_content->assign("form",$formHTML);
		 $admin_content->parse("main.form_content");
		 break;
		 
		  case 'save':
		     $name = $_POST['name'];
			 $ghichu = $_POST['ghichu'];
			 $gia = $_POST['gia'];
			 $soluong = $_POST['soluong'];
			 $cat_id = $_POST['cat_id'];
			 $idnsx = $_POST['id'];
			 $thumuc = "";
			 $link = $thumuc.$_FILES['upFile']['name'];
			 if(move_uploaded_file($_FILES['upFile']['tmp_name'],$link)==true)
			 {
				 $query = "INSERT INTO sanpham
				 VALUES('','$name','$gia','$soluong','$ghichu','$cat_id','$link','$idnsx')";
				 mysql_query($query) or die(mysql_error());
			 }
			$admin_content->assign("form","Save thanh cong");
		    $admin_content->parse("main.form_content");
		 break;
	 }
	 
	 
 }
?>