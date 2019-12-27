<?php
include('../dbconnect.php');
	session_start();
$i = $_GET['i'];



			
	 $query="delete from dailyitems where dat='$i'";
			
			$res=mysqli_query($conn,$query) or die("wrong query");
			

?>