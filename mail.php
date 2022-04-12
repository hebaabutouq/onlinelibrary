<?php
$servername="localhost";
$username="root";
$password="heba44255";
$dbname="finalproject";

$con= new mysqli ($servername,$username,$password,$dbname);
if($con->connect_error){
	die("not connected".$con->connect_error);
}
else{
	//echo"connected! <br>";

$name=$_POST["name"];
$email=$_POST["email"];
$subject=$_POST["subject"];
$msg=$_POST["message"];


$sql="INSERT INTO msg(name,email,subject,msg)VALUES('$name','$email','$subject','$msg')";

if($con-> query($sql)==TRUE){
	//echo"insert done";
	
	echo '<script>alert("your message sent! thabk you !")</script>';
	echo '<script> window.location.href="contactus.php" </script>';
}
else{
	echo"not inserted".$con->error;
}


}



?>