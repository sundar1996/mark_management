<?php 
session_start();
if (isset($_SESSION['id'])) {

$id = $_SESSION['id'];
$username=$_POST['username'];
$name=$_POST['name'];
$pass=$_POST['pass'];
$dept=$_POST['dept'];
$semes=$_POST['sem'];
$code=$_POST['code'];
$batch=$_POST['batch'];
include_once("dbconnect.php");
	$query = "update login set name='$name',username='$username',password='$pass',dept='$dept',sem='$semes',batch='$batch',code='$code' where id='$id'"; 

		$result = mysqli_query($dbcon, $query)
		or die('Error querying database.');
		mysqli_close($dbcon);
	 

	
	

}
else {
    header("Location: home.php");
}

?>

