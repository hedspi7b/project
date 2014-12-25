<?php
include("xtemplate.class.php");
mysql_connect("localhost","root","");
mysql_select_db("baitap");
error_reporting(E_ALL &~ E_NOTICE);
session_start();
//Admin Content
$admin_content = new XTemplate("view/home_content.php");
$index = new XTemplate("view/template.php");
if(isset($_GET['admin'])==true)
{
	switch($_GET['admin'])
	{
		case 'news':
		    include("news.php");
		break;
		case 'category':
		    include("category.php");
		break;
		case 'thanhtoan':
		    include("thanhtoan.php");
	    break;
	}
}
    $admin_content->parse("main");
	$admin_content_text = $admin_content->text("main");
////////////////////////////////////////////////////////////////////////////	
	$user = $_POST['user_name'];
    $pass = $_POST['pass'];

	//setcookie("user",$user,time()+60*60*24);
	//setcookie("pass",$pass,time()+60*60*24);
	//$user=$_COOKIE['user'];
	//$pass=$_COOKIE['pass'];

$query = "SELECT * FROM thanhvien WHERE user = '$user' AND pass= '$pass'";
$name = "id";
$result = mysql_query($query) or die(mysql_error());
$row = mysql_fetch_array($result);
	if(mysql_num_rows($result)==1)
	{
		$id = $row['id'];
		setcookie($name, $id, time() + 86400 , "/");
		$_SESSION['1'] = 1;
		setcookie("dd","1",time()+60*30);
	}
if(isset($_SESSION['1']))
{
		
		$top_menu_array = array(
array("menu_name"=>"","menu_text"=>"Trang chu","menu_link"=>"admin.php","active"=>""),//active chi la hien vong tron
array("menu_name"=>"category","menu_text"=>"Loai san pham","menu_link"=>"admin.php?admin=category","active"=>""),
array("menu_name"=>"news","menu_text"=>"Sản Phẩm","menu_link"=>"admin.php?admin=news","active"=>""),
array("menu_name"=>"thanhtoan","menu_text"=>"Thanh Toán","menu_link"=>"admin.php?admin=thanhtoan","active"=>""));

$index->assign("admin_content",$admin_content_text);

for($i=0;$i<count($top_menu_array);$i++)
{
	if(isset($_GET['admin']) == false)
	{
		$top_menu_array[0]['active'] = "active";
	}
	else
	{
        if($_GET['admin']==$top_menu_array[$i]['menu_name'])
	       {
		      $top_menu_array[$i]['active'] = "active";
	       }
	}
    $index->assign("tm",$top_menu_array[$i]);
	$index->parse("main.top_menu");
}

$index->parse("main");
$index->out("main");
	}
if($_SESSION['1']!=1)
{	  

include("login2.php");	
}


?>