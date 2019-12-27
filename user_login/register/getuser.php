<?php
include('dbconnect.php');
	
$q = $_GET['q'];

$que=mysqli_query($conn,"select * from user_auth where username='$q'");
		$row=mysqli_num_rows($que);
		if($row)
			{	
			
				echo $q;
			}
		else
			{
				echo '0';
			}

?>