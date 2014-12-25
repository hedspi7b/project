<?php
session_start();
error_reporting(E_ALL &~ E_NOTICE);
echo $_SESSION['user2']."<br>";
echo $_COOKIE['id'];
//s2.php => loi
//s1 => s2 => admin
?>