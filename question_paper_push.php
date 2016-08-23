<?php
session_start();
if (isset($_SESSION['id'])) {

$id = $_SESSION['id'];
$type=$_POST['type'];
$ref_name=$_POST['ref_name'];
$date=$_POST['date'];
$marks=$_POST['marks'];
$code=$_POST['code'];
$section=$_POST['section'];
$batch=$_POST['batch'];



include_once("dbconnect.php");
	$query = "insert into question_paper values(NULL,'$id','$type','$ref_name','$date','$marks','$code','$section','$batch')"  ;

		$result = mysqli_query($dbcon, $query)
		or die('Error querying database.');


		$sql = "SELECT question_paper_id FROM question_paper order by question_paper_id desc limit 1";
		$query = mysqli_query($dbcon, $sql);
		$row = mysqli_fetch_row($query);

		$_SESSION['pid']=$row[0];
		$_SESSION['section']=$section;



		mysqli_close($dbcon);





}
else {
    header("Location: home.php");
}

?>
