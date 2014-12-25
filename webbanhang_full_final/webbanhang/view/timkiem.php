<?php
include("xtemplate.class.php");
include("model.php"); 
$con = mysql_connect("localhost","root","");
mysql_select_db("baitap",$con);
error_reporting(E_ALL &~ E_NOTICE);

	$sp= new XTemplate("sp.php");
	$s= new XTemplate("kt.php");
    $tukhoa = $_GET['search-input'];
	

    $query = "SELECT * FROM sanpham WHERE id!= '' AND name LIKE '%$tukhoa%'";
    $result = mysql_query($query) or die(mysql_error());
    while($row = mysql_fetch_array($result))
  {
	  
	$sp->assign("name",$row['name']);
    $sp->assign("anh",$row['img']);
    $sp->assign("gia",$row['gia']);
	$sp->assign("id",$row['id']);
	$sp->parse("main");
 }
 $i = count($query);
 print_r($row);
 if(isset($row)==true)
 {
	 $index = new XTemplate("home21.php");
	$c1 = $sp->text("main");
    
    $index->assign("content",$c1);
    $index->parse("main");
 }
 else
 {
	
	$index = new XTemplate("home21.php");
	$c2 = $s->text("main");
    
    $index->assign("content",$c2);
    $index->parse("main");
 }
	
    $index->out("main");
?>