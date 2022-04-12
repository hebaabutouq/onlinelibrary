




<?php
$servername="localhost";
$username="root";
$password="heba44255";
$dbname="finalproject";


$con=new mysqli($servername,$username,$password,$dbname);
if($con->error){
die("not connected".$con->connect_error);
}
else{
	echo"connected ";
		
if(($_POST['username'])==''||($_POST['email'])==''||($_POST['password'])==''||($_POST['phone'])==''){
	echo"fill the feilds";
}
	else{
		$name=$_POST['username'];
		$email=$_POST['email'];
		$pass=$_POST['password'];
		$phone=$_POST['phone'];
		//$id=$_REQUEST['id'];
		$sql="UPDATE user 
		SET username='$name',email='$email',password='$pass',phone='$phone'
		WHERE id={$_REQUEST['id']}";
		if($con->query($sql)==TRUE){
			echo"updated";
		}
		else{
			echo"npt updated ".$con->error;
		}
	}
	
	
	
}








?>
