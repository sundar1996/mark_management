<?php 
session_start();
if (isset($_SESSION['id'])) {

$id = $_SESSION['id'];
$pass=$_POST['pass'];
$dept=$_POST['dept'];
$semes=$_POST['sem'];
$code=$_POST['code'];
$batch=$_POST['batch'];
include_once("dbconnect.php");
	$query = "update login set password='$pass',dept='$dept',sem='$semes',batch='$batch',code='$code' where id='$id'"; 

		$result = mysqli_query($dbcon, $query)
		or die('Error querying database.');
		mysqli_close($dbcon);
	 

	
	

}
else {
    header("Location: home.php");
}

?>

