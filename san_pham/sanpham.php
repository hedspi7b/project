<?php
include("xtemplate.class.php");
include("model.php"); 
$con = mysql_connect("localhost","root","");
mysql_select_db("baitap",$con);
error_reporting(E_ALL &~ E_NOTICE);

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

$query = "SELECT * FROM sanpham WHERE loaisanpham = '$loai'
LIMIT $start,$perpage";
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
		   $t = new XTemplate("thanhtoan.php");
          // $news = $a->read($_GET['id']);

		   //$t->assign("jkjkjkjk",$news);
	       $t->parse("main");
		   $content = $t->text("main");
		   
		break;
	}
}

$index = new XTemplate("home21.php");
$index->assign("content",$content);
$index->parse("main");
$index->out("main");

?>