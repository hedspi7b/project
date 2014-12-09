<?php
include("xtemplate.class.php");
include("model.php"); 

mysql_connect("localhost","root","");
mysql_select_db("baitap");
$sanpham = new XTemplate("view/home.php");

$a = new sanpham;
/*
$dstin = $a->select_banchay();

	$sanpham->assign("bc1",$dstin[0]);
	$sanpham->assign("bc2",$dstin[1]);
	$sanpham->assign("bc3",$dstin[2]);
	*/
$sanpham->parse("main");

$sanpham->out("main");
?>