<?php extract($_POST);
	 
?>			<!-- MAIN CONTENT -->	
			<div class="main-content">
		
				
				<div class="container-fluid">
				<div class="panel-body">
									<table class="table table-hover">
										<thead>
											<tr>
												
										
												<th><font face="Times New Roman, Times, serif" color="#660066" size="+3">
											Get Your Report here
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
							<div class="panel-body"><form method="post">
									<div class="input-group">
								<center>		<input width="20%" name="start" type="date" id="item" placeholder="Enter Starting date...">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
											<input width="20%" name="end" type="date" id="cat" placeholder="Enter End date...">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
												
										<input class="btn btn-primary"  id="add" type="submit" name="get" value="Get Report">
										
								</center>	</div>
									</div>
									
									<?php 
						if (isset($get)){
						if($start!="" && $end!=""){
						
				$from=date('Y-m-d',strtotime($start));
				$to=date('Y-m-d',strtotime($end));
			
								
						?>
									<div class="panel-body">
									<table class="table table-hover">
										<thead>
											<tr>
												
										
												<th><font face="Times New Roman, Times, serif" color="#999999"size="+2">
										<center>	Report     :  <?php echo $from." to ".$to; ?></center>
												</font>
												</th>
													
											
												
											</tr>
										</thead>
										</table>
										</div>
						
									
						
<div class="panel-body">
									<table class="table table-hover">
										<thead>
											<tr>
												
										
												<th><font face="Times New Roman, Times, serif" color="#00CC66" size="+3">
											<?php	$q=mysqli_query($conn,"select SUM(amt) from income where date(dat) BETWEEN '$from' and '$to' and user='$_SESSION[user]' order by dat asc") or die("wrong query");
										
											 $row=mysqli_fetch_array($q);
											 $earn=$row[0];
											 echo "Total Earn : $ ".$earn;
											 
											 ?>
												</font>
												</th>
													<th><font face="Times New Roman, Times, serif" color="#339999" size="+3"><?php	$q=mysqli_query($conn,"select SUM(amt) from income where date(dat) BETWEEN '$from' and '$to' and user='$_SESSION[user]' order by dat asc") or die("wrong query");
											
											 $row=mysqli_fetch_array($q);
											 $earn=$row[0];
											 $q=mysqli_query($conn,"select SUM(price) from dailyitems where date(dat) BETWEEN '$from' and '$to' and user='$_SESSION[user]' order by dat asc") or die("wrong query");
											
											 $row=mysqli_fetch_array($q);
											 $spent=$row[0];
											 echo "Savings : $ ".intval($earn-$spent);
											 
											 ?></font></th>
												
												
												<th><font face="Times New Roman, Times, serif" color="#FF6666" size="+3"><?php	$q=mysqli_query($conn,"select SUM(price) from dailyitems where date(dat) BETWEEN '$from' and '$to' and user='$_SESSION[user]' order by dat asc") or die("wrong query");
											
											 $row=mysqli_fetch_array($q);
											 $spent=$row[0];
											 echo "Total Spent : $ ".$spent;
											 
											 ?></font></th>
												
											</tr>
										</thead>
										</table>
										</div>
						
						<!-- TABLE HOVER -->
							<div class="panel">
								<div class="panel-heading">
									<h1 class="panel-title" ><font color="#666699" size="+2">Incomes :</h3></font>
								</div>
								<div class="panel-body">
									<table class="table table-hover">
										<thead>
											<tr>
												<th>#</th>
												<th>Income Amount</th>
												<th>Category / Sources</th>
												<th>Date</th>
												
											</tr>
										</thead>
										<tbody>
											<?php 
											$q=mysqli_query($conn,"select * from income where date(dat) BETWEEN '$from' and '$to' and user='$_SESSION[user]' order by dat asc") or die("wrong query");
											$i=0;
											 while($row=mysqli_fetch_array($q))
{?><tr>
												<td><?php echo ++$i;?></td>
												<td><?php echo $row[1];?></td>
												<td><?php echo $row[2];?></td>
												<td><?php echo $row[3];?></td>
											
											</tr>
											<?php }?>
										</tbody>
									</table>
								</div>
						</div>
							<!-- END TABLE HOVER -->
						
							<!-- TABLE HOVER -->
							<div class="panel">
								<div class="panel-heading">
									<h1 class="panel-title" ><font color="#666699" size="+2">Items bought :</h3></font>
								</div>
								<div class="panel-body">
									<table class="table table-hover">
										<thead>
											<tr>
												<th>#</th>
												<th>Item</th>
												<th>Category</th>
												<th>Price</th>
												<th>Date</th>
												
											</tr>
										</thead>
										<tbody>
											<?php 
											$q=mysqli_query($conn,"select * from dailyitems where date(dat) BETWEEN '$from' and '$to' and user='$_SESSION[user]' order by dat asc") or die("wrong query");
											$i=0;
											 while($row=mysqli_fetch_array($q))
{?><tr>
												<td><?php echo ++$i;?></td>
												<td><?php echo $row[0]?></td>
												<td><?php echo $row[1];?></td>
												<td><?php echo $row[2];?></td>
												<td><?php echo $row[3];?></td>
											
											</tr>
											<?php }?>
										</tbody>
									</table>
								</div>
									</div>
							
<!-- TABLE HOVER -->
							<div class="panel">
								<div class="panel-heading">
									<h1 class="panel-title" ><font color="#666699" size="+2">Category wise expenditure :</h3></font>
								</div>
								<div class="panel-body">
									<table class="table table-hover">
										<thead>
											<tr>
												<th>#</th>
												<th>Category</th>
												<th>Spent</th>
												
											</tr>
										</thead>
										<tbody>
											<?php 
											$q=mysqli_query($conn,"select cat,sum(price) from dailyitems where date(dat) BETWEEN '$from' and '$to' and user='$_SESSION[user]' group by(cat)") or die("wrong query");
											$i=0;
											 while($row=mysqli_fetch_array($q))
{?><tr>
												<td><?php echo ++$i;?></td>
												<td><?php echo $row[0];?></td>
												<td><?php echo $row[1];?></td>
																					
											</tr>
											<?php }?>
										</tbody>
									</table>
								</div>
							</div>
							<!-- END TABLE HOVER -->							
							
						
							
<!-- TABLE HOVER -->
							<div class="panel">
								<div class="panel-heading">
									<h1 class="panel-title" ><font color="#666699" size="+2">Maximum Spent Category :</h3></font>
								</div>
								<div class="panel-body">
									<table class="table table-hover">
										<thead>
											<tr>
												<th>#</th>
												<th>Category</th>
												<th>Spent</th>
												
											</tr>
										</thead>
										<tbody>
											<?php 
											$q=mysqli_query($conn,"select cat,sum(price) from dailyitems where date(dat) BETWEEN '$from' and '$to' and user='$_SESSION[user]' group by(cat) order by sum(price) desc limit 1") or die("wrong query");
											$i=0;
											 while($row=mysqli_fetch_array($q))
{?><tr>
												<td><?php echo ++$i;?></td>
												<td><?php echo $row[0];?></td>
												<td><?php echo $row[1];?></td>
																					
											</tr>
											<?php }?>
										</tbody>
									</table>
								</div>
							</div>
							<!-- END TABLE HOVER -->	
							
							
<!-- TABLE HOVER -->
							<div class="panel">
								<div class="panel-heading">
									<h1 class="panel-title" ><font color="#666699" size="+2">Minimum Spent Category :</h3></font>
								</div>
								<div class="panel-body">
									<table class="table table-hover">
										<thead>
											<tr>
												<th>#</th>
												<th>Category</th>
												<th>Spent</th>
												
											</tr>
										</thead>
										<tbody>
											<?php 
											$q=mysqli_query($conn,"select cat,sum(price) from dailyitems where date(dat) BETWEEN '$from' and '$to' and user='$_SESSION[user]' group by(cat) order by sum(price) asc limit 1") or die("wrong query");
											$i=0;
											 while($row=mysqli_fetch_array($q))
{?><tr>
												<td><?php echo ++$i;?></td>
												<td><?php echo $row[0];?></td>
												<td><?php echo $row[1];?></td>
																					
											</tr>
											<?php }?>
										</tbody>
									</table>
								</div>
							</div>
							<!-- END TABLE HOVER -->
							
																				
							
<!-- TABLE HOVER -->
							<div class="panel">
								<div class="panel-heading">
									<h1 class="panel-title" ><font color="#666699" size="+2">Maximum Spent Item :</h3></font>
								</div>
								<div class="panel-body">
									<table class="table table-hover">
										<thead>
											<tr>
												<th>#</th>
												<th>Item</th>
												<th>Category</th>
												<th>Spent</th>
												<th>Date</th>
												
											</tr>
										</thead>
										<tbody>
											<?php 
											$q=mysqli_query($conn,"select item,cat,price,dat from dailyitems where date(dat) BETWEEN '$from' and '$to' and user='$_SESSION[user]' order by price  desc limit 1") or die("wrong query");
											$i=0;
											 while($row=mysqli_fetch_array($q))
{?><tr>
												<td><?php echo ++$i;?></td>
												<td><?php echo $row[0];?></td>
												<td><?php echo $row[1];?></td>
												<td><?php echo $row[2];?></td>
												<td><?php echo $row[3];?></td>
																					
											</tr>
											<?php }?>
										</tbody>
									</table>
								</div>
							</div>
							<!-- END TABLE HOVER -->
							
							
<!-- TABLE HOVER -->
							<div class="panel">
								<div class="panel-heading">
									<h1 class="panel-title" ><font color="#666699" size="+2">Minimum Spent Item :</h3></font>
								</div>
								<div class="panel-body">
									<table class="table table-hover">
										<thead>
											<tr>
												<th>#</th>
												<th>Item</th>
												<th>Category</th>
												<th>Spent</th>
												<th>Date</th>
												
											</tr>
										</thead>
										<tbody>
											<?php 
											$q=mysqli_query($conn,"select item,cat,price,dat from dailyitems where date(dat) BETWEEN '$from' and '$to' and user='$_SESSION[user]' order by price  asc limit 1") or die("wrong query");
											$i=0;
											 while($row=mysqli_fetch_array($q))
{?><tr>
												<td><?php echo ++$i;?></td>
												<td><?php echo $row[0];?></td>
												<td><?php echo $row[1];?></td>
													<td><?php echo $row[2];?></td>
												<td><?php echo $row[3];?></td>
																					
											</tr>
											<?php }?>
										</tbody>
									</table>
								</div>	</div>
						
							<!-- END TABLE HOVER -->
							
							
							
							
						</div>
					<?php }}
					
					if(isset($export))
	{
$epdf=" <script> window.open( 
              'pdf.php?from=".$from."&to=".$to."', '_blank');</script> ";
			  
	 }	
					?>
							<!-- END CONDENSED TABLE -->
						</div>
					</div>
				</div>
			</div>
			<!-- END MAIN CONTENT -->

		