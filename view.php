<?php
session_start();
if (isset($_SESSION['id'])) {
  
  include_once("dbconnect.php");
    $id=$_SESSION['id'];

    $sql = "SELECT * FROM questions where question_paper_id=10011";
  $query = mysqli_query($dbcon, $sql);
    $rowcount=mysqli_num_rows($query);
  
  while($row = mysqli_fetch_array($query))
  {
      
     echo $row['question'].",".$row['marks'].",",$row['course'].",".$row['program'];
     
      echo "<br>";
  }
  echo $rowcount;
  mysqli_close($dbcon);
        
}



else{
   header("Location: index.php"); 
}
?>



