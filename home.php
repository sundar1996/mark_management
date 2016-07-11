<?php
session_start();
if (isset($_SESSION['id'])) {
	date_default_timezone_set('Asia/Calcutta');
    //$permit = $_SESSION['permit'];
   // $year=date("Y");
	//$query = "select batch_id from batch where end_year>=$year";
	//$result = mysqli_query($dbcon, $query)
	//or die('Error querying database.');
    //$row = mysqli_fetch_array($result);
	include_once("dbconnect.php");
    $id=$_SESSION['id'];
    $sql = "SELECT * FROM login WHERE id = '$id'";
	$query = mysqli_query($dbcon, $sql);
	$row = mysqli_fetch_row($query);
	$name=$row[1];
	$role=$row[4];
	$dept=$row[5];
	$batch=$row[6];
	$code=$row[8];

	if($name==NULL && $dept==NULL && $sem== NULL && $code== NULL){
	 header("Location: reset.php"); 
	}

	mysqli_close($dbcon);
			
}



else{
	 header("Location: index.php"); 
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Kcet-Login</title>
	<link rel="stylesheet" type="text/css" href="for_index.css">
	<link href="css/bootstrap.min.css" rel="stylesheet" media="screen">
	<script type="text/javascript" src="in_head.js"></script>
</head>
<body>
	<div class="container-fluid">
		<div class="row" style="height:40px;"></div>
		<div class="row">
			<div class="col-lg-2">
				<button type="button" class="btn btn-danger " style="float:left;" onclick="window.location='logout.php'">  <span class="glyphicon glyphicon-log-out" aria-hidden="true" 
			  		style="font-size: 20px;"></span>Logout
				</button>
			</div>
			<div class="col-lg-8"><center><h2>Marks Portal</h2></center></div>
			<div class="col-lg-2"> 
				<button type="button" class="btn btn-info " style="float:right;" onclick="window.location='settings.php'">  <span class="glyphicon glyphicon-cog" aria-hidden="true" 
			  		style="font-size: 20px;"></span>
				</button>
			</div>
		</div>
		<hr>
		

		<div class="row">
			<div class="col-lg-6" style="padding-right: 80px;padding-left: 80px;">
			<h2>Info</h2><br>
  <table class="table table-striped">
    <tbody>
      <tr>
        <td>Name</td>
        <td style="text-transform: uppercase;"><?php echo $name; ?></td>
      </tr>
      <tr>
        <td>Designation</td>
        <td><?php echo $role; ?></td>
      </tr>
      <tr>
        <td>Department</td>
        <td><?php echo $dept; ?></td>
      </tr>
      <tr>
        <td>Batch(es)</td>
        <td><?php echo $batch; ?></td>
      </tr>
      <tr>
        <td>Subjects Handled</td>
        <td><?php echo $code; ?></td>
      </tr>
    </tbody>
  </table>
				
			</div>
			
			<div class="col-lg-6">
				<div class="row" style="margin-bottom: 50px;margin-top:30px;">
					<a href="create.php" style="text-decoration: none;">
						<div class="col-lg-5" style="border: 1px solid black;border-radius: 20px;">
							<div class="row" style="padding-top: 5px;padding-bottom: 5px;background-color: #86EEEE;border-top-left-radius: 20px;border-top-right-radius: 20px;">
								<div class="col-lg-4">
		       						<span class="glyphicon glyphicon-plus" style="color:#000000; float:right; font-size:25px; vertical-align: middle;" aria-hidden="true">
		       						</span>
		       						<br>
								</div>
								<div class="col-lg-8">
									<a1 style="font-size: 22px;">Create</a1>
								</div>
							</div>
							
							<div class="row">
								<div class="col-lg-12" style="padding-right: 15px;padding-left: 15px;">
									
									<h4>
									<ul style="padding-left:90px;padding-top:5px;line-height: 25px;">
										<li>Assignment</li>
										<li>Slip Test</li>
										<li>Cycle Test</li>
									</ul>
									</h4>
								</div>
							</div>
						</div>
					</a>
					

					<a href="update_list.php" style="text-decoration: none;">
						<div class="col-lg-5 col-lg-offset-1" style="border: 1px solid black;border-radius: 20px;">
							<div class="row" style="padding-top: 5px;padding-bottom: 5px;background-color: #86EEEE;border-top-left-radius: 20px;border-top-right-radius: 20px;">
								<div class="col-lg-4">
		       						<span class="glyphicon glyphicon-pencil" style="color:#000000; float:right; font-size:25px; vertical-align: middle;" aria-hidden="true">
		       						</span>
		       						<br>
								</div>
								<div class="col-lg-8">
									<a1 style="font-size: 22px;">Update</a1>
								</div>
							</div>
							
							<div class="row">
								<div class="col-lg-12" style="padding-right: 15px;padding-left: 15px;">
									<h4 style="line-height: 35px;padding-top: 20px;padding-bottom:20px; "><center>Update the marks obtained</center></h4>
								</div>
							</div>
						</div>
					</a>
				
				</div>

				<div class="row">
					<a href="list.php" style="text-decoration: none;">
						<div class="col-lg-5" style="border: 1px solid black;border-radius: 20px;">
							<div class="row" style="padding-top: 5px;padding-bottom: 5px;background-color: #86EEEE;border-top-left-radius: 20px;border-top-right-radius: 20px;">
								<div class="col-lg-4">
		       						<span class="glyphicon glyphicon-th-list" style="color:#000000; float:right; font-size:25px; vertical-align: middle;" aria-hidden="true">
		       						</span>
		       						<br>
								</div>
								<div class="col-lg-8">
									<a1 style="font-size: 22px;">View</a1>
								</div>
							</div>
							
							<div class="row">
								<div class="col-lg-12" style="padding-right: 15px;padding-left: 15px;">
									<h4 style="line-height: 35px;padding-top: 20px;padding-bottom:20px;"><center>Review the created papers </center></h4>

								</div>
							</div>
						</div>
					</a>
					

					<a href="#" style="text-decoration: none;">
						<div class="col-lg-5 col-lg-offset-1" style="border: 1px solid black;border-radius: 20px;">
							<div class="row" style="padding-top: 5px;padding-bottom: 5px;background-color: #86EEEE;border-top-left-radius: 20px;border-top-right-radius: 20px;">
								<div class="col-lg-4">
		       						<span class="glyphicon glyphicon-stats" style="color:#000000; float:right; font-size:25px; vertical-align: middle;" aria-hidden="true">
		       						</span>
		       						<br>
								</div>
								<div class="col-lg-8">
									<a1 style="font-size: 22px;">Report</a1>
								</div>
							</div>
							
							<div class="row">
								<div class="col-lg-12" style="padding-right: 15px;padding-left: 15px;">
									<h4 style="line-height: 35px;padding-top: 20px;padding-bottom:20px;"><center>Track your class progress </center></h4>
									
								</div>
							</div>
						</div>
					</a>
				
				</div>

			</div>		
		</div>
	</div>

	



	<script src="js/bootstrap.min.js"></script>
	<script type="text/javascript" src="js/in_body.js"></script>
</body>
</html>