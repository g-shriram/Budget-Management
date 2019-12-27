<?php
include('../dbconnect.php');
	session_start();
$i = $_GET['i'];
$c = $_GET['c'];
$p = $_GET['p'];


			
	 $query="insert into dailyitems values('$i','$c','$p',NOW(),'$_SESSION[user]')";
			
			$res=mysqli_query($conn,$query) or die("wrong query");
			
			
$que=mysqli_query($conn,"select * from item where item='$i'");
		$row=mysqli_num_rows($que);
		if($row)
			{	
			
				
			}
		else
			{
				 $query="insert into item (item,cat) values('$i','$c')";
			
			$res=mysqli_query($conn,$query) or die("wrong query");
			}

?>