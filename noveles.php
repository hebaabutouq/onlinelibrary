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
					<?php	if($_REQUEST['id']==6){
					echo"	<pre class='product-description'> <span>Description:</span><br>A novel to reassure my heart pdf written by Adham Sharkawy.. 
Al-Razi went one day to Nishapur and people ran to him and  old woman 
said: Who is this? She was told:
This is Al-Razi who knows a thousand proofs for the existence of God
She said: If he did not have a thousand doubts in his heart,
 he would not need a thousand evidence!
When he heard her saying it, he said: Oh God,
 faith is like the faith of old women!
This novel is dedicated to the believers in God,
 the faith of old women without philosophy or complexity..
Those who, if someone were told, 
“Give us evidence for the existence of God,
” he might stutter, and his language would not help him, 
but what harms him and suffices him of faith is that 
every cell in his body believes that: 
There is no god but God and that Muhammad is the Messenger of God..</pre>";
					} 
					else if($_REQUEST['id']==9){
						echo" <pre class='product-description'> <span>Description:</span><br> The long shadow book pdf written by Jane Webster..
 there is an exceptional attraction in the stories that
 orphans stand up to their heroism because it is a real heroism 
 when you go out into the world and confront it with an open chest
 without a social system that works to support and protect you. 
 It seems logical if we remember the most childhood stories
 that left their traces in our hearts
 Heidi Anne, Tarzan, Sarah or Sally, Oliver Twist,
 Tom Sawyer and even Harry Potter.
 These are the heroes through whom we learn 
 to love life and truly belong to the world,in Judy Abbott's words.
This novel was written in 1912 and since then
 it has been a source of inspiration for readers,
 writers and artists alike, and it has been repeatedly transformed 
 into theatrical and musical performances, films, 
 series and even cartoon series.
 This novel tells the adventure of Judy Abbott
 who came out of the orphanage because one of the guardians 
 decided to take care of her education process 
 after noticing her exceptional talent in writing 
 and rural writing in particular and her insistence on happiness 
 as a choice in life and not a right acquired from birth.</pre>";
						
					}
					else if($_REQUEST['id']==10){
						echo"<pre class='product-description'> <span>Description:</span><br>Pulse pdf novel written by Adham Sharkawy.. 
Now,Pulse,I find the right moment to commit my first betrayal to you! 
I finally decided to write you,
 some women betray them when we write them.
Convertinga woman like you into a 
language is considered treason from some angle.
After all that has happened, I am trying to stand on
the boundary between you and me, and nothing but writing is my way.

I know, O Nabd, that when I write to you,
I carry the language beyond what you can handle, 
the nightin your eyes is greater than the capacity of language.
And this blackness is all lived and not told.
And the dimple that draws on your right cheek when you smile,
The language gets utterly confusing, but it's an idea worth it.
God was with the help of a language I wanted it to become you.</pre>";
					}
					else if($_REQUEST['id']==11){
echo"<pre class='product-description'> <span>Description:</span><br>A girl... an accordion player... some fanatical German... a boxer...

Multiple thefts...
They are the protagonists of a story I keep retelling over and over, 
one of many stories each trying to prove to me that you, 
your human existence, is worth it.
If you wish to inquire into the details of this story, 
come with death and it will tell you a story.</pre>";
					}
					else{
						echo" <pre class='product-description'> <span>Description:</span><br>The novel is the first of Alphonse Carr's literary works,
written by him influenced by the romantic school that 
dominated literature in that era of French history.
 and make it the basic framework for his novel.
Al-Manfaluti was influenced by the novel,
and took the initiative to transfer it to the Arabic language,
because of its explicit call to adhere to the values ​​of truth, 
goodness and beauty embodied in the naive rural village environment.
Al-Manfaluti grew up in Egypt,
 unlike the city life based on deception, 
lies, fraud, and hypocrisy, 
where people flock to collect money without
observing the simplest principles and moral values.
The novel tries to emphasize that the sharp disagreement between 
one of them considers that happiness is the result of
 a person’s success in adapting and
 adapting to the realistic circumstances 
 that surround him, and the other concept considers 
 that money is the key to happiness, 
 whatever the means used to obtain it.</pre>";
					}
					?>
					
							
						<div class="action">
										
						<?php if($_REQUEST['id']==6){
					echo"	<a href='novelespdf\ليطمئن قلبي.pdf'class='add-to-cart btn btn-default' type='button'> read book</a>";}
					
					else if($_REQUEST['id']==9){
						echo"<a href='novelespdf\صاحب الظل الطويل.pdf'class='add-to-cart btn btn-default' type='button'> read book</a>";
					}
					else if($_REQUEST['id']==10){
						echo"<a href='novelespdf\نبض.pdf'class='add-to-cart btn btn-default' type='button'> read book</a>";
					}
					else if($_REQUEST['id']==11){
						echo"<a href='novelespdf\سارقة الكتب.pdf'class='add-to-cart btn btn-default' type='button'> read book</a>";
					}
					else{ 
						echo"<a href='novelespdf\ماجدولين.pdf'class='add-to-cart btn btn-default' type='button'> read book</a>";
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

