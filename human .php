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
						
					<?php	if($_REQUEST['id']==2){
					echo"	<pre class='product-description'> <span>Description:</span><br>This book is an antidote to the mentality with
which we threaten ourselves, the mentality of 'let's'
work to have a good feeling for all of us' that
 invaded contemporary society and
corrupted an entire generation that 
won gold medals just for attending school.
Manson advises us to know and accept our limits. 
And to realize our fears and shortcomings 
and what we are not sure of,
and to stop evading and fleeing from all of that
 and start facing painful facts, 
so that we will be able to find what 
we are looking for in terms of boldness,
perseverance, honesty, responsibility, 
tolerance and love of knowledge.
Not everyone can be a distinct superior.
In society there are successful and unsuccessful;
And some of this fact is not fair 
and is not the result of your own fault.
 It is true that money is a good thing,
 but it is much better to take care of what you do with your life;
 Experience is the real wealth.
It's a real, honest talking moment for someone 
who grabs you by the shoulders and looks into your eyes.
 This book is a refreshing slap to this generation
 to help them live a contented, stable life.</pre>";
					} 
					else if($_REQUEST['id']==5){
						echo" <pre class='product-description'> <span>Description:</span><br> Always remember that this life 
will not be made by anyone but you, 
and no matter how humiliating you are. 
Make sure that you will arrive one day..
and when you arrive.. you will have finished the journey 
we lived through for some time..that journey that we called together.</pre>";
						
					}
					else if($_REQUEST['id']==7){
						echo"<pre class='product-description'> <span>Description:</span><br>God does not want perfection from us,
but He wants us to constantly strive towards it.
In this book I summarize my journey through 40 years in this world.
A journey of conflict and an attempt at continuous advancement
in search of inner peace. I don't claim to have arrived. 
The road is still long. But it is a human experience that 
you may see yourself in and benefit and benefit.</pre>";
					}
					
					else{
						echo" <pre class='product-description'> <span>Description:</span><br>With the passing of the years 
and the succession of years,
some people will reach a stage of maturity 
called the (royal stage) 
and I invite you not to wait for 
this stage after autumn visits you!
Without you, this book contains concepts, 
ideas, and laws that I don’t think will 
expedite the attendance of that luxurious 
and luxurious stage of your life.</pre>";
					}
					?>
					
							
						<div class="action">
										
						<?php if($_REQUEST['id']==2){
					echo"	<a href='humanpdf\فن اللامبالاة.pdf'class='add-to-cart btn btn-default' type='button'> read book</a>";}
					
					else if($_REQUEST['id']==5){
						echo"<a href='humanpdf\بداية طريق.pdf'class='add-to-cart btn btn-default' type='button'> read book</a>";
					}
					else if($_REQUEST['id']==7){
						echo"<a href='humanpdf\كتاب أربعون.pdf'class='add-to-cart btn btn-default' type='button'> read book</a>";
					}
					
					else{ 
						echo"<a href='humanpdf\المرحلة الملكية.pdf'class='add-to-cart btn btn-default' type='button'> read book</a>";
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

