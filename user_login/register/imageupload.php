<?php

extract($_POST);
session_start();
$hide="hidden";
$src="upload.png";
		$user=$_SESSION["user1"];
		
if(isset($upload))
	{

	$banner=$_FILES['banner']['name']; 
	
 $expbanner=explode('.',$banner);
 $bannerexptype=$expbanner[1];
 $bannerpath="../../home/profile_images/".$user.".jpg";
if($bannerexptype=='jpg' || $bannerexptype=='JPG' )
 {
 $hide="";
  $src=$bannerpath;
  if(file_exists($bannerpath))
  {unlink($bannerpath);}
 move_uploaded_file($_FILES["banner"]["tmp_name"],$bannerpath);
 }
 else
{ 
$hide="hidden";
$src="notsupport.jpg";
 }
 

 
	}
?>
<head>
<link href="./css/style.css" rel="stylesheet" type="text/css" />
<link href="../css/main.css" rel="stylesheet" type="text/css" />
<link href="../css/util.css" rel="stylesheet" type="text/css" />
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script>
$(document).ready(function(){
  $("#submit").click(function(){
alert('Image uploded successfully...\n(You will be redirected to login page...)');
	 		  window.location.replace("../index.php");
  });
  
});

</script>
</head>

<body>

	
	 <form  method="post" enctype="multipart/form-data">
	    <div class="demo-table">
        <div class="form-head">Upload Image</div><br><br>
			<div class="login100-pic js-tilt" data-tilt>
					<img src="<?php echo $src;?>" id="img1" alt="IMG">
				</div><br><br>
 <input type="file" name="banner" ><br><br>
 <input type="submit" name="upload" value="Upload"  class="btnRegister"><br><br>
  <input type="button" id="submit" value="Submit"  class="btnRegister" <?php echo $hide;?>>
   </div>
        </div>
 </form>
 <script src="../vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="../vendor/bootstrap/js/popper.js"></script>
	<script src="../vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="../vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="../vendor/tilt/tilt.jquery.min.js"></script>
	<script >
		$('.js-tilt').tilt({
			scale: 1.1
		})
	</script>
<!--===============================================================================================-->
	<script src="../js/main.js"></script>

</body>
