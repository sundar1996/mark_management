<?php
session_start();
if (isset($_SESSION['id'])) {

$id = $_SESSION['id'];


$section=$_SESSION['section'];

include_once("dbconnect.php");
	$query = "insert into $_SESSION[table_name] (rollno) select RollNo from studentmaster where Batch='2014-2018' and section='$section' and DeptId=1";

		$result = mysqli_query($dbcon, $query)
		or die('Error querying database.');






		mysqli_close($dbcon);





}
else {
    header("Location: home.php");
}

?>
