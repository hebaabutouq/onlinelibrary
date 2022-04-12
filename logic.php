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
						
					<?php	if($_REQUEST['id']==26){
					echo"	<pre class='product-description'> <span>Description:</span><br>The book examines the ways in which
life can be arranged for the highest degree 
of enjoyment and success, gives guidelines for 
the realization of this full and rich way of living,
and advises that even the lived life should
always aspire to greater heights.
Abounding on perennially relevant topics, 
Schopenhauer's highly readable work appears here 
in an excellent translation.</pre>";
					} 
					else if($_REQUEST['id']==27){
						echo" <pre class='product-description'> <span>Description:</span><br> Simplifying life means enriching it,
while our consumer society invites you to the opposite,
do not let the current carry you with it;.
This phrase is almost a summary of the 
philosophical essence in which the
author (Dominique Leroux) believes, 
and on which she builds this book (The Art of Simplicity),
which in turn comes as an embodiment of 
the summary of her experience in Japan,
where she was influenced during her long stay 
by the way of living in the country that adopted it,
This way of life is based on the principle of
'little for more'. It applies to all areas of life,
both physical and spiritual. The summary of her call:
purify your inner self, empty your sorrows,
abandon those purchases to which you are driven by
your unbridled desire to buy only,
eat your food in moderation, take care of your body,
mind and soul, and move from the art of living to
live happily in your home, to the art of living to
live happily in your body. In this book 
there is everything that helps you 
to live happily in your body, mind, 
and with yourself, and then with others: that is,
to live in that way of life and 
the deep oriental philosophy,
in which lies the secret of harmony and happiness.</pre>";
						
					}
					
					else if($_REQUEST['id']==28){
echo"<pre class='product-description'> <span>Description:</span><br>Courage is not the absence of fear.
Osho says it is, most likely,
the full presence of fear 
and the courage to face it. 
The book includes insights into this field,
how these fears arise, and how they 
can be understood and addressed. 
Osho suggests that man should rejoice 
when he faces changes in his life,
because the change takes him away 
from what is familiar and pushes him to
an adventure that deepens his understanding 
and awareness of himself and the world around him.
The book begins by discovering 
the profound meaning of courage,
and how it can be translated into one's daily life.
Unlike books that tell 
of heroic deeds in extraordinary circumstances, 
this book focuses on developing the inner strength 
that enables true living each day. 
It's the courage to make change happen when we need it.
The courage to stand up for 
our credibility to face others, 
the courage to accept the invisible despite all fears,
in our relationships and actions, 
and in our journey to learn 
who we are and why we were created.
Courage includes some meditation techniques 
that help people control their fears.</pre>";
					}
					else{
						echo" <pre class='product-description'> <span>Description:</span><br>A wonderful and interesting book.
Reflections and dialogues with the soul 
and creation in the vast universe..
a very honest dialogue and an attempt 
to extract the defects in human souls 
from within in order to cure 
and expel them outside them forever,
and to destroy the constants that 
the great writer and philosopher, 
Gibran has long been angry at,
and the most important of these constants 
is submission to the authority of men.
Religion, those who reap benefits from 
behind the verses of the heavenly books..
while humans do not need them.. 
because the truth is as clear 
and clear as the sun, it requires nothing
but the realization of reason, 
meditation and contemplation</pre>";
					}
					?>
					
							
						<div class="action">
										
						<?php if($_REQUEST['id']==26){
					echo"	<a href='logicpdf\فن العيش الحكيم.pdf'class='add-to-cart btn btn-default' type='button'> read book</a>";}
					
					else if($_REQUEST['id']==27){
						echo"<a href='logicpdf\فن البساطة.pdf'class='add-to-cart btn btn-default' type='button'> read book</a>";
					}
					
					else if($_REQUEST['id']==28){
						echo"<a href='logicpdf\الشجاعة.pdf'class='add-to-cart btn btn-default' type='button'> read book</a>";
					}
					else{ 
						echo"<a href='logicpdf\المجنون.pdf'class='add-to-cart btn btn-default' type='button'> read book</a>";
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

