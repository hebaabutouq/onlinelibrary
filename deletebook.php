<?php
$servername="localhost";
$username="root";
$password="heba44255";
$dbname="finalproject";

$con=new mysqli($servername,$username,$password,$dbname);
if($con->connect_error){
	die("not connected".$con->connect_error);
}
else{
//echo"connected";
$id=$_REQUEST['id'];
$sql = "DELETE FROM books WHERE id='$id'";
if($con->query($sql)==TRUE){
	//echo"deleted";
	
	echo'<script> alert("book deleted") </script>';
	echo'<script> window.location.href="adminpage.php" </script>';
}
else{
	echo"not deleted".$con->error;
}
}


?>
