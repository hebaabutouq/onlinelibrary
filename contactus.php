<!DOCTYPE html>
<html lang="en">
<head>
<title> library </title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width,initial-scale=1">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
 
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
<style> 
ul{list-style-type:none; margin-left:360px; margin-top:-110px;}
li{  float:left; margin:-10px;}
li a{text-decoration:none; padding:25px; font-size:30px;color:black; display:block; text-align:center; background-color:#edecdf;}
li a:hover{ background-color:#c8b5a4;}
video{ margin-left:600px; margin-top:20px;}
input,label,textarea{ margin-left:30px;}
</style>
</head>
<body style="background-color:#fafbed;" >
<img  src="logo.png" width="100px" height="100px" style="">
<img  src="logo.png" width="100px" height="100px" style="float:right;">
<div style=" background-color:#edecdf;">

<ul>
 <li><a href="home.php"> Home   </a> </li>
 <li><a href="aboutus.html">About us   </a> </li>
  <li><a href="#">  Contact us </a> </li>
  <li> <a href="login.php">log in  </a> </li>
</ul></div>
<br><br> <br> <br> <br> <br> 
<h2 style="text-align:center;margin-bottom:-50px;"> welcome to heba`s library </h2>
<br><br> 
<img src="images.jfif" width="350px" height="150px" />
<img src="images.jfif" width="350px" height="150px" style="float:right;"/>
<!--Section: Contact v.2-->
<section class="mb-4">

    <!--Section heading-->
    <h2 class="h1-responsive font-weight-bold text-center my-4">Contact us</h2>
	
	<div  class="contact" style="margin:10px">
<i class="fa fa-mobile-phone" style="padding-left:360px;font-size:30px;color:black"></i> <a>0797139814</a>
<i class="fa fa-envelope" style="padding-left:20px;font-size:30px;color:black"></i> <a href="info@beprogrammer.org">heba`slibrary@gmail.com</a> 
<i class="fa fa-facebook-square" style="padding-left:20px;font-size:30px;color:black"></i><a href="https://www.facebook.com/beprogrammer.org/"> heba`s library </a>
<i class="fa fa-instagram" style="padding-left:20px;font-size:30px;color:black"></i><a href="https://www.instagram.com/beprogrammerorg/"> heba`s library </a><br>
</div><br> <br><br>
    <!--Section description-->
    <p class="text-center w-responsive mx-auto mb-5">Do you have any questions? Please do not hesitate to contact us directly. Our team will come back to you within
        a matter of hours to help you.</p>

    <div class="row">
<!--Grid column-->
<div class="col-md-9 mb-md-0 mb-5">
  <form id="contact-form" name="contact-form" action="mail.php" method="POST">
<!--Grid row-->
<div class="row">

<!--Grid column-->
 <div class="col-md-6">
  <div class="md-form mb-0">
 <label for="name" class="">Your name</label>
<input type="text" id="name" name="name"   class="form-control">
</div>
</div>

 <!--Grid column-->
<!--Grid column-->
 <div class="col-md-5">
 <div class="md-form mb-0">
 <label for="email" class="" >Your email</label>
<input type="email" id="email" required name="email" class="form-control">
  </div>
 </div>
 
 <!--Grid column-->
</div>
<!--Grid row-->
 <!--Grid row-->
  <div class="row">
 <div class="col-md-8">
    <div class="md-form mb-0">
<label for="subject" class="">Subject</label>
 <input type="text" id="subject" name="subject"  class="form-control">
  </div>
 </div>
 </div>
 <!--Grid row-->
  <!--Grid row-->
 <div class="row">

 <!--Grid column-->
<div class="col-md-8">
  <div class="md-form">
 <label for="message">Your message</label>
<textarea type="text" id="message" name="message"  rows="4" class="form-control md-textarea"></textarea>                      
</div>
 </div>
</div>
<!--Grid row-->
 </form>

<div class="text-center text-md-left">
<br>
 <a  class="btn btn-primary" onclick="document.getElementById('contact-form').submit();">Send</a>
 </div>
 <div class="status"></div>
 </div>
</div>
</section>
<!--Section: Contact v.2-->
</body>

