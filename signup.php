<?php 
include('connect.php');

 ?>

<?php include 'includes/header.php'; ?>

<body>
	<div class="container">
		<div class="card" style="margin-top: 20px;">
		  <div class="card-header bg-success">
		  	<h2 style="text-align: center;" class="text-uppercase">Sign Up</h2>
		    
		  </div>
		  <div class="card-body">
		  	<?php
              
		if (isset($_POST['register'])) {
			$idnumber =$_POST['idnumber'];
			$email =$_POST['email'];
			$pass =$_POST['pass'];
			$pass1 =$_POST['pass1'];
			$names =$_POST['names'];
			$phone =$_POST['phone'];
			$gender =$_POST['gender'];
			$sql_sel = $conn->query("SELECT * FROM user WHERE user_id = '$idnumber'");
			$sql_res = mysqli_num_rows($sql_sel);
			if (empty($idnumber) OR empty($email) OR empty($pass) OR empty($pass1) OR empty($names) OR empty($phone) OR empty($gender)) {
				echo '<div class="alert alert-danger" role="alert">';
				echo "You must fill each field!";
				echo "</div>";
			}elseif (strlen($idnumber)<8) {
				echo '<div class="alert alert-danger" role="alert">';
				echo "The ID is too short, Please enter a valid ID!";
				echo "</div>";
			}elseif (strlen($pass)<6) {
				echo '<div class="alert alert-danger" role="alert">';
				echo "The password is too weak!";
				echo "</div>";
			}elseif ($pass !== $pass1) {
				echo '<div class="alert alert-danger" role="alert">';
				echo "The passwords did not match!";
				echo "</div>";
			}elseif($sql_res>0){
				echo '<div class="alert alert-danger" role="alert">';
				echo "There is a user with the same ID! Please choose another one!";
				echo "</div>";
			}elseif(!filter_var($email, FILTER_VALIDATE_EMAIL)){
				echo '<div class="alert alert-danger" role="alert">';
				echo "Invalid email format!";
				echo "</div>";
				
			}else{
				$sql = $conn->query("INSERT INTO user(user_id,names,email,phone,gender,pass) VALUES('$idnumber','$names','$email','$phone','$gender','$pass')");
				if ($sql) {?>
					<script type="text/javascript">
						alert('Dear <?=$names ?> Your account was successfully created! ');
						window.location.replace('index.php');
					</script>
					<?php
					
				}
			}
		}


		  	 ?>
		  	 <!--sign up form-->
		  	<form action="signup.php" method="POST">
						<div class="row">
							<div class="form-group col-md-6">
								<label for="idnumber">ID Number: </label>
								<input type="text" name="idnumber" class="form-control" placeholder="Enter your ID number">
							</div>
							<div class="form-group col-md-6">
								<label for="email">Email: </label>
								<input type="email" name="email" class="form-control" placeholder="Enter your Email">
								
							</div>
							<div class="form-group col-md-6">
								<label for="names">Full Name: </label>
								<input type="text" name="names" class="form-control" placeholder="Enter your IFull Name">
							</div>
							<div class="form-group col-md-6">
								<label for="phone">Phone Number: </label>
								<input type="text" name="phone" class="form-control" placeholder="Enter your Phone Number">
							</div>
							<div class="form-group col-md-6">
								<label for="pass">Password: </label>
								<input type="password" name="pass" class="form-control" placeholder="Set your Password">
							</div>
							<div class="form-group col-md-6">
								<label for="pass">Confirm Password: </label>
								<input type="password" name="pass1" class="form-control" placeholder="Confirm your Password">
							</div>
							<div class="form-group col-md-6">
								<label for="pass">Gender: </label>
								<select name="gender" class="form-control">
								<option value=""></option>
								<option value="Male">Male</option>
								<option value="Female">Female</option>
								</select>
							</div>
								


						</div>
						<div class="footer bg-warning" style="padding: 10px;">
							<input type="submit" name="register" value="Sign Up" class=" btn btn-success ">
							<a href="index.php" class="btn btn-primary" style="margin-left: 10px">Login</a>
						</div>	
							
						</div>
						
				</form>	

		  </div>
		</div>
		<div class="row">		
			
		</div>
	</div>

</body>
</html>