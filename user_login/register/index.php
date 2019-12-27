<?php
include('dbconnect.php');

?>
<html>
<head>
<title>Dashbord </title>
<link href="./css/style.css" rel="stylesheet" type="text/css" />

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script>
function checkpass1() {
var a = document.getElementById("pswd");
var b = document.getElementById("cpswd");
if(a.value==b.value)
{
   b.style.background="#b2ffb2";
   $("#phone").prop( "disabled", false );
   	$("#pswd").prop( "disabled", true );
		$("#cpswd").prop( "disabled", true );

   
  }
 else
 {
   b.style.background="#FEA390";
  } 
}

function checkphone() {

var a = document.getElementById("phone");

if(a.value.length != 10)
{
   a.style.background="#FEA390";
  } 
  else{
     a.style.background="#b2ffb2";
	 	$("#phone").prop( "disabled", true );
	 	$("#email").prop( "disabled", false );
  }
}

function checkemail()
{
var a = document.getElementById("email");
var x=a.value;
var atposition=x.indexOf("@");  
var dotposition=x.lastIndexOf(".");  
if (atposition<1 || dotposition<atposition+2 || dotposition+2>=x.length){  
   a.style.background="#FEA390";
  }  
else
{
a.style.background="#b2ffb2";
$("#email").prop( "disabled", true );
$("#reg").show();

}
}

function checkpass() {
var myInput = document.getElementById("pswd");
var lowerCaseLetters = /[a-z]/g;
var upperCaseLetters = /[A-Z]/g;
  // Validate numbers
  var numbers = /[0-9]/g;
   if(!myInput.value.match(lowerCaseLetters)) {  
    alert("Password must contain atleast one lowercase ...");
  }
 else if(!myInput.value.match(upperCaseLetters)) {
    alert("Password must contain atleast Uppercase ...");
  }
 else if(!myInput.value.match(numbers)) {
    alert("Password must contain atleast one numeric digit ...");
  }
 else if(myInput.value.length <8) {
   alert("Password must contain atleast 8 characters ...");
  }  
  else{
  myInput.style.background="#b2ffb2";
  }
}

function check_user(str) {
  
        var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
               var c_user=this.responseText;
			  	if(c_user!='0'){
				alert('Username Not available...');
				$("#uname").css("background-color", "#FEA390");
				$("#uname").val("");
				document.getElementById("uname").placeholder = "Try different Username..";				
				}
				else{
					
				$("#uname").css("background-color", "#b2ffb2");
				$("#pswd").prop( "disabled", false );
	$("#cpswd").prop( "disabled", false);
	$("#uname").prop( "disabled", true );
			
				}
            }
        };
        xmlhttp.open("GET", "getuser.php?q=" + str, true);
        xmlhttp.send();
    
}

function reg_user(user,pass,phone,email,name) {
  
        var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
               alert('Registered Successfully... \n You can activate your account at first time login...\n ');
			    window.location.replace("imageupload.php");
				
            }
        };
        xmlhttp.open("GET", "reguser.php?u=" + user + "&p="+pass+"&ph="+phone+"&e="+email+"&n="+name, true);
        xmlhttp.send();
    
}

$(document).ready(function(){
var name = prompt("Please enter your name to continue ...", "Harry Potter");
	$("#pswd").prop( "disabled", true );
	$("#cpswd").prop( "disabled", true );
	$("#phone").prop( "disabled", true );
	$("#email").prop( "disabled", true );
	$("#reg").hide();
 $("#uname").blur(function(){
 if( $("#uname").val()!="")
check_user($("#uname").val());
});

 $("#clear").click(function(){
 $("#uname").prop( "disabled", false );
  $("#uname").val("");
  $("#pswd").val("");
  $("#cpswd").val("");
  $("#phone").val("");
  $("#email").val("");
$("#pswd").prop( "disabled", true );
	$("#cpswd").prop( "disabled", true );
	$("#phone").prop( "disabled", true );
	$("#email").prop( "disabled", true );
	$("#reg").hide();
});

$("#reg").click(function(){
reg_user($("#uname").val(),$("#pswd").val(),$("#phone").val(),$("#email").val(),name);
});
		
  });
  
 

</script>
</head>
<body>
    <form name="frmRegistration" >
        <div class="demo-table">
        <div class="form-head">Sign Up</div>
            

            <div class="field-column">
                <label>Username</label>
                <div>
                    <input type="text" class="demo-input-box" id="uname" name="uname">
                </div>
			
            </div>
            
            <div class="field-column">
                <label>Password</label>
                <div><input type="password" class="demo-input-box" id="pswd" onBlur="checkpass();"
                    name="pass" value=""></div>
            </div>
            <div class="field-column">
                <label>Confirm Password</label>
                <div>
                    <input type="password" class="demo-input-box" id="cpswd" onKeyUp="checkpass1();"
                        name="cpass" value="">
                </div>
            </div>
            <div class="field-column">
                <label>Phone number</label>
                <div>
                    <input type="number" class="demo-input-box" id="phone" onKeyUp="checkphone();"
                        name="phone">
                </div>

            </div>
            <div class="field-column">
                <label>Email</label>
                <div>
                    <input type="text" class="demo-input-box" id="email" onKeyUp="checkemail();"
                        name="email"
                 >
                </div>
            </div>
            <div class="field-column">
                <div class="terms">
                    <input type="checkbox" name="termsac" checked="checked" disabled="disabled"> I accept terms
                    and conditions
                </div>
                <div id="reg">
					<input type="button" class="btnRegister" value="Login" id="reg">
                   
                </div>
			
				<br><br>
				 <div id="clear">
                    <input type="submit" id="clear"
                        name="submit1" value="clear"
                        class="btnRegister">
                </div>
            </div>
        </div>
    </form>
</body>
</html>