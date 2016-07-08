<?php 


session_start();
if (isset($_POST['username'])) {
        

	include_once("dbconnect.php");
	

    $usname = strip_tags($_POST['username']);
	$paswd = strip_tags($_POST['password']);
	
	$usname = mysqli_real_escape_string($dbcon, $usname);
	$paswd = mysqli_real_escape_string($dbcon, $paswd);
	

	
	$sql = "SELECT id,username,password FROM login WHERE username = '$usname' AND password='$paswd'";
	$query = mysqli_query($dbcon, $sql);
	$row = mysqli_fetch_row($query);
	$per_id=$row[0];
	$per_name=$row[1];
	$per_pass=$row[2];
	

	if ($usname == $per_name && $paswd == $per_pass) {

		$_SESSION['id'] = $per_id;
		$_SESSION['pass']=$per_pass;
	



		header("Location: home.php");
	} else {
		$asgh= "<h2>Oops that username or password combination was incorrect.
		<br /> Please try again.</h2>";
	}
	
}

 ?>
 <!DOCTYPE html>
<html>
	<head>
		<title>Kcet-Login</title>
		<link rel="stylesheet" type="text/css" href="css/custom.css">
		<link rel="stylesheet" type="text/css" href="for_index.css">
		<link href="css/bootstrap.min.css" rel="stylesheet" media="screen">

		<script type="text/javascript" src="in_head.js"></script>
	</head>
	<body>
		<div class="container">
			
			<div class="row" style="height:180px;"></div>
			<div class="row"><center><h1>KCET PORTAL</h1></center></div>
			<hr>
			<div class="row">
				<div class="col-md-8 col-md-offset-2">
		            <div class="panel panel-default">
		                <div class="panel-heading">Login</div>
		               		<div class="panel-body">
		                        <form action="index.php" method="post" class="form-horizontal" role="form" >
									<div class="form-group">
		                         	 	<label for="username" class="col-md-4 control-label">Username</label>
		                         	 	<div class="col-md-6">
											<input type="text" class="form-control" name="username">
		                          		</div>
		                         	 </div>
		                         	 <div class="form-group">
		                         	 	<label for="password" class="col-md-4 control-label">Password</label>
		                         	 	<div class="col-md-6">
											<input type="password" class="form-control" name="password">
		                          		</div>
		                         	 </div>

		                         	 <div class="form-group">
		                            	<div class="col-md-6 col-md-offset-4">
		                                	<button type="submit" class="btn btn-primary">
		                                    	<i class="fa fa-btn fa-sign-in"></i> Login
		                                	</button>
		                            	</div>
		                        	</div>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>

	    <script src="js/bootstrap.min.js"></script>

		<script type="text/javascript" src="js/in_body.js"></script>
	</body>
</html>



