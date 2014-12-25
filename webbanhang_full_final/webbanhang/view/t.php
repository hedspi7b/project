<?php


include("xtemplate.class.php");
include("model.php"); 
$a = new sanpham;
$p = $a->ngay(); 
print_r($p);

?>
