<?php
include('../dbconnect.php');
	session_start();
$i = $_GET['i'];
$c = $_GET['c'];



			
	 $query="insert into income values('$_SESSION[user]','$i','$c',NOW())";
			
			$res=mysqli_query($conn,$query) or die("wrong query");
			
	
?>