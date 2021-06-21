<?php include 'includes/connect.php'; ?>
<?php include 'includes/header.php'; ?>

<?php 
if (isset($_POST['login'])) {
	$id = $_POST['idnumber'];
	$pass = $_POST['pass'];
	$_SESSION['idnumber'] = $id;
	$_SESSION['pass'] = $pass;
	$user_sql = $conn->query("SELECT * FROM user WHERE user_id = '$id'");
	$res = mysqli_fetch_assoc($user_sql);
	$pass1 = $res['pass'];
	if ($pass === $pass1) {
		header('Location: home.php');
	}else{?>
		<script type="text/javascript">
			alert('Wrong Password or username!')
		</script>
		<?php

	}
}



 ?>
 <style type="text/css">
 	body{
 		background-color: white;
 	}
 </style>

<nav class="navbar navbar-expand-lg navbar-light bg-primary">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
      </li>
      <li class="nav-item">
      </li>
      <li class="nav-item">
      </li>
    </ul>

      <!-- Button trigger modal -->
		<button type="button" class="btn btn-success" data-toggle="modal" data-target="#exampleModal">
		  Login
		</button>

      <a class="btn btn-warning" style="margin-left: 20px;color: white" href="signup.php">Sign Up</a>
  </div>
</nav>
<div class="container-fluid">
	<div class="row" style="margin-top: 3px;">
		<div class="col-md-12">
			<div id="carouselExampleFade" class="carousel slide carousel-fade" data-ride="carousel">
			  <div class="carousel-inner">
			     <div class="carousel-item active">
                <img src="images/images-19.jpg" style="height: 700px;width: auto;border-radius: 10px;" class="d-block w-100" alt="..." class="img-thumbnail">
              </div>
              <div class="carousel-item">
                <img src="images/images (5).jpeg" style="height: 700px;width: auto;border-radius: 10px;" class="d-block w-100" alt="..." class="img-thumbnail">
              </div>
              <div class="carousel-item">
                <img src="images/images (41).jpeg" style="height: 700px;width: auto;border-radius: 10px;" class="d-block w-100" alt="..." class="img-thumbnail">
              </div>
              <div class="carousel-item">
                <img src="images/images (31).jpeg" style="height: 700px;width: auto;border-radius: 10px;" class="d-block w-100" alt="..." class="img-thumbnail">
              </div>
              <div class="carousel-item">
                <img src="images/images (32).jpeg" style="height: 700px;width: auto;border-radius: 10px;" class="d-block w-100" alt="..." class="img-thumbnail">
              </div>
              <div class="carousel-item">
                <img src="images/images (34).jpeg" style="height: 700px;width: auto;border-radius: 10px;" class="d-block w-100" alt="..." class="img-thumbnail">
              </div>
              <div class="carousel-item">
                <img src="images/images (36).jpeg" style="height: 700px;width: auto;border-radius: 10px;" class="d-block w-100" alt="..." class="img-thumbnail">
			  </div>
			  <a class="carousel-control-prev" href="#carouselExampleFade" role="button" data-slide="prev">
			    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
			    <span class="sr-only">Previous</span>
			  </a>
			  <a class="carousel-control-next" href="#carouselExampleFade" role="button" data-slide="next">
			    <span class="carousel-control-next-icon" aria-hidden="true"></span>
			    <span class="sr-only">Next</span>
			  </a>
			</div>
			
		</div>

		<!-- Modal -->
		<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
		  <div class="modal-dialog" role="document">
		    <div class="modal-content">
		      <div class="modal-header">
		        <h5 class="modal-title text-center" id="exampleModalLabel">LOGIN TO CONTINUE</h5>
		        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
		          <span aria-hidden="true">&times;</span>
		        </button>
		      </div>
		      <div class="modal-body">
		        <form action="index.php" method="POST">
		        	<div class="form-group">
		        		<label>ID Number:</label>
		        		<input type="text" name="idnumber" class="form-control" placeholder="Enter Your ID Number">
		        	</div>
		        	<div class="form-group">
		        		<label>Password:</label>
		        		<input type="password" name="pass" class="form-control" placeholder="Enter Your Password">
		        	</div>
		        	<input type="submit" name="login" class="form-control btn btn-success">
		        	
		        	
		        </form>
		      </div>
		      <div class="modal-footer">
		        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
		      </div>
		    </div>
		  </div>
		</div>
		
	</div>
	
</div>
<?php include 'includes/footer.php'; ?>
