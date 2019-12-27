<?php
include('dbconnect.php');
	session_start();
$u = $_GET['u'];
$ph = $_GET['ph'];
$e = $_GET['e'];
$p = $_GET['p'];
$n = $_GET['n'];
session_start();
				$_SESSION["user1"] = $u;
 $query="insert into user_auth values('$u','$p',NOW(),0)";
			
			$res=mysqli_query($conn,$query) or die("wrong query");
			
$query="insert into user_account(username,email,phone,name) values('$u','$e','$ph','$n')";
			
			$res=mysqli_query($conn,$query) or die("wrong query");
echo 0;
?>