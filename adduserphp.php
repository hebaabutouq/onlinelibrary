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
	// echo "connected<br>";
	$usernamee=$_POST['username'];
	$passwordd=$_POST['password'];
	$email=$_POST['email'];
	$phone=$_POST['phone'];
	 $sql="INSERT INTO user(email,password,username,phone)VALUES('$email','$passwordd','$usernamee','$phone') ";
	 if($con->query($sql)==TRUE){
		// echo"INSERTED";
		echo '<script>alert("user added!")</script>';
	echo '<script> window.location.href="adduser.php" </script>';
		
	 }
	 else{
		 echo"not inserted <br>".$con->error;
	 }
}




?>