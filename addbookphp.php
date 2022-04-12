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
	$name=$_POST['name'];
	$author=$_POST['author'];
	
	$image=$_POST['image'];
	
		$num=$_POST['num'];
	$IDDDD= $_POST["catidoooo"];
	 $sql="INSERT INTO books(name,author,image,numpages,catid)VALUES('$name','$author','$image','$num','$IDDDD') ";
	 if($con->query($sql)==TRUE){
		// echo"INSERTED";
		echo '<script>alert("book added!")</script>';
	echo '<script> window.location.href="addbook.php" </script>';
		
	 }
	 else{
		 echo"not inserted <br>".$con->error;
	 }
}




?>