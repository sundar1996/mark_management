<?php
session_start();
if (isset($_SESSION['id'])) {

	include_once("dbconnect.php");
    $id=$_SESSION['id'];
		$pid=$_GET['id'];

$num=1;

	$sql = "SELECT section from question_paper where question_paper_id=$pid ";
    $query = mysqli_query($dbcon, $sql);
		$row = mysqli_fetch_row($query);
$section=$row[0];

$sql = "SELECT question_id from questions where question_paper_id=$pid ";
	$query = mysqli_query($dbcon, $sql)
	or die('Error querying database.');

	$row = mysqli_fetch_row($query);
	$rowcount=mysqli_num_rows($query);
	$rowcount++;

    $sql1 = " SELECT RollNo FROM studentmaster where section='$section' and DeptId=1 and batch='2014-2018' ";
		$query1 = mysqli_query($dbcon, $sql1)
		or die('Error querying database.');



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
  <link href="css/bootstrap.min.css" rel="stylesheet" media="screen">
  <script src="js/jquery-3.0.0.min.js"></script>
          <script type="text/javascript" src="js/list.js"></script>
					<script type="text/javascript" src="js/insert.js"></script>


</head>
<body  onload="before();">
<div class="container-fluid">
  <div class="row" style="height:40px;"></div>
    <div class="row">
      <div class="col-lg-2">
        <button type="button" class="btn btn-danger " style="float:left;" onclick="window.location='logout.php'">  <span class="glyphicon glyphicon-log-out" aria-hidden="true"
            style="font-size: 20px;"></span>Logout
        </button>
      </div>
      <div class="col-lg-8"><center><h2>Update</h2></center></div>
      <div class="col-lg-2">
        <button type="button" class="btn btn-info " style="float:right;" onclick="window.location='home.php'"> Home
        </button>
      </div>
    </div>
    <hr>

    <div class="row" >
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-body">
                  	<div class="form-horizontal col-md-10 col-md-offset-1">

                		<table class="table table-striped ">
                		<thead>
						     <tr>
						        <th>RollNo</th>
										<?php
										for($i=1;$i<$rowcount;$i++){
											echo '<th>'.$i.'</th>';}
?>

							</tr>
						    </thead>

						    <tbody>

						    <?php
while($row1 = mysqli_fetch_array($query1))
	{
		echo '<tr><td>'.$row1[0].'</td>';

		$sql="select * from marks where pid=$pid and rollno='$row1[0]'";
		$query = mysqli_query($dbcon, $sql);
		while($row = mysqli_fetch_array($query)){
			$textname="marktext$num";
			echo '<td><input type="text" id="'.$textname.'" rollno="'.$row1[0].'" value="'.$row[3].'" quesid="'.$row[2].'" size="5" ></td>';
			$num++;
		}

		/*for($i=1;$i<$rowcount;$i++){
			$row = mysqli_fetch_array($query);
			$textname="marktext$num";
	    echo '<td><input type="text" id="'.$textname.'" rollno="'.$row1[0].'" colname="'.$row[0].'" value="'.$row1[$i].'" size="5" ></td>';
			$num++;
		}

*/
		echo '</tr>';
	}




?>


						    </tbody>
						  </table>
						<?php
$num--;

						echo	'<button type="button" class="btn btn-info " style="float:right;" onclick="markinsert('.$num.');"> Submit
							</button>';


							?>
                	</div>
            	</div>
          	</div>
        </div>
    </div>


</div>
  <script src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/list.js"></script>


</body>
</html>
