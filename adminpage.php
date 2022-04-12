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
	
	


$sql2="SELECT * FROM user";
$result=$con->query($sql2);
$table="<table class='table'>
<tr> <th scope='col'> id </th>
<th scope='col'> email </th>
<th scope='col'> username </th> 
<th scope='col'> phone </th>
<th scope='col'> password </th>
<th scope='col' > delete </th>
<th scope='col'> update </th></tr>";
if($result->num_rows>0){
	while($row=$result->fetch_assoc()){
		$table=$table."<tr> <td>".$row['id']."</td> <td>".$row['email']."</td> <td>".$row['username']."</td> <td>".
		$row['phone']."</td> <td>".$row['password']."</td>  <td>
		

<a href='deleteuser.php?id=".$row['id']."'> delete user</a> </td>
<td> <a href='updateuserform.php?id=".$row['id']."'> update user</a> </td></tr>";
		
	}
	$table=$table."</table>";
}


//<a href='deleteuser.php'>delete user></a>

$sql3="SELECT * FROM books";
$result2=$con->query($sql3);
$table2="<table>
<tr> <th scope='col'> id </th>
<th scope='col'> Name book </th>
<th scope='col'> author </th> 

<th scope='col'> image </th>

<th scope='col'> #pages </th>

<th scope='col'> delete </th>
<th scope='col'> update </th></tr>";
if($result2->num_rows>0){
	while($row2=$result2->fetch_assoc()){
		$table2=$table2."<tr> <td >".$row2['id']."</td> <td>".$row2['name']."</td> <td>".$row2['author']."</td> 
		<td>". $row2['image'] ."</td> 
		<td>". $row2['numpages']."</td>
		  <td> <a href='deletebook.php?id=".$row2['id']."'> delete book</a> </td>
		<td> <a href='updatebook.php?id=".$row2['id']."'> update book</a> </td></tr>";
		
	}
	$table2=$table2."</table>";
}

}

?>



<html>
<head>
<link href="https://cdnjs.cloudflare.com/ajax/libs/simple-line-icons/2.4.1/css/simple-line-icons.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
<style>
ul{list-style-type:none; margin-left:390px; margin-top:-110px;}
li{  float:left; margin:-10px;}
li a{text-decoration:none; padding:25px; font-size:40px;color:black; display:block; text-align:center; background-color:#edecdf;}
li a:hover{ background-color:#c8b5a4; text-decoration:none;}
h1{background-color:#edecdf; text-align:center; font-size:35px;}
tr:nth-child(even) {
  background-color: #edecdf;
}
th{
font-size:15px;

}
td,th{
	padding:12px;
	width:70px;
}
</style>
</head>

<body>
<img  src="logo.png" width="100px" height="100px" style="">
<img  src="logo.png" width="100px" height="100px" style="float:right;">
<div style=" background-color:#edecdf;">

<ul>
 <li><a href="adduser.php"> add users  </a> </li>
 <li><a href="addbook.php">add books  </a> </li>

</ul></div><br> <br><br> <br>
<br> <br> <br>
<div>
<h1> the users</h1>
<?php  echo $table ?>
</div>
<br> 
<div>
<h1> the books</h1>
<?php  echo $table2 ?>
</div>
<br> 
</body>
</html>