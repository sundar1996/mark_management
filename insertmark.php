<?php
session_start();
if (isset($_SESSION['id'])) {

$id = $_SESSION['id'];

$rollno=$_POST['rollno'];
$mark=$_POST['mark'];
$quesid=$_POST['quesid'];

include_once("dbconnect.php");

		$query = "update marks set marks=$mark where rollno='$rollno'and qid=$quesid " ;

		$result = mysqli_query($dbcon, $query)
		or die('Error querying database.');


		mysqli_close($dbcon);





}
else {
    header("Location: home.php");
}

?>
