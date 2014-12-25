<?php
include("xtemplate.class.php");
include("model.php"); 
$con = mysql_connect("localhost","root","");
mysql_select_db("baitap",$con);
error_reporting(E_ALL &~ E_NOTICE);
session_start();
$a = new sanpham;
$query = "SELECT * FROM sanpham";
$result = mysql_query($query) or die(mysql_error());
$total = mysql_num_rows($result);
$perpage =12;
$numofpage = ceil($total/$perpage);
$loai = $_GET['loai'];
if(isset($_GET['page'])==true)
{
  $start = ($_GET['page']-1)* $perpage;
}
else
{
	$start=0;
}
$sp= new XTemplate("sp.php");
$h=$_GET['h'];
$query = "SELECT * FROM sanpham WHERE loaisanpham = '$loai'";
$tukhoaQ = "";
if(isset($_GET['h']))
{
	$tukhoaQ = " and idnsx = $h ";
}
$l = "LIMIT $start,$perpage";
$query = $query.$tukhoaQ.$l;
$result = mysql_query($query) or die(mysql_error());
while($row = mysql_fetch_array($result))
{
	$sp->assign("name",$row['name']);
    $sp->assign("anh",$row['img']);
    $sp->assign("gia",$row['gia']);
	$sp->assign("id",$row['id']);
	$sp->parse("main");
}
$newHTML = $sp->text("main");
$content = $newHTML;

if(isset($_GET['do'])==true)
{
	switch($_GET['do'])
	{
		case 'read':
		   $read = new XTemplate("read.php");
           $news = $a->read($_GET['id']);

		   $read->assign("read",$news);
	       $read->parse("main");
		   $content = $read->text("main");
		   
		break;
		
		case 'tt':
		if(isset($_GET['id']))
		{
         $news = $a->read($_GET['id']);
		   $v = $_GET['id'];
		   
		   if(isset($_SESSION[".$v."])!=true)
		   {
		   $_SESSION["tong"] = $_SESSION["tong"] + $news['gia'];
		   }
		   $_SESSION[".$v."] = $_GET['id'];
		}
		   $t = new XTemplate("thanhtoan.php");
		   $t2 = new XTemplate("tt.php");
		   
		  
	       $query = "SELECT * FROM sanpham";
           $result = mysql_query($query) or die(mysql_error());
           while($row = mysql_fetch_array($result))
{		   
           if(isset($_SESSION[".$row[id]."])==true)
		   {   
		   $t2->assign("tt",$row);
	       $t2->parse("main2");
		   $t = $t2->text("main2");
		   $k = new XTemplate("thanhtoan.php");
           $k->assign("chen",$t);
		   $k->assign("tong",$_SESSION["tong"]);
	       $k->parse("main");
		   }
}
		   $content = $k->text("main");
		break;
		
	case 'hd':
	       if(isset($_GET['save'])!=true)
		{
	       $hd = new XTemplate("hoadon.php");
		   $hd->parse("main");
		   $content = $hd->text("main");
		}
		else
		{
			$name = $_POST['name'];
			$email = $_POST['email'];
			$phone = $_POST['phone'];
			$cmt = $_POST['cmtnd'];
			$address = $_POST['address'];
			
			$p = $a->xl();
	        $date = $a->ngay();
			
			$query = "INSERT INTO hoadon VALUES ('','$name','$email','$phone','$cmt','$address','','$p','','$date')";
		
			mysql_query($query) or die(mysql_error());
			$ht = new XTemplate("ht.php");
		   $ht->parse("main");
		   $content = $ht->text("main");
		}
	break;
	
	case 'xoa':
	 $query = "SELECT * FROM sanpham";
           $result = mysql_query($query) or die(mysql_error());
           while($row = mysql_fetch_array($result))
{		   
           if(isset($_SESSION[".$row[id]."])==true)
		   {   
		   unset($_SESSION[".$row[id]."]);
		   }
}
	break;
		}
	
}

$index = new XTemplate("home21.php");
$index->assign("content",$content);
//$index->parse("main");
$index->assign("page",$phantrang);
$index->parse("main");
$index->out("main");

?>