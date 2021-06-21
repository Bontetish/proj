
<!DOCTYPE html>
<html>
<head>
	<title>Contact Us</title>
	<link rel="stylesheet" type="text/css" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
</head>
<style type="text/css">
  body{
    background: #ccffcc;
  }
</style>
<body>
	<br>
	<div class="container">
		<div class="row">
			<div class="col-md-6 col-md-offset-3 ">
				<h2 style="text-align: center;">Welcome to our contact page</h2>
				<?php 
					if (filter_has_var(INPUT_POST, 'submit')) {
					   $name=$_POST['name'];
					   $email=$_POST['email'];
					   $msg=$_POST['msg'];
					}
					  if ((!empty($name)) && (!empty($email)) && (!empty($msg))) {
					  	if (filter_var($email, FILTER_VALIDATE_EMAIL) === false) {
					  	      echo '<h6 class="alert alert-danger">';
						      echo "The email you entered is invalid";
							  echo'</h6>';
					  		

					  	}else{
						  	 $tomail ='bonienkilah@gmail.com';
						  	 $subject ='contact Request from'.$name;
						  	 $body ="<h2>Contact Request</h2>";
						  	  

					  	}

					  }else{
					  	  echo '<h6 class="alert alert-danger">';
					      echo "You must fill in all fields! ";
						  echo'</h6>';
					  }
						
					 ?>
				<form method="POST" action=" <?=$_SERVER['PHP_SELF']; ?> ">
					<label>Name: </label>
					<input type="text" name="name"  class="form-control" placeholder="Enter your name here"><br>
					<label>Email: </label>
					<input type="text" name="email" class="form-control" placeholder="Please enter your email"><br>
					<label>Message:</label>
					<textarea name="msg" class="form-control" placeholder="Enter the message here"></textarea><br>
					<input type="submit" name="submit" value="submit" class="btn btn-primary">
					
				</form>

			</div>
			
		</div>
		
	</div>



</body>
</html>