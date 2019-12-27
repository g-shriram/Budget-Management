<?php

extract($_POST);


$src="profile_images/".$row['username'].".jpg";

		
if(isset($upload))
	{
$banner=$_FILES['banner']['name']; 
	
 $expbanner=explode('.',$banner);
 $bannerexptype=$expbanner[1];
 $bannerpath="profile_images/".$user.".jpg";
if($bannerexptype=='jpg' || $bannerexptype=='JPG' )
 {
 
 
  if(file_exists($bannerpath))
  {unlink($bannerpath);}
 move_uploaded_file($_FILES["banner"]["tmp_name"],$bannerpath);
  $src=$bannerpath;

  echo $src;
 }
 else
{ 

$src="profile_images/notsupport.jpg";
 }
 

 
	}
?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script>
function update(str,pass,phone,email,name,about) {
  
        var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
               var c_user=this.responseText;
			  			 	if(c_user=='0'){
				alert('Invalid Current Password...');
				}
				else{
					
			alert('Profile updated Successfully...');
			
				}
            }
        };
        xmlhttp.open("GET", "updatepro.php?cp=" + str+ "&p="+pass+"&ph="+phone+"&e="+email+"&n="+name+"&a="+about, true);
        xmlhttp.send();
    
}
$(document).ready(function(){




 $("#editprofile").click(function(){
var cpass = prompt("Please enter current password to update profile ...", "");

update(cpass,$("#pass").val(),$("#phone").val(),$("#email").val(),$("#name").val(),$("#about").val());
});


		
  });
  
 

</script>	<!-- MAIN CONTENT -->
			<div class="main-content">
				<div class="container-fluid">
					<div class="panel panel-profile">
						<div class="clearfix">
							<!-- LEFT COLUMN -->
							<div class="profile-left">
								<!-- PROFILE HEADER -->
								<div class="profile-header">
									<div class="overlay"></div>
									<div class="profile-main">
										<img src="<?php echo $src;?>" height="190" class="img-circle" alt="Image  does not supported" >
										
										<br><br><font color="#6633CC"><input id="name" type="text"  value=<?php echo $row['name'];?> /></font>
										<br><span class="online-status status-available">Available</span>									</div>
									<div class="profile-stat">
										<div class="row">
											<div class="col-md-4 stat-item">
												45 <span>Projects</span>											</div>
											<div class="col-md-4 stat-item">
												15 <span>Awards</span>											</div>
											<div class="col-md-4 stat-item">
												2174 <span>Points</span>											</div>
										</div>
									</div>
								</div>
								<!-- END PROFILE HEADER -->
						<!-- PROFILE DETAIL -->
								<div class="profile-detail">
									<div class="profile-info">
										<h4 class="heading">Basic Info</h4>
										<ul class="list-unstyled list-justify">
											 <form  method="post" enctype="multipart/form-data">
	    <div class="demo-table">
        <div class="form-head">Upload Image</div><br><br>
			
 <input type="file" name="banner" ><br><br>
 <input type="submit" name="upload" value="Upload"  class="btnRegister"><br><br>

        </div>
 </form>
											<li>Username <span><?php echo $row['username'];?></span></li><br>
											<li>Password<span><input type="password" class="form-control" id="pass" value="********" /></span></li>
											<li>Mobile <span><input type="text" class="form-control" id="phone" value=<?php echo $row['phone'];?> /></span></li>
											<br><li>Email <span><input type="text" class="form-control" id="email" value=<?php echo $row['email'];?> /></span></li>
											
										</ul>
									</div>
									<div class="profile-info">
										<h4 class="heading">Social</h4>
										<ul class="list-inline social-icons">
											<li><a href="#" class="facebook-bg"><i class="fa fa-facebook"></i></a></li>
											<li><a href="#" class="twitter-bg"><i class="fa fa-twitter"></i></a></li>
											<li><a href="#" class="google-plus-bg"><i class="fa fa-google-plus"></i></a></li>
											<li><a href="#" class="github-bg"><i class="fa fa-github"></i></a></li>
										</ul>
									</div>
									<div class="profile-info">
										<h4 class="heading">About</h4>
										<textarea id="about" rows="5" cols="40">
<?php echo $row['about'];?>
</textarea>
									<div class="text-center">
  <input type="button" id="editprofile" value="Update Profile"  class="btn btn-primary" ></div>
								</div>
								<!-- END PROFILE DETAIL -->
							</div>
							<!-- END LEFT COLUMN -->
							
							<!-- END RIGHT COLUMN -->
						</div>
					</div>
				</div>
			</div>
			<!-- END MAIN CONTENT -->
		