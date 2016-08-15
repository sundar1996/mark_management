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
	$query = "insert into question_paper values(NULL,'$id','$type','$ref_name','$date','$marks','$code','$section','$batch',NULL )"  ;

		$result = mysqli_query($dbcon, $query)
		or die('Error querying database.');


		$sql = "SELECT question_paper_id FROM question_paper order by question_paper_id desc limit 1";
		$query = mysqli_query($dbcon, $sql);
		$row = mysqli_fetch_row($query);
$table_name="quespaper$row[0]";

$query = "update question_paper set table_name='$table_name' where question_paper_id='$row[0]' " ;

	$result = mysqli_query($dbcon, $query)
	or die('Error querying database.');


		$_SESSION['pid']=$row[0];
		$_SESSION['table_name']=$table_name;
		$_SESSION['section']=$section;
		
		$query = "create table $table_name(rollno varchar(30)) " ;


		$result = mysqli_query($dbcon, $query)
		or die('Error querying database.');

		mysqli_close($dbcon);





}
else {
    header("Location: home.php");
}

?>
