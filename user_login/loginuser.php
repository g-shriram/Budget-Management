<?php
include('../dbconnect.php');
	
$q = $_GET['q'];
$p = $_GET['p'];
$que=mysqli_query($conn,"select * from user_auth where username='$p' and password='$q'");
		$row=mysqli_num_rows($que);
		if($row)
			{	
			
				$query="select * from user_auth where username='$p' and password='$q'";
			
			$res=mysqli_query($conn,$query) or die("wrong query");
			
			$row=mysqli_fetch_assoc($res);
			echo $row['lastlogin'];
		
		$query="update user_auth set lastlogin=NOW() where username='$p'";
			
			$res=mysqli_query($conn,$query) or die("wrong query");
			session_start();
				$_SESSION["user"] = $p;
			
			
			
			}
		else
			{
				echo '0';
			}

?>