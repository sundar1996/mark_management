<?php
session_start();
if (isset($_SESSION['id'])) {

$id = $_SESSION['id'];

$rollno=$_POST['rollno'];
$column=$_POST['column'];
$mark=$_POST['mark'];

$tabname=$_SESSION['inserttable'];


include_once("dbconnect.php");

		$query = "update $tabname set $column=$mark where rollno='$rollno' " ;

		$result = mysqli_query($dbcon, $query)
		or die('Error querying database.');


		mysqli_close($dbcon);





}
else {
    header("Location: home.php");
}

?>
