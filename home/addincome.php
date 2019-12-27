
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script>

 function additem(item,cat) {
  
        var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                c_user=this.responseText;
				 window.location.replace("index.php?page=addincome");
			
            }
        };
        xmlhttp.open("GET", "additem1.php?i=" + item+ "&c="+cat, true);
        xmlhttp.send();
    
}

 function deleteitem(id) {
  if(confirm('you are deleting the item ...')){
        var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                c_user=this.responseText;
				window.location.replace("index.php?page=addincome");
			
            }
        };
        xmlhttp.open("GET", "deleteitem1.php?i=" + id, true);
        xmlhttp.send();}
    
}



$(document).ready(function(){

 $("#item").focus();


 $("#item").keypress(function (e) {
 var key = e.which;

  if($("#item").val()!="" )  // the enter key code
  { if(key == 13)  // the enter key code
  {
   $("#cat").focus();
   }
   }
 });



 $("#cat").keypress(function (e) {
 var key = e.which;
 if($("#cat").val()!=""){
 if(key == 13)  // the enter key code
  {
  if($("#item").val()!="" && $("#cat").val()!="")  // the enter key code
  {
 
   additem(  $("#item").val(), $("#cat").val());
    $("#item").val("");
  $("#cat").val("");
    $("#item").focus();
  }
  
  
  }
  }
  
});  
  
 $("#add").click(function () {
 
 if($("#item").val()!="" && $("#cat").val()!="")  // the enter key code
  {
   
  additem(  $("#item").val(), $("#cat").val());
  $("#item").val("");
  $("#cat").val("");
     $("#item").focus();
  }
  else
  alert("Please fill all the fields...");
 

  
}); 

 
  
});
</script> 
			<!-- MAIN CONTENT -->	
			<div class="main-content">
		
				
				<div class="container-fluid">
				<div class="panel-body">
									<table class="table table-hover">
										<thead>
											<tr>
												
										
												<th><font face="Times New Roman, Times, serif" color="#660066" size="+3">
											<?php	$q=mysqli_query($conn,"select SUM(amt) from income where date(dat)=date(now()) and user='$_SESSION[user]' order by dat asc") or die("wrong query");
											$i=0;
											 $row=mysqli_fetch_array($q);
											 echo "Today's Income : $ ".$row[0];
											 
											 ?>
												</font>
												</th>
												<th><?php

// Return date/time info of a timestamp; then format the output
$mydate=getdate(date("U"));
echo "$mydate[weekday], $mydate[month] $mydate[mday], $mydate[year]";
?></th>
												
											</tr>
										</thead>
										</table>
										</div>
					<div class="row">
							<div class="panel-body">
									<div class="input-group">
								<center>		<input width="20%" type="text" id="item" placeholder="Enter amount...">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
											<input width="20%" type="text" id="cat" placeholder="Enter Src/Category...">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
										<button class="btn btn-primary"  id="add" type="button">Add!</button>
								</center>	</div>
									</div>

						<div class="col-md-6">
									
							<!-- TABLE HOVER -->
							<div class="panel">
								<div class="panel-heading">
									<h3 class="panel-title">Today's List</h3>
								</div>
								<div class="panel-body">
									<table class="table table-hover">
										<thead>
											<tr>
												<th>#</th>
												<th>Income Amount</th>
												<th>Source / Category</th>
																								
											</tr>
										</thead>
										<tbody>
											<?php 
											$q=mysqli_query($conn,"select * from income where date(dat)=date(now()) and user='$_SESSION[user]' order by dat asc") or die("wrong query");
											$i=0;
											 while($row=mysqli_fetch_array($q))
{?><tr>
												<td><?php echo ++$i;?></td>
											
												<td><?php echo $row[1];?></td>
												<td><?php echo $row[2];?></td>
												<td><button class="btn btn-primary"  id="delete" value="<?php echo $row[3];?>" onClick="deleteitem(this.value);" type="button">Delete!</button></td>
											
											</tr>
											<?php }?>
										</tbody>
									</table>
								</div>
						
							<!-- END TABLE HOVER -->
						</div>
					
							<!-- END CONDENSED TABLE -->
						</div>
					</div>
				</div>
			</div>
			<!-- END MAIN CONTENT -->

		