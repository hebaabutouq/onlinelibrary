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
						
					<?php	if($_REQUEST['id']==17){
					echo"	<pre class='product-description'> <span>Description:</span><br>The rebel flogged all his letters before 
she made her first presentation in front of you, gentlemen...
She did not write about love, 
but the bruises tamed her against the rebellion, 
more than just a book, and the voice that will read to 
you my curses written in it will come out of you,
a voice that did not Did you know that it existed before,
did any of you see the blood on the body of the rebel?
No, all that you have seen is scars sewn by
an old woman selling roses in a place I used to resort to when
I do not find the rebellious lamps more than a book as long as 
he shouts in all galaxies something inside you and you, 
and you were afraid to whisper it even in front of yourselves. 
The thin line between truth and execution is the 
product of psychological battles. 
Between existence and non-existence,
the rebel was not accustomed to dancing, 
but moved against the rhythm of every song. 
It was said that he should not rebel against me.</pre>";
					} 
					else if($_REQUEST['id']==18){
						echo" <pre class='product-description'> <span>Description:</span><br> In a time when the ambitious youth 
who carries the concerns of his religion and his country.. 
he carries them on his back and reveals them and thinks about 
the future in the form of smart thoughts.. 
in this difficult time, Ahmed Al Shugairi comes out to us..
he carries his thoughts and ideas.. 
he does not express himself only,but expresses On the feelings,
feelings and thoughts of a generation of young people 
who love their religion and country and dream of a better future..
 Thoughts of Ahmed Al Shugairi are a flame of hope that clearly says 
 that the youth of this nation are the hope for a better future..</pre>";
						
					}
					else if($_REQUEST['id']==19){
						echo"<pre class='product-description'> <span>Description:</span><br>“Writing in progress” is evidence of all of the above.
Since the first pages, I sensed the difference in the language 
used from the previous one in the first book 
and Ali’s attempt to present his ideas in a different
 and new framework, perhaps even on himself. one.
The book came with different 'feeling' messages between love
And longing, reproach, loss, 
wishing and hope, some of which are as if
It is easy to know and guess the identity 
of her future because of what he brought from her
Feelings of love and loyalty, 
and some of them are, of course, vague
Only the owner knows it.</pre>";
					}
					else if($_REQUEST['id']==20){
echo"<pre class='product-description'> <span>Description:</span><br></pre>";
					}
					else{
						echo" <pre class='product-description'> <span>Description:</span><br></pre>";
					}
					?>
					
							
						<div class="action">
										
						<?php if($_REQUEST['id']==17){
					echo"	<a href='thoughtpdf\المتمرد.pdf'class='add-to-cart btn btn-default' type='button'> read book</a>";}
					
					else if($_REQUEST['id']==18){
						echo"<a href='thoughtpdf\خواطر شاب.pdf'class='add-to-cart btn btn-default' type='button'> read book</a>";
					}
					else if($_REQUEST['id']==19){
						echo"<a href='thoughtpdf\جاري الكتابة.pdf'class='add-to-cart btn btn-default' type='button'> read book</a>";
					}
					else if($_REQUEST['id']==20){
						echo"<a href='thoughtpdf\أنثى الكتب.pdf'class='add-to-cart btn btn-default' type='button'> read book</a>";
					}
					else{ 
						echo"<a href='thoughtpdf\اعجوبة.pdf'class='add-to-cart btn btn-default' type='button'> read book</a>";
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

