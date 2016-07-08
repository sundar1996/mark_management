<?php
session_start();
if (isset($_SESSION['id'])) {
	
	include_once("dbconnect.php");
    $id=$_SESSION['id'];
    $sql = "SELECT batch,code FROM login WHERE id = '$id'";
	$query = mysqli_query($dbcon, $sql);
	$row = mysqli_fetch_row($query);
	

echo json_encode($row);


	mysqli_close($dbcon);
			
}



else{
	 header("Location: index.php"); 
}
?>


