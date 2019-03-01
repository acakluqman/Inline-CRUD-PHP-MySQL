<!DOCTYPE html>
<html lang="en">
<title>TC </title>
	<head>
		<meta charset="UTF-8" name="viewport" content="width=device-width, initial-scale=1"/>
		<link rel="stylesheet" type="text/css" href="css/bootstrap.css"/>
	</head>
<body>
	
		    <p align="center">
			<a href="http:www.//resulthosting.in" target="new"><img src="https://www.resulthosting.in/images/logo.png"></a>
		
	<div>

		<hr style="border-top:1px dotted #ccc;"/>
		<center>
		<a href="tc-search-system.html" target="new"><span class="label label-primary">Tc Search Demo >> This Is What Students Will See</span></a> || <a href="logout.php"><span class="label label-danger">Logout</span></a></strong>
		</center>
		<br />
		<div class="alert alert-info" role="alert">
			<strong><center>Get This ONLINE TC System For Your School, College, University, Institute Contact Us At Email: sudhanshu.pandey159@gmail.com </center>
				
				<br>	
				<p align="justify">Transfer certificate is a certificate issued to a student on his request by the in charge of the institution ie. College or School when the student wants to leave that institution. The transfer certificate has in it personal details of the student mentioned in it and states the date of birth of the student as per the record of the said institute, when and which course the student studied in the institution, the last class passed or failed and further certifies that the said student has paid all his dues to the institution and is not a defaulter. It also has mentioned in the name of the mother and the name of the father and the occupation of the family as per its records.</p>
					</div>
		<br />
		<div class="alert alert-success" role="alert">
		<table class="table table-bordered">
			<thead>
				<tr>
					<th>Reg No</th>
					<th>Student Name</th>
					<th>Father's Name</th>
					<th>Mother's Name</th>
					<th>DOB</th>
					<th>Action</th>
				</tr>
				
				<form method="POST" action="save_tc.php">
				    <td><input type="text" name="reg" class="form-control" required="required"/></td>
					<td><input type="text" name="name" class="form-control" required="required" /></td>
					<td><input type="text" name="fname" class="form-control" required="rquired" /></td>
					<td><input type="text" name="mname" class="form-control" required="required" /></td>
					<td><input type="date" name="dob" class="form-control" required="required"/></td>
<td><button name="save" class="btn btn-primary"><span class="glyphicon glyphicon-save"></span>  Save TC</button></form></td>
			       
			</thead>
			<tbody>
				<?php
					require 'conn.php';
					$query = mysqli_query($conn, "SELECT * FROM `tc` ORDER BY `reg` ASC") or die(mysqli_error());
					while($fetch = mysqli_fetch_array($query)){
				?>  
		            
			        
				    <tr class="del_mem<?php echo $fetch['mem_id']?>">
					<td><?php echo $fetch['reg']?></td>
					<td><?php echo $fetch['name']?></td>
					<td><?php echo $fetch['fname']?></td>
					<td><?php echo $fetch['mname']?></td>
					<td><?php echo $fetch['dob']?></td>
					<td><button type="button" class="btn btn-danger btn_del" id="<?php echo $fetch['mem_id']?>"><span class="glyphicon glyphicon-remove"></span> Delete TC</button></td>
				</tr>
				<?php
					}
				?>
			</tbody>
		</table>
	</div>
						<!---footer--->
				<p align="center">&copy; 2019 <a href="http://resulthosting.in" target="new">Result Hosting</a>. All rights reserved | <a href="#">Terms </a>  | <a href="#">Privacy Policy</a></p>
			<!---footer--->

	</div>
	
	<div class="modal fade" id="modal_confirm" aria-hidden="true">
		<div class="modal-dialog modal-dialog-centered">
			<div class="modal-content">
				<div class="modal-header">
					<h3 class="modal-title" align="center"><a href="http://resulthosting.in"><img src="https://www.resulthosting.in/images/logo.png"></a></h3>
				</div>
				<div class="modal-body">
					<center><h4>Are you sure you want to delete this TC?</h4></center>
				</div>
				<div class="modal-footer" align="center">
					<button type="button" class="btn btn-danger" data-dismiss="modal">No</button>
					<button type="button" class="btn btn-success" id="btn_yes">Yes</button>
				</div>
				
			</div>
		</div>
	</div>
	
<script src="js/jquery-3.2.1.min.js"></script>
<script src="js/bootstrap.js"></script>
<script src="js/script.js"></script>
</body>	
</html>