<?php 
session_start();
error_reporting(0);
include('connect.php');
if (isset($_SESSION['idnumber'])) {
	$id = $_SESSION['idnumber'];
}


if (isset($_POST['update'])) {
	$user_id = $_POST['user_id'];
	$names = $_POST['names'];
	$phone = $_POST['phone'];
	$email = $_POST['email'];
	$gender = $_POST['gender'];
	if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
		echo '<div class="alert alert-danger" role="alert">';
		echo "You must enter a valid email";
		echo "</div>";
	}else{
		$update_sql = $conn->query("UPDATE user SET user_id ='$user_id',names='$names',phone='$phone',email='$email',gender='$gender' WHERE user_id = '$id' ");
		if ($update_sql) {
			echo '<div class="alert alert-success" role="alert">';
			echo "You profile was successifully updated!";
			echo "</div>";
		}
	}

	
}

 ?>

<?php include 'includes/header.php'; ?>
	<div class="container">
		<div class="card" style="margin-top: 10px;">
		  <div class="card-header h1 bg-warning text-uppercase">
		    Your Details
		  </div>
		  <?php 
				$prof_sql = $conn->query("SELECT * FROM user WHERE user_id = '$id'");

					      	if (isset($_POST['up_pic'])) {
					      		if(isset($_FILES['image'])){	
							      $errors= array();
							      $file_name = $_FILES['image']['name'];
							      $file_size =$_FILES['image']['size'];
							      $file_tmp =$_FILES['image']['tmp_name'];
							      $file_type=$_FILES['image']['type'];
							      $file_ext=strtolower(end(explode('.',$_FILES['image']['name'])));
							      
							      $extensions= array("jpeg","jpg","png");
							      
							      if(in_array($file_ext,$extensions)=== false){
							         	echo '<div class="alert alert-danger" role="alert">';
										echo "You did not choose any picture! ";
										echo "</div>";
							      }
							      
							      if($file_size > 2097152){
							         $errors[]='File size must be excately 2 MB';
							      }
							      
							      if(empty($errors)==true){
							         move_uploaded_file($file_tmp,"images/".$file_name);
							         echo "";
							      }else{
							         print_r($errors);
							      }
							   }if (empty($file_name)) {
							   	echo "";
							   }else{
							   	$pic_sql = $conn->query("UPDATE user SET pic ='$file_name' WHERE user_id = '$id'");
							   header('Location: profile.php');
							   }
							   
					      	}
							   
						


				 ?>
		  <div class="card-body">
		  	<?php while ($prof_res = mysqli_fetch_assoc($prof_sql)) :?>
		  	<div class="row">
		  		<div class="col-md-4">
		  			<img class="" width="300" height="400" src="images/<?=$prof_res['pic'] ?>">
		  		</div>
		  		<div class="col-md-8 bg-primary" style="padding: 10px;">
		  			<h4><strong>ID Number: </strong> <?=$prof_res['user_id'] ?></h4><br>
				 	<h4><strong><i class="fa fa-user"></i> User Name: </strong> <?=$prof_res['names'] ?></h4><br>
				 	<h4><strong><i class="fa fa-envelope"></i> Email: </strong> <?=$prof_res['email'] ?></h4><br>
				 	<h4><strong><i class="fa fa-phone"></i> Phone Number: </strong> <?=$prof_res['phone'] ?></h4><br>
				 	<h4><strong>Gender: </strong> <?=$prof_res['gender'] ?></h4><br>
										<!-- Modal -->
					<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="title" aria-hidden="true">
					  <div class="modal-dialog modal-dialog-centered" role="document">
					    <div class="modal-content">
					      <div class="modal-header">
					        <h5 class="modal-title" id="title">Upload Picture</h5>
					        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
					          <span aria-hidden="true">&times;</span>
					        </button>
					      </div>
					      <div class="modal-body">
					        <form action="profile.php" method="POST" enctype="multipart/form-data">
					        
					        	 <label>Choose Picture:</label>
						         <input type="file" name="image" class="form-control"><br>
						         <input type="submit" class="btn btn-outline-primary" name="up_pic" value="Upload Picture">
					       </form>
					      </div>
					      <div class="modal-footer ">
					        <button type="button" class="btn btn-outline-danger" data-dismiss="modal">Close</button>
					      </div>
					    </div>
					  </div>
					</div>
					<!-- Modal -->
					<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true" >
					  <div class="modal-dialog modal-dialog-centered" role="document">
					    <div class="modal-content">
					      <div class="modal-header" style="text-align: center;">
					        <h5 class="modal-title" id="exampleModalCenterTitle" style=" color: blue;">Update Profile</h5>
					        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
					          <span aria-hidden="true">&times;</span>
					        </button>
					      </div>
					      <div class="modal-body" style="padding: 20px;">
					      	
					      	<form action="Profile.php" method="POST">
					      		<?php 
					      		$prof = $conn->query("SELECT * FROM user WHERE user_id = '$id'");

					      		 ?>
					      		<?php while($edit= mysqli_fetch_assoc($prof)): ?>
					      		<input type="text" name="user_id" class="form-control" value="<?=$edit['user_id'] ?>"><br>
					      		<input type="text" name="names" class="form-control" value="<?=$edit['names'] ?>"><br>
					      		<input type="text" name="email" class="form-control" value="<?=$edit['email'] ?>"><br>
					      		<input type="text" name="phone" class="form-control" value="<?=$edit['phone'] ?>"><br>
					      		<label>Edit Gender: </label>
					      		<select class="form-control" name="gender"> value"<?=$edit['gender'] ?>">
					      			<option value="male">male</option>
					      			<option value="female">female</option>
					      		</select><br>
					      		<button type="submit" class="btn btn-outline-primary" name="update">Update Profile</button>
					      		<?php endwhile ?>
					      		
					      	</form>
					        
					      </div>
					      <div class="modal-footer">
					        <button type="button" class="btn btn-outline-danger" data-dismiss="modal">Close</button>
					        
		  		</div>
		  		
		  	
		  	
				 	
				 	

				 <?php endwhile ?>
			</div>
		  </div>
		</div>

					  </div>
					</div>
					<div class="card-footer text-muted bg-secondary">
					    	<!-- Button trigger modal -->
						<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">
						  Edit Profile
						</button>
						<!-- Button trigger modal -->
						<button type="button" class="btn btn-success" data-toggle="modal" data-target="#exampleModal">
						  Update Your Picture
						</button>
					</div>
			</div>
			
		</div>
	</div>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>