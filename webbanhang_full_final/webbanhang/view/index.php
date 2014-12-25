<?php
include("xtemplate.class.php");
include("model.php"); 

mysql_connect("localhost","root","");
mysql_select_db("baitap");
$sanpham = new XTemplate("home.php");

$a = new sanpham;

$d1 = $a->select_caocap();
$sanpham->assign("bc1",$d1[0]);
$sanpham->assign("bc2",$d1[1]);
$sanpham->assign("bc3",$d1[2]);

$d1 = $a->select_capnhat();
$sanpham->assign("cn1",$d1[0]);
$sanpham->assign("cn2",$d1[1]);
$sanpham->assign("cn3",$d1[2]);
$sanpham->assign("cn4",$d1[3]);

$sanpham->parse("main");
$sanpham->out("main");
?>