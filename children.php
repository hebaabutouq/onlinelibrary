<?php
$servername="localhost";
$username="root";
$password="heba44255";
$dbaname="finalproject";


$con= new mysqli($servername,$username,$password,$dbaname);
if($con->connect_error){
	die("not connected".connect_error);
}

?>

<html>
<head>

<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
 <meta name="viewport" content="width=device-width, initial-scale=1">
<style>

body {
  font-family: 'open sans'; }

img {
   width:400px; height:450px;   }

.preview {
  display: -webkit-box;
  display: -webkit-flex;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-orient: vertical;
  -webkit-box-direction: normal;
  -webkit-flex-direction: column;
      -ms-flex-direction: column;
          flex-direction: column; }
  @media screen and (max-width: 996px) {
    .preview {
      margin-bottom: 20px; } }

.preview-pic {
  -webkit-box-flex: 1;
  -webkit-flex-grow: 1;
      -ms-flex-positive: 1;
          flex-grow: 1; }
.card {
  margin-top: 50px;
  background: #eee;
  padding: 3em;
  line-height: 1.5em; 
  margin-bottom:40px;}

@media screen and (min-width: 997px) {
  .wrapper {
    display: -webkit-box;
    display: -webkit-flex;
    display: -ms-flexbox;
    display: flex; } }

.details {
  display: -webkit-box;
  display: -webkit-flex;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-orient: vertical;
  -webkit-box-direction: normal;
  -webkit-flex-direction: column;
      -ms-flex-direction: column;
          flex-direction: column; }

.product-title, .price {
  text-transform: UPPERCASE;
  font-weight: bold;
  }

.product-title, . .product-description, .price {
  margin-bottom: 15px; }

.product-title {
  margin-top: 0; }

 .product-description{ overflow: visible;}

.add-to-cart {
  background: #ff9f1a;
  padding: 1.2em 1.5em;
  border: none;
  text-transform: UPPERCASE;
  font-weight: bold;
  color: #fff;
  -webkit-transition: background .3s ease;
          transition: background .3s ease; }
  .add-to-cart:hover, .like:hover {
    background: #b36800;
    color: #fff; }
.tooltip-inner {
  padding: 1.3em; }

@-webkit-keyframes opacity {
  0% {
    opacity: 0;
    -webkit-transform: scale(3);
            transform: scale(3); }
  100% {
    opacity: 1;
    -webkit-transform: scale(1);
            transform: scale(1); } }

@keyframes opacity {
  0% {
    opacity: 0;
    -webkit-transform: scale(3);
            transform: scale(3); }
  100% {
    opacity: 1;
    -webkit-transform: scale(1);
            transform: scale(1); } }
</style>
</head>
<body>


<?php
$sql3="SELECT * FROM books WHERE id={$_REQUEST['id']}";
$result2=$con->query($sql3);
if($result2->num_rows>0){
	while($row2=$result2->fetch_assoc()){?>
 
	
	<div class="container">
		<div class="card">
			<div class="container-fliud">
				<div class="wrapper row">
					<div class="preview col-md-6">
						<div class="preview-pic tab-content">
						  <div class="tab-pane active" id="pic-1"><img src=" <?php echo $row2['image'];?>"> </div>
						</div>
						</div>
					<div class="details col-md-6">
						<h3 class="product-title"> <?php echo$row2['name'];?></h3>
						
						<h4 class="price"> author: <?php echo $row2['author'];?> </h4>
						<h4 class="price">numpages: <span><?php echo $row2['numpages'];?> </span></h4>
						
						
					<?php	
					if($_REQUEST['id']==13){
						echo" <pre class='product-description'> <span>Description:</span><br></pre>";
					}
					 elseif($_REQUEST['id']==14){
						echo" <pre class='product-description'> <span>Description:</span><br>An entertaining story that revolves around the wolf 
and the clever rabbit,who eats the wolf's land crop, 
and when the wolf sets a trap for him the next time,
the rabbit can escape from this trap with a clever trick. </pre>";
						
					}
					else if($_REQUEST['id']==15){
						echo"<pre class='product-description'> <span>Description:</span><br>
These stories contain many human values 
that we had to inculcate in our children.
The writer also employed many new things in the 
character of the story and her goal is to involve the child in writing.</pre>";
					}
				
					else{
						echo" <pre class='product-description'> <span>Description:</span><br>In a secluded mountainous place,
in a country in the East, 
there was once a fertile valley surrounded 
on all sides by steep rocky mountains.</pre>";
					}
					?>
					
							
						<div class="action">
										
						<?php if($_REQUEST['id']==13){
					echo"	<a href='childrenpdf\??????????_????????????.pdf'class='add-to-cart btn btn-default' type='button'> read book</a>";}
					
					else if($_REQUEST['id']==14){
						echo"<a href='childrenpdf\????????????_??????????.pdf'class='add-to-cart btn btn-default' type='button'> read book</a>";
					}
					else if($_REQUEST['id']==15){
						echo"<a href='childrenpdf\?????????? ????????.pdf'class='add-to-cart btn btn-default' type='button'> read book</a>";
					}
					
					else{ 
						echo"<a href='childrenpdf\?????? ??????????.pdf'class='add-to-cart btn btn-default' type='button'> read book</a>";
					}
					
					?>
					<a href='html.php'class='add-to-cart btn btn-default' type='button'> back</a>
						</div>
					</div>
				</div>
			</div>
		</div>
</div><?php }}?>
  </body>
</html>

