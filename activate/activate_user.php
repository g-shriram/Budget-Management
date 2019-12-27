<?php
include('../dbconnect.php');
	session_start();
$q = intval($_GET['q']);
$user=$_SESSION['user'];

$query="update user_auth set status='1' where username='$user'";
			
			$res=mysqli_query($conn,$query) or die("wrong query");

if($q==1){
$query="insert into subscription (username,type,daysleft) values('$user','$q',15)";
			
			$res=mysqli_query($conn,$query) or die("wrong query");

		echo '1';
	}

if($q==2){
$query="insert into subscription (username,type,daysleft) values('$user','$q',9999)";
			
			$res=mysqli_query($conn,$query) or die("wrong query");

		echo '2';
		}
		
if($q==3){
$query="insert into subscription (username,type,daysleft) values('$user','$q',9999)";
			
			$res=mysqli_query($conn,$query) or die("wrong query");

		echo '3';
		}

?>