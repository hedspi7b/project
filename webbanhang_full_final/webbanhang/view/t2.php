<?php
include("model.php");
$a = new sanpham;
$d = $a->ngay();

$c = 24/12/2014;
if($c<$d)
echo $d;
