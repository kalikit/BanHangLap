<?php
		
		if(isset($_GET["quanly"]))
		{
			$row = $_GET["quanly"];
		}
		else
			$row = "";
		if ($row == "quanlylaptop") {
			include("quan_ly_laptop.php");
		}
		else if ($row == "Them") {
			include("Them.php");
		}
		else if ($row == "Edit") {
			include("Edit.php");
		}
		else if($row == "Delete"){
			include("Delete.php");
		}
		else if ($row == "Search") {
			include("Search.php");
		}
		else if ($row == "Detail") {
			include("detail.php");
		}
		else if ($row == "SortIncrease") {
			include("sort_increase.php");
		}
		else if ($row == "SortDecrease") {
			include("sort_decrease.php");
		}
		else if ($row == "Add_cart") {
			include("add_cart.php");
		}
?>