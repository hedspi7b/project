<?php
class sanpham
{
	function select_banchay()
	{
		$arr = array();
		$query = "SELECT * FROM banchay";
		$result = mysql_query($query) or die(mysql_error());
		while($row = mysql_fetch_assoc($result))
		{
			$arr[] = $row;
		}
		return $arr;
	}
	
	function select_capnhat()
	{
		$arr = array();
		$query = "SELECT * FROM capnhat";
		$result = mysql_query($query) or die(mysql_error());
		while($row = mysql_fetch_assoc($result))
		{
			$arr[] = $row;
		}
		return $arr;
	}
	
	function read($id)
	{
	    $query = "SELECT * FROM sanpham WHERE id= $id";
		$result = mysql_query($query) or die(mysql_error());
		$row = mysql_fetch_assoc($result);
		return $row;
	}
	
	
	function xl()
	{
		   $query = "SELECT * FROM sanpham";
           $result = mysql_query($query) or die(mysql_error());
           while($row = mysql_fetch_array($result))
    { 		   
           if(isset($_SESSION[".$row[id]."])==true)
		   {   
		   $p = $p." ".$row['id'];
		   }
    }
	
        return $p;
	}
	
}
?>