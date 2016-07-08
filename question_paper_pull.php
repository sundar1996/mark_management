<?php
session_start();
if (isset($_SESSION['id'])) {
	
	include_once("dbconnect.php");
    $id=$_SESSION['id'];
    $sql = "SELECT type,reference_name,date FROM question_paper where staff_id=$id";
	$query = mysqli_query($dbcon, $sql);
  	$rowcount=mysqli_num_rows($query);
	$i=-1;
	while($row = mysqli_fetch_array($query))
	{
	    $i++;
	   echo $row['type'];
	    echo $row['reference_name'];
	    echo $row['date'];
	    echo "<br>";


	}

	echo $rowcount;

		
		mysqli_close($dbcon);
				
}



else{
	 header("Location: index.php"); 
}
?>



