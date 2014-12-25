<?php
include("xtemplate.class.php");
mysql_connect("localhost","root","");
mysql_select_db("baitap");

//Admin Content
$admin_content = new XTemplate("view/home_content.php");
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
//TOP Menu
$top_menu_array = array(
array("menu_name"=>"","menu_text"=>"Trang chu","menu_link"=>"admin.php","active"=>""),//active chi la hien vong tron
array("menu_name"=>"category","menu_text"=>"Loai san pham","menu_link"=>"admin.php?admin=category","active"=>""),
array("menu_name"=>"news","menu_text"=>"Sản Phẩm","menu_link"=>"admin.php?admin=news","active"=>""),
array("menu_name"=>"thanhtoan","menu_text"=>"Thanh Toán","menu_link"=>"admin.php?admin=thanhtoan","active"=>"")
);
$index = new XTemplate("view/template.php");
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
?>
?>