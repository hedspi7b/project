<?php
 $admin_content = new XTemplate("view/category_content.php");
 
 if(isset($_GET['do'])== true)
 {
	 switch($_GET['do'])
	 {
		 case 'form':
		 $f = new XTemplate("view/category/form.php");
		 $f->parse("main");
		 $formHTML = $f->text("main");//return
		     $admin_content->assign("form",$formHTML);
			 $admin_content->parse("main.form_content");
		 break;
		 
		 case 'save':
		     $cat_name = $_POST['cat_name'];
			 $query = "INSERT INTO category VALUES('','$cat_name')";
			 mysql_query($query) or die(mysql_error());
			 
			 $admin_content->assign("form","Da thanh cong");
			 $admin_content->parse("main.form_content");
		 break;
		 
		 case 'select':
		     $s = new XTemplate("view/category/select.php");
			 
			 $query = "SELECT * FROM category";
			 $result = mysql_query($query) or die(mysql_error());
			 while($row = mysql_fetch_assoc($result))
			 {
				 $s->assign("cat",$row);
				 $s->parse("main.list_cat");
			 }
			 $s->parse("main");
		     $selectHTML = $s->text("main");
			   
			 $admin_content->assign("form",$selectHTML);
			 $admin_content->parse("main.form_content");  
		 break;
		 
		 case 'delete':
		     $id =$_GET['id'];
		     $query ="DELETE FROM category WHERE cat_id=$id";
             mysql_query($query) or die(mysql_error());
			 $admin_content->assign("form","Xoa thanh cong");
			 $admin_content->parse("main.form_content");
		 break;
		 
		 case 'edit':
		     $e = new XTemplate("view/category/edit.php");
			 $id = $_GET['id'];
			 $query ="SELECT * FROM category WHERE cat_id=$id";
			 $result = mysql_query($query) or die(mysql_error());
			 while($row = mysql_fetch_assoc($result))
			 {
				 $e->assign("cat",$row);
				 $e->parse("main");
			 }			 
			 $editHTML = $e->text("main");
			   
			 $admin_content->assign("form",$editHTML);
			 $admin_content->parse("main.form_content"); 
			 
		 break;
		 
		 case 'update': 
              $id = $_GET['id'];		 
             $cat_name = $_POST['cat_name'];
			 $query = "UPDATE category SET cat_name='$cat_name' WHERE cat_id=$id";
			 mysql_query($query) or die(mysql_error());
			 
			 $admin_content->assign("form","Update thanh cong");
			 $admin_content->parse("main.form_content");   
		 break;
		     
	 }
 }
?>