<?php
session_start();
if (isset($_SESSION['id'])) {
	//date_default_timezone_set('Asia/Calcutta');
    //$permit = $_SESSION['permit'];
   // $year=date("Y");
	//$query = "select batch_id from batch where end_year>=$year";
	//$result = mysqli_query($dbcon, $query)
	//or die('Error querying database.');
    //$row = mysqli_fetch_array($result);
	include_once("../dbconnect.php");
    
    
if (!empty($_POST['name']) && !empty($_POST['role']))
{
	$name=$_POST['name'];
	$pass=$_POST['pass'];
	$cpass=$_POST['cpass'];
	$role=$_POST['role'];
	if($pass==$pass){
		$query = "INSERT INTO login"."(id,username,password,role)"."VALUES (NULL,'$name','$pass','$role')";
			$result = mysqli_query($dbcon, $query)
			or die('Error querying database.');
			mysqli_close($dbcon);
			session_destroy(); 
				 header("Location: index.php");
				 

}
}

}

else{
	 header("Location: index.php"); 
}


?>


<!DOCTYPE html>
<html>
<head>
	<title>Kcet-Login</title>
	<link rel="stylesheet" type="text/css" href="css/custom.css">
	<link rel="stylesheet" type="text/css" href="for_index.css">
	<link href="../css/bootstrap.min.css" rel="stylesheet" media="screen">
	<script type="text/javascript" src="in_head.js"></script>
</head>
<body>

<div class="container">
			<button type="button" class="btn btn-danger " style="margin-top:40px;float:left;" onclick="window.location='logout.php'">  <span class="glyphicon glyphicon-log-out" aria-hidden="true" 
			  		style="font-size: 20px;"></span>Logout
				</button>
	<div class="row" style="height:180px;"></div>
		<div class="row"><center><h1>REGISTRATION</h1></center></div>
		<hr>
			<div class="row">
				<div class="col-md-8 col-md-offset-2">
		            <div class="panel panel-default">
		               		<div class="panel-body">
		                        <form action="registration.php" method="post" class="form-horizontal" role="form"  enctype="multipart/form-data">
									
									

									<div class="form-group">
		                         	 	<label for="username" class="col-md-4 control-label">Username</label>
		                         	 	<div class="col-md-6">
											<input type="text" class="form-control" name="name">
		                          		</div>
		                         	 </div>
		                         	
		                         	

		                         	 <div class="form-group">
		                         	 	<label for="pass" class="col-md-4 control-label">Password</label>
		                         	 	<div class="col-md-6">
											<input type="text" class="form-control" name="pass">
		                          		</div>
		                         	 </div>

		                         	 
		                         	 <!--<div class="form-group">
		                         	 	<label for="cpass" class="col-md-4 control-label">Confirm Password</label>
		                         	 	<div class="col-md-6">
											<input type="password" class="form-control" name="cpass">
		                          		</div>
		                         	 </div>-->

		                         	 <div class="form-group">
		                         	 	<label for="role" class="col-md-4 control-label">Role</label>
		                         	 	<div class="col-md-6">

									      <select class="form-control" name="role">
									        <option value="HOD">Head Of Department</option>
									        <option value="Admin">Admin</option>
									        <option value="Assistant Professor" selected>Assistant Professor</option>
									        <option value="Associate Professor">Associate Professor</option>
									      </select>
									 </div>
									 </div>

									

		                         	

		                         	 <div class="form-group">
		                            	<div class="col-md-6 col-md-offset-4">
		                                	<button type="submit" class="btn btn-primary">
		                                    	<i class="fa fa-btn fa-sign-in"></i> Register
		                                	</button>
		                            	</div>
		                        	</div>
								
								
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>

	    <script src="../js/bootstrap.min.js"></script>
	<script type="text/javascript" src="../js/in_body.js"></script>
	</body>
</html>