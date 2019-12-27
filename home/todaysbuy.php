 <?php
  $num=0;
  
   $q=mysqli_query($conn,"select * from item order by item") or die("wrong query");
			 while($row=mysqli_fetch_array($q))
{
       $item[$num]=$row[1]; 
	   $cat[$num++]=$row[2];
	   
  }
   ?>
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script>

 function additem(item,cat,price) {
  
        var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                c_user=this.responseText;
				 window.location.replace("index.php?page=todaysbuy");
			
            }
        };
        xmlhttp.open("GET", "additem.php?i=" + item+ "&c="+cat+"&p="+price, true);
        xmlhttp.send();
    
}

 function deleteitem(id) {
  if(confirm('you are deleting the item ...')){
        var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                c_user=this.responseText;
				window.location.replace("index.php?page=todaysbuy");
			
            }
        };
        xmlhttp.open("GET", "deleteitem.php?i=" + id, true);
        xmlhttp.send();}
    
}

function suggess(str,str1) {
  $("#item").val(str);
  $("#cat").val(str1);
   $("#price").focus();
   $("#sug").hide();
}

$(document).ready(function(){
$("#sug").hide();
 $("#item").focus();


 $("#item").keypress(function (e) {
 var key = e.which;

 
 if(key == 13)  // the enter key code
  {
   $("#cat").focus();$("#sug").hide();
   }
  else
  {
  
   $("#sug").show();
   var value = $(this).val().toLowerCase();
    $("#myTable tr").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
   
   
 
  }
});



 $("#cat").keypress(function (e) {
 var key = e.which;
 if($("#cat").val()!=""){
 if(key == 13)  // the enter key code
  {
   $("#price").focus();
  }
  }
});  

 $("#price").keypress(function (e) {
 var key = e.which;
 if($("#price").val()!=""){
 if(key == 13)  // the enter key code
  {
  if($("#item").val()!="" && $("#cat").val()!="" && $("#price").val()!="")  // the enter key code
  {
 
   additem(  $("#item").val(), $("#cat").val(), $("#price").val());
    $("#item").val("");
  $("#cat").val("");
  $("#price").val("");
    $("#item").focus();
  }
  
  
  }
  }
  
});  
  
 $("#add").click(function () {
 
 if($("#item").val()!="" && $("#cat").val()!="" && $("#price").val()!="")  // the enter key code
  {
   
  additem(  $("#item").val(), $("#cat").val(), $("#price").val());
  $("#item").val("");
  $("#cat").val("");
  $("#price").val("");
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
											<?php	$q=mysqli_query($conn,"select SUM(price) from dailyitems where date(dat)=date(now()) and user='$_SESSION[user]' order by dat asc") or die("wrong query");
											$i=0;
											 $row=mysqli_fetch_array($q);
											 echo "Today's Spent : $ ".$row[0];
											 
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
								<center>		<input width="20%" type="text" id="item" placeholder="Enter item name...">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
											<input width="20%" type="text" id="cat" placeholder="Enter Category...">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
												<input width="20%" type="text" id="price" placeholder="Enter item price...">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
										<button class="btn btn-primary"  id="add" type="button">Add!</button>
								</center>	</div>
									</div>

						<div class="col-md-6">
									<div class="panel" id="sug">
								<div class="panel-heading">
									<h3 class="panel-title">Suggesseions</h3>
								</div>
								<div class="panel-body">
									<table class="table table-hover">
										<thead>
											<tr>
												<th>#</th>
												<th>Item</th>
												<th>Category</th>
												
												
											</tr>
										</thead>
										<tbody id="myTable">
											<?php 
											$q=mysqli_query($conn,"select * from item order by item") or die("wrong query");
											$i=1;
											 while($i<=$num)
{?><tr>
												<td><?php echo $i;?></td>
												<td><?php echo $item[$i-1]?></td>
												<td><?php echo $cat[$i-1];?></td>
												<td><button class="btn btn-primary"  id="<?php echo $i;?>" value="<?php echo "sug".$i-1;?>" onClick="suggess('<?php echo $item[$i-1];?>','<?php echo $cat[$i-1];?>');" type="button">Select!</button></td>
											
											</tr>
											<?php $i++;}?>
										</tbody>
									</table>
								</div>
						
							</div><br><br><br><br><br>
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
												<th>Item</th>
												<th>Category</th>
												<th>Price</th>
												
											</tr>
										</thead>
										<tbody>
											<?php 
											$q=mysqli_query($conn,"select * from dailyitems where date(dat)=date(now()) and user='$_SESSION[user]' order by dat asc") or die("wrong query");
											$i=0;
											 while($row=mysqli_fetch_array($q))
{?><tr>
												<td><?php echo ++$i;?></td>
												<td><?php echo $row[0]?></td>
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

		