<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <link rel="stylesheet" href="logincss.css">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
   <style>  input,label,textarea{ margin-left:15px;}
   
   .login-container{
    margin-top: 5%;
    margin-bottom: 5%;
}
.login-form-1{
    padding: 5%;
    box-shadow: 0 5px 8px 0 rgba(0, 0, 0, 0.2), 0 9px 26px 0 rgba(0, 0, 0, 0.19);
}
.login-form-1 h3{
    text-align: center;
    color: #333;
}
.login-form-2{
    padding: 5%;
    background:#c8b5a4;
    box-shadow: 0 5px 8px 0 rgba(0, 0, 0, 0.2), 0 9px 26px 0 rgba(0, 0, 0, 0.19);
}
.login-form-2 h3{
    text-align: center;
    color: #fff;
}
.login-container form{
    padding: 10%;
}
.btnSubmit
{
    width: 50%;
    border-radius: 1rem;
    padding: 1.5%;
    border: none;
    cursor: pointer;
}
.login-form-1 .btnSubmit{
    font-weight: 600;
    color: black;
    background-color: #c8b5a4;
}
.login-form-2 .btnSubmit{
    font-weight: 600;
    color: #black;
    background-color: #fff;
}

ul{list-style-type:none; margin-left:360px; margin-top:-110px;}
li{  float:left; margin:-10px;}
li a{text-decoration:none; padding:25px; font-size:30px;color:black; display:block; text-align:center; background-color:#edecdf;}
li a:hover{ background-color:#c8b5a4;}
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->
</style>
</head>



<body>
<img  src="logo.png" width="100px" height="100px" style="">
<img  src="logo.png" width="100px" height="100px" style="float:right;">
<div style=" background-color:#edecdf;">

<ul>
 <li><a href="home.php"> Home   </a> </li>
 <li><a href="#">About us   </a> </li>
  <li><a href="contactus.php">  Contact us </a> </li>
  <li> <a href="">log in  </a> </li>
</ul></div>

<br> <br> <br> <br> <br>
<div class="container login-container">
            <div class="row">
                <div class="col-md-6 login-form-1">
                    <h3>Login As Admin</h3>
                    <form action="loginadmin.php" method="post">
                        <div class="form-group">
                            <input type="text" name="email" class="form-control" placeholder="Your Email *" required value="" />
                        </div><br>
                        <div class="form-group">
                            <input type="password" name="password" class="form-control" required placeholder="Your Password *" value="" />
                        </div><br>
                        <div class="form-group">
                            <input type="submit" class="btnSubmit" value="Login" />
                        </div>
                        
                    </form>
                </div>
                <div class="col-md-6 login-form-2">
                    <h3>Login As User</h3>
                    <form action="loginuser.php" method="post">
                        <div class="form-group">
                            <input type="text"  name="email"class="form-control" placeholder="Your Email *" required value="" />
                        </div>
						<br>
                        <div class="form-group">
                            <input type="password"  name="password"class="form-control" placeholder="Your Password *" required value="" />
                        </div>
						<br>
                        <div class="form-group">
                            <input type="submit" class="btnSubmit" value="Login" />
                        </div>
						</form></div>
					<hr>	
                     <div  class="contact" style="margin:10px">
<i class="fa fa-mobile-phone" style="padding-left:160px;font-size:30px;color:black"></i> <a>0797139814</a>
<i class="fa fa-envelope" style="padding-left:20px;font-size:30px;color:black"></i> <a>heba`slibrary@gmail.com</a> 
<i class="fa fa-facebook-square" style="padding-left:20px;font-size:30px;color:black"></i><a> heba`s library </a>
<i class="fa fa-instagram" style="padding-left:20px;font-size:30px;color:black"></i><a> heba`s library </a><br>
</div>