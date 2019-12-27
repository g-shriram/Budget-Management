<?php

	include('../dbconnect.php');
$cp = $_GET['cp'];
$ph = $_GET['ph'];
$e = $_GET['e'];
$p = $_GET['p'];
$n = $_GET['n'];
$a = $_GET['a'];
session_start();
							
		$que=mysqli_query($conn,"select * from user_auth where username='$_SESSION[user]' and password='$cp'");
		$row=mysqli_num_rows($que);
		if($row)
			{	
			   $query="update user_account set name='$n',email='$e', phone='$ph',about='$a' where username='$_SESSION[user]'";
			
			$res=mysqli_query($conn,$query) or die("wrong query");
			   $query="update user_auth set password='$p' where username='$_SESSION[user]'";
			
			$res=mysqli_query($conn,$query) or die("wrong query");
			echo '1';
			 }
			else
			echo '0';
?>