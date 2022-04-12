
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
$sql4="SELECT * FROM  category";
$select="<select name='catidoooo' >";
$result4=$con->query($sql4);
if($result4->num_rows>0){
	//echo"data selected"."<br>";
	while($row4=$result4->fetch_assoc()){
		$select=$select."<option value='".$row4["id"]."'>".$row4["catname"]." </option>";
	echo"<br>";
	}
		$select=$select."</select>";}
	else{
		echo"not selected";}
}
?>
<html>
<head>
 
  <meta charset="utf-8">

  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
   <style>
   input,label,button{
   margin-left:20px}
	body{margin-top:-150px;}
	h1{text-align:center;}
	button{font-size:20px; color:black; background-color:#edecdf; padding:10px; text-align:center; margin-left:500px;}
	#formFile{margin-left:15px;}
	
</style>
</head>
<body style="background-color:#fafbed;">

<img  src="logo.png" width="100px" height="100px" style="">
<img  src="logo.png" width="100px" height="100px" style="float:right;">
<h1> add book</h1>
<form class="row g-2" method="post" action="addbookphp.php">
  <div class="col-md-6">
    <label for="inputEmail4"   class="form-label">Name of book</label>
    <input type="text" class="form-control" required name="name" id="inputEmail4">
  </div>
  
  <div class="col-8">
    <label for="inputAddress" class="form-label">author</label>
    <input type="text" class="form-control" required  name="author"id="inputAddress" >
  </div>
  
  
  <div class="col-md-4">
  <br> <br>
    <label for="inputState" class="form-label" id="cat">category</label>
	
     <?php echo $select;?>
  </div> <br>
  
<div class="mb-2 col-md-8 ">
<br>
  <label for="formFile" class="form-label">upload image</label>
  <input class="form-control" required name="image"type="file" id="formFile">
</div>
<br> <br>
  <div class="col-md-3">
 <br>
    <label for="inputZip" class="form-label">numbers of pages</label>
    <input type="text" required class="form-control"name="num" id="inputZip">
  </div>

  <div class="col-10">
  
    <button type="submit" >add book</button>
  </div>
</form>

