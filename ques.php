<?php
session_start();
if (isset($_SESSION['id'])) {
$qid = $_GET["qid"];
$_SESSION['qid']=$qid;
echo $qid;
}
else{
   header("Location: index.php"); 
}

?>




