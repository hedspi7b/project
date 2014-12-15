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
	
	function readnews($id)
	{
	    $query = "SELECT * FROM news WHERE id= $id";
		$result = mysql_query($query) or die(mysql_error());
		$row = mysql_fetch_assoc($result);
		return $row;
	}
}
?>