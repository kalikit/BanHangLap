<?php
		
		if(isset($_GET["quanly_user"]))
		{
			$row = $_GET["quanly_user"];
		}
		else
			$row = "";
		if ($row == "quan_ly_user") {
			include("quan_ly_user.php");
		}elseif ($row == "them_user") {
			include("them_user.php");
		}elseif ($row == "edit_user") {
			include("edit_user.php");
		}elseif($row == "delete_user"){
			include("delete_user.php");
		}elseif ($row == "search_user") {
			include("search_user.php");
		}
		
?>