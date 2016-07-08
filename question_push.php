<?php 
session_start();
if (isset($_SESSION['id'])) {

$id = $_SESSION['id'];

$question=$_POST['ques'];
$co=$_POST['course'];
$po=$_POST['program'];
$marks=$_POST['marks'];
$p_id=$_SESSION['pid'];


include_once("dbconnect.php");
	$query = "insert into questions values('$p_id',NULL,'$marks','$question','$co','$po' )"  ; 

		$result = mysqli_query($dbcon, $query)
		or die('Error querying database.');
		mysqli_close($dbcon);
	 

	
	

}
else {
    header("Location: home.php");
}

?>

