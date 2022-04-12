<?php
$servername="localhost";
$username="root";
$password="heba44255";
$dbaname="finalproject";


$con= new mysqli($servername,$username,$password,$dbaname);
if($con->connect_error){
	die("not connected".connect_error);
}
else{
	echo"connected!";
	$email=$_POST["email"];
$password=$_POST["password"];



	$sql="SELECT email,password FROM user WHERE email='$email' and password='$password'";
	$result=$con->query($sql);
	if($result->num_rows>0){
		while($row=$result->fetch_assoc()){
		
		header('location:html.php');}
	}
	
}
?>