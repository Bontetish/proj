<?php 
require('connect.php');

 ?>
 <!DOCTYPE html>
 <html lang="en">
 <head> 
    <meta name="viewport" content="width=device-width, initial-scale=1">
 	<title>Welcome to signup/login....</title>
 	<link rel="stylesheet" type="text/css" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
 	<link rel="stylesheet" type="text/css" href="main.css">

 	<meta charset="utf-8">

 </head>
 <style type="text/css">
 	body{
 		background: #;
 	}
 	.container{
 		height: 600px;

 	}
 	.sign{
 		background: #ced0ce;
 		border-radius: 10px;
 		padding: 50px;
 		opacity: .4px;
 	}
 </style>

 <body>
 	<div class="container">
 		<div class="row">
 			<div class="col-sm-6 col-md-4 col-md-offset-4 sign" style="margin-top: 50px;">
 			  <form action="validate.php" method="POST" enctype="multipart/form-data">
 				<label>Email: </label>
 				<input type="email" name="email" placeholder="Enter your email here" class="form-control"><br>
 				<label>Password: </label>
 				<input type="password" name="pass" placeholder="Password" class="form-control"><br>
 				<label>Remember</label>
 				<input type="checkbox" name="rem" value="1"><br>
 				<input type="submit" name="login" value="Log in" class="btn btn-primary" align="right">
 				<h5>Don't have an account? <a href="register.php" >Register</a></h5>
 			  </form>
 				
 				
 			</div>
 		</div>
 		
 	</div>

 
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
 </body>
 </html>
