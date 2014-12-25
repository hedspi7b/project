<?php
include("xtemplate.class.php");
$con = mysql_connect("localhost","root","");
mysql_select_db("baitap",$con);
error_reporting(E_ALL &~ E_NOTICE);
session_start();

if(isset($_GET['do'])==true)
{
	switch($_GET['do'])
	{
		case '1':
		 $query = "select * from sanpham where loaisanpham =1";
         $result = mysql_query($query) or die(mysql_error());
         $row = mysql_fetch_array($result);
		 
		 $t = new XTemplate("muc.php");
		 $t->assign("p",$row);
	      $t->parse("main");
		  $content = $t->text("main");
		break;
		
		case '2':
		$query = "Select * from sanpham where gia between 10000 and 20000";
         $result = mysql_query($query) or die(mysql_error());
		 $t = new XTemplate("muc22.php");
         while($row = mysql_fetch_array($result))
		 {
		 $t->assign("p1",$row);
	      $t->parse("main");
		 }
		 $content2 = $t->text("main");
		 $t2 = new XTemplate("muc2.php");
		 $t2->assign("muc2",$content2);
	      $t2->parse("main");
		  $content = $t2->text("main");
		break;
		
		case '3':
		$query = "SELECT * FROM sanpham WHERE id!= '' AND name LIKE '%d%'";
         $result = mysql_query($query) or die(mysql_error());
		 $t = new XTemplate("muc22.php");
         while($row = mysql_fetch_array($result))
		 {
		 $t->assign("p1",$row);
	      $t->parse("main");
		 }
		 $content2 = $t->text("main");
		 $t2 = new XTemplate("muc2.php");
		 $t2->assign("muc2",$content2);
	      $t2->parse("main");
		  $content = $t2->text("main");
		break;
		
		case '5':
		$query = "Select sanpham.*,nsx.id from nsx,sanpham 
		where nsx.id=idnsx group by nsx.id 
		having count(sanpham.id)>=all( Select count(sanpham.id) from nsx,sanpham where nsx.id=idnsx group by nsx.id)";
         $result = mysql_query($query) or die(mysql_error());
         $row = mysql_fetch_array($result);
		 //print_r($row);
		 $t = new XTemplate("5.php");
		 $t->assign("p1",$row);
	$query = "Select sanpham.*,nsx.id from nsx,sanpham 
		where nsx.id=idnsx group by nsx.id 
		having count(sanpham.id)< all( Select count(sanpham.id) from nsx,sanpham where nsx.id=idnsx group by nsx.id)";
         $result = mysql_query($query) or die(mysql_error());
         $row2 = mysql_fetch_array($result);
		 $t->assign("p2",$row2);
		 
		 $query ="Select sanpham.*,nsx.id from nsx,sanpham where nsx.id=idnsx group by nsx.id having count(sanpham.id)=5";
		 $result = mysql_query($query) or die(mysql_error());
         $row3 = mysql_fetch_array($result);
		 $t->assign("p3",$row3);
		 
	      $t->parse("main");
		  $content = $t->text("main");
		break;
		
		case '6':
		$query = "select sum(sp.gia) from sanpham as sp, hoadon as hd where sp.id=hd.idsp and ngay_mua >= '2014/1/1' and ngay_mua <= '2014/1/31' ";
         $result = mysql_query($query) or die(mysql_error());
         $row = mysql_fetch_array($result);
		 
		 $t = new XTemplate("6.php");
		 $a = $row[0];
		 $t->assign("p",$a);
	      $t->parse("main");
		  $content = $t->text("main");
		break;
		
		case '7':
		$query = "Select * from sanpham as sp group by name having count(idnsx)>1";
         $result = mysql_query($query) or die(mysql_error());
         $t = new XTemplate("muc22.php");
         while($row = mysql_fetch_array($result))
		 {
		 $t->assign("p1",$row);
	      $t->parse("main");
		 }
		 $content2 = $t->text("main");
		 $t2 = new XTemplate("muc2.php");
		 $t2->assign("muc2",$content2);
	      $t2->parse("main");
		  $content = $t2->text("main");
		 
		
		break;
		
		case '8':
		$query = "Select * from sanpham where soluong >=all(select soluong from sanpham)";
         $result = mysql_query($query) or die(mysql_error());
         $t = new XTemplate("muc22.php");
         while($row = mysql_fetch_array($result))
		 {
		 $t->assign("p1",$row);
	      $t->parse("main");
		 }
		 $content2 = $t->text("main");
		 $t2 = new XTemplate("muc2.php");
		 $t2->assign("muc2",$content2);
	      $t2->parse("main");
		  $content = $t2->text("main");
		break;
		
		case '9':
		$query = "Select * from hoadon  where tinhtrang=0";
         $result = mysql_query($query) or die(mysql_error());
         $t = new XTemplate("92.php");
         while($row = mysql_fetch_array($result))
		 {
		 $t->assign("p1",$row);
	      $t->parse("main");
		 }
		 $content2 = $t->text("main");
		 $t2 = new XTemplate("9.php");
		 $t2->assign("chen",$content2);
	      $t2->parse("main");
		  $content = $t2->text("main");
		break;
		
		case '10':
		$query = "SELECT sanpham.*,ma,m, y 
FROM sanpham,(select max(C)as ma,idsp,m,y
             from (select count(idsp) as C,idsp,month(ngay_mua) as m, year(ngay_mua) as y
                  from hoadon
                  group by idsp,month(ngay_mua),year(ngay_mua))as s
             group by m,y)as d
WHERE sanpham.id=idsp
";
         $result = mysql_query($query) or die(mysql_error());
        	     
		 $t = new XTemplate("10.php");
         while($row = mysql_fetch_array($result))
		 {
		 $ma = $row['ma'];
		 $m = $row['m'];
		 $y = $row['y'];
		 
		 $t->assign("p",$row);
		 $t->assign("max",$ma);
		 $t->assign("thang",$m);
		 $t->assign("nam",$y);
	      $t->parse("main");
		 }
		 $content2 = $t->text("main");
		 $t2 = new XTemplate("102.php");
		 $t2->assign("chen",$content2);
	      $t2->parse("main");
		  $content = $t2->text("main");
		break;
	}
	
	
}
$index = new XTemplate("demo2.php");
$index->assign("pase",$content);
$index->parse("main");
$index->out("main");
?>