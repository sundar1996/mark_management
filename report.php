<?php
session_start();
if (isset($_SESSION['id'])) {

	include_once("dbconnect.php");
    $id=$_SESSION['id'];
		$pid=$_GET['id'];

		$sql = " SELECT table_name FROM question_paper where question_paper_id=$pid ";
		$query = mysqli_query($dbcon, $sql);
		$row = mysqli_fetch_row($query);
		$tabname=$row[0];
		$num=1;

		$_SESSION['inserttable']=$tabname;



    $sql = "SELECT col_name FROM questions where question_paper_id=$pid ";
    $query = mysqli_query($dbcon, $sql);
    $rowcount=mysqli_num_rows($query);
		$rowcount++;


    $sql1 = " SELECT * FROM $tabname";
		$query1 = mysqli_query($dbcon, $sql1);


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
					<script type="text/javascript" src="js/report.js"></script>


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
      <div class="col-lg-8"><center><h2>Report</h2></center></div>
      <div class="col-lg-2">
        <button type="button" class="btn btn-info " style="float:right;" onclick="window.location='home.php'"> Home
        </button>
      </div>
    </div>
    <hr>

    <div class="row"  >
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-body">

                  <div class="row">

                    <canvas id="canvas" width="1400" height="550">
</canvas>


                  </div>



            	</div>
          	</div>
        </div>
    </div>


</div>
  <script src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/list.js"></script>
<script>

var c = document.getElementById("canvas");
var ctx = c.getContext("2d");
ctx.fillStyle = "#FF0000";
ctx.moveTo(70,50);
ctx.lineTo(70,550);
ctx.stroke();
ctx.moveTo(20,500);
ctx.lineTo(1350,500);
ctx.stroke();
var x=100;

ctx.fillStyle = "blue";

ctx.fillRect(1100,20,25,25);
ctx.font = "18px Arial";

ctx.fillText("Total",1130,40);
ctx.fillStyle = "#86EEEE";

ctx.fillText("Achieved",1130,80);

ctx.fillRect(1100,60,25,25);
ctx.font = "25px Arial";

var y;
for(var i=0;i<16;i++){
y=i+1;
if(y%2==0){
  ctx.fillStyle = "#86EEEE";

  ctx.fillRect(x,500,40,-300);


  x=x+100;

}
else{
  ctx.fillStyle = "blue";

  ctx.fillRect(x,500,40,-300);

x=x+60;
}

}
x=150;
for(var i=1;i<9;i++){
  var graphlabel="CO".concat(i);
  ctx.fillStyle = "BLACK";

  ctx.fillText(graphlabel,x-30,525);

  x=x+160;

}






</script>

</body>
</html>
