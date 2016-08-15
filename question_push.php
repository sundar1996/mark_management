<?php
session_start();
if (isset($_SESSION['id'])) {

$id = $_SESSION['id'];

$question=$_POST['ques'];
$co=$_POST['course'];
$marks=$_POST['marks'];
$p_id=$_SESSION['pid'];


include_once("dbconnect.php");
	$query = "insert into questions values('$p_id',NULL,'$marks','$question','$co',NULL )"  ;

		$result = mysqli_query($dbcon, $query)
		or die('Error querying database.');

		$sql = "SELECT question_id FROM questions order by question_id desc limit 1";
		$query = mysqli_query($dbcon, $sql);
		$row = mysqli_fetch_row($query);
		$col_name="ques$row[0]";

		$query = "update questions set col_name='$col_name' where question_id='$row[0]' " ;

		$result = mysqli_query($dbcon, $query)
		or die('Error querying database.');

		$query = "alter table $_SESSION[table_name] add column $col_name int DEFAULT 0" ;

		$result = mysqli_query($dbcon, $query)
		or die('Error querying database.');


		mysqli_close($dbcon);





}
else {
    header("Location: home.php");
}

?>
