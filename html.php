

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
	
	$table="<table>";
	
$sql2="SELECT id,name,author,numpages ,image FROM books WHERE catid=1";
	$result2=$con->query($sql2);
	
	if($result2->num_rows>0){
		while($row2=$result2->fetch_assoc()){
		
			$table=$table." 
			<tr> <td>  <div class='col-md-4' ><form method='post' action=''>
                            <div class='product'>
							<img src=".  $row2['image']. " class='img-responsive'></td> <td>
							 <h5 class='service-title'>" . $row2['name']."</h5>
							
				 </td> <td> <b class='text'>".  $row2['author']."</b></br></td> <td>
					
			
				<b class='text'>".  $row2['numpages']."</b></br></td>
				<td> <a  class='ml' href='noveles.php?id=".$row2['id']."'> more</a> </td>
		
				
				</tr> </div> 
                        </form> </div>";
			
								
		}
	}
$table=$table."</table>";
$table2="<table>";
$sql="SELECT id, name,author,numpages ,image  FROM books WHERE catid=2";
	$result=$con->query($sql);
	if($result->num_rows>0){
		while($row=$result->fetch_assoc()){
			 $table2=$table2."<tr> <td> <div class='col-md-4' > <form method='post' action=''>

<div class='product'>
							<img src=".  $row['image']. " class='img-responsive'></td> <td>
							 <h5 class='service-title'>" . $row['name']."</h5>
							
				 </td> <td> <b class='text'>".  $row['author']."</b></br></td> <td>
					
			
				<b class='text'>".  $row['numpages']."</b></br></td>
				<td> <a class='ml' href='children.php?id=".$row['id']."'> more</a> </td>
				</tr> </div> 
                        </form> </div>";
		}
	}
$table2=$table2."</table>";


$table3="<table>";

$sql3="SELECT id, name,author,numpages ,image FROM books WHERE catid=3";
	$result3=$con->query($sql3);
	if($result3->num_rows>0){
		while($row3=$result3->fetch_assoc()){
			 $table3=$table3."<tr> <td><div class='col-md-4' > <form method='post' action=''>

<div class='product'>
			<img src=".  $row3['image']. " class='img-responsive'></td> <td>
							 <h5 class='service-title'>" . $row3['name']."</h5>
							
				 </td> <td> <b class='text'>".  $row3['author']."</b></br></td> <td>
			
				<b class='text'>".  $row3['numpages']."</b></br></td>
				<td> <a class='ml' href='thought.php?id=".$row3['id']."'> more</a> </td>
				</tr> </div> 
                        </form> </div>";
		}
	}

$table3=$table3."</table>";


$table4="<table>";
$sql4="SELECT  id,name,author,numpages ,image FROM books WHERE catid=4";
	$result4=$con->query($sql4);
	if($result4->num_rows>0){
		while($row4=$result4->fetch_assoc()){
			 $table4=$table4."<tr> <td><div class='col-md-4' > <form method='post' action=''>

<div class='product'>
			<img src=".  $row4['image']. " class='img-responsive'></td> <td>
							 <h5 class='service-title'>" . $row4['name']."</h5>
							
				 </td> <td> <b class='text'>".  $row4['author']."</b></br></td> <td>
			
				<b class='text'>".  $row4['numpages']."</b></br></td>
				<td> <a class='ml' href='computer.php?id=".$row4['id']."'> more</a> </td>
				</tr> </div> 
                        </form> </div>";
			
		}
	}

$table4=$table4."</table>";




$tablee="<table>";
$sql5="SELECT  id,name,author,numpages ,image FROM books WHERE catid=5";
	$result5=$con->query($sql5);
	if($result5->num_rows>0){
		while($row5=$result5->fetch_assoc()){
			 $tablee=$tablee."<tr> <td> 


			<img src=".  $row5['image']. " class='img-responsive'></td> <td>
			<h4>name:</h4> 
							 <h5 class='service-title'>" . $row5['name']."</h5></td> 
						<td><h4>author:</h4>  
						 <b class='text'>".  $row5['author']."</b></td> <td>
			<h4>numpages:</h4> <br>
				<b class='text'>".  $row5['numpages']."</b></br></td>
				
				<td> <br> <br><a class='ml' href='human .php?id=".$row5['id']."'> more</a> </td>
				</tr> 
                         ";
			
		}
	}

$tablee=$tablee."</table>";



$table6="<table>";
$sql6="SELECT  id,name,author,numpages ,image FROM books WHERE catid=6";
	$result6=$con->query($sql6);
	if($result6->num_rows>0){
		while($row6=$result6->fetch_assoc()){
			 $table6=$table6."<tr> <td><div class='col-md-4' > <form method='post' action=''>

<div class='product'>
			<img src=".  $row6['image']. " class='img-responsive'></td> <td>
							 <h5 class='service-title'>" . $row6['name']."</h5>
						
				 </td> <td> <b class='text'>".  $row6['author']."</b></br></td> <td>
			
				<b class='text'>".  $row6['numpages']."</b></br></td><td>
				 <a class='ml' href='logic.php?id=".$row6['id']."'> more</a> </td>
				</tr> </div> 
                        </form> </div>";
			
		}
	}
$table6=$table6."</table>";






}

?>
<html>
<head>

<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<!------ Include the above in your HEAD tag ---------->
<style>
img{
	width:225px;
	height:225px;
}
 
.categories a{text-align:center; margin-right:30px;}
td,th{
	padding:12px;
	width:70px;
}

#logo img{width:100px; height:100px;}
.ml{background-color: #555555;  border-radius: 8px;color: white; border:.1px solid white;
  padding-left: 12px ; padding-right: 13px ; padding-bottom:5px; padding-top:5px;text-align: center;text-decoration: none;
  display: inline-block;font-size: 13px; margin-top: 10px ; margin-bottom: 10px ;transition-duration: 0.4s;cursor: pointer;} 
  
.ml:hover {background-color:#f78589 ;} 
</style>
</head>
<body>
<div id="logo">
<img  src="logo.png" width="100px" height="100px" style="">
<img  src="logo.png" width="100px" height="100px" style="float:right;"></div>

<div class="container">
 <p class="text-center" style="margin-top:-93px;">ALL books </p>
<hr>

<div class="categories" >
<a href="#nov" > noveles </a>
<a href="#child" > children </a>
<a href="#text"  > Texts and thoughts</a>
<a href="#comp"  > computer</a>
<a href="#self" >  self-development </a>
<a href="#phil"  >Philosophy </a>

</div>
<hr>

<h4 id="nov"> noveles </h4>
<?php  echo $table;?>



<h4 id="child"> children </h4>
<?php  echo $table2;?>

<h4 id="text"> Texts and thoughts</h4>
<?php  echo $table3;?>

<h4 id="comp"> computer </h4>
<?php  echo $table4;?>

<h4 id="self"> Human development and self-development </h4>
<?php  echo $tablee;?>
<h4 id="phil"> Philosophy and Logic </h4>
<?php  echo $table6;?>


</div>
</body>
</html>
