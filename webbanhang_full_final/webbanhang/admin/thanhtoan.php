<?php
include("model.php"); 
$v = new sanpham;
$admin_content = new XTemplate("view/tt.php");
if(isset($_GET['xoa'])!=true)
{
if(isset($_GET['do'])!= true)
{
$hd= new XTemplate("view/thanhtoan/hd.php");
$query = "SELECT * FROM hoadon WHERE tinhtrang = 0";
$result = mysql_query($query) or die(mysql_error());
while($row = mysql_fetch_array($result))
{
	$hd->assign("id",$row['id']);
	$hd->parse("main");
}

$selectHTML = $hd->text("main");
$admin_content->assign("form",$selectHTML);
$admin_content->parse("main.form_content");
}
else
{
$s= new XTemplate("view/thanhtoan/select.php");
$id = $_GET['do'];
$query = "SELECT * FROM hoadon WHERE id = $id";
$result = mysql_query($query) or die(mysql_error());
$row = mysql_fetch_assoc($result);
$chuoi = $row['idsp'];
$a = explode(" ",$chuoi);
$p = "";
$tong =0;
for($i=1;$i<count($a);$i++)
{
		 $idsp = $a[$i];
$query = "SELECT * FROM sanpham WHERE id = $idsp";
$result = mysql_query($query) or die(mysql_error());
$r = mysql_fetch_assoc($result);
$p = $p.", ".$r['name'];
$tong = $tong + $r['gia'];
}

$s->assign("cat",$row);
$s->assign("ten",$p);
$s->assign("tien",$tong);
$s->parse("main.list_cat");
$s->parse("main");


	
$selectHTML = $s->text("main");
			   
$admin_content->assign("form",$selectHTML);
$admin_content->parse("main.form_content"); 
}
}
if(isset($_GET['xoa'])== true)
{
	$id = $_GET['do'];
	$x= new XTemplate("view/thanhtoan/xoa.php");
    $a=$_COOKIE['id'];
	$query = "UPDATE hoadon SET id_admin =$a WHERE id=$id";
    $result = mysql_query($query) or die(mysql_error());
	
	$query = "UPDATE hoadon SET tinhtrang=1 WHERE id=$id";
    $result = mysql_query($query) or die(mysql_error());
	$x->assign("id",$id);
	$x->parse("main");
	$selectHTML = $x->text("main");
			   
    $admin_content->assign("form",$selectHTML);
    $admin_content->parse("main.form_content"); 
   
}
?>