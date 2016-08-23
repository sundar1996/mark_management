<?php
session_start();
if (isset($_SESSION['id'])) {

$id = $_SESSION['id'];

$pid=$_SESSION['pid'];
$section=$_SESSION['section'];

include_once("dbconnect.php");
		$query=	"insert into marks (rollno,pid,qid) select studentmaster.RollNo,$pid,questions.question_id from questions left join studentmaster on studentmaster.section='$section' and studentmaster.batch='2014-2018' and studentmaster.DeptId=1 where questions.question_paper_id=$pid";
		$result = mysqli_query($dbcon, $query)
		or die('Error querying database.');
		mysqli_close($dbcon);
}
else {
    header("Location: home.php");
}

?>
