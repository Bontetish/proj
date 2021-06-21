<?php 
require('includes/connect.php');
require('includes/header.php');
require('nav.php');
if (isset($_SESSION['idnumber'])) {
	$customer = $_SESSION['idnumber'];
}
 ?>

<body>
	<div class="container">
		<div class="row">
			<div class="col-md-1">
				
			</div>
			<div class="col-md-10 bg-primary" style=" margin-top: 100px;border-radius: 20px; border-color: black;padding:20px">
				<?php 
					if (isset($_GET['id'])) {
						$id =$_GET['id'];
					}
					if (isset($_POST['view'])) {
						$name = $_POST['name'];
						$quantity = $_POST['quantity'];
						$price = $_POST['price'];
						$pic = $_POST['pic'];
						$description = $_POST['description'];
						$tot_cost =$price*$quantity;
					}
					if ($quantity<1) {?>
						<script type="text/javascript">
							alert('You cannot Order less than one items!');
							window.location.replace('index.php')
						</script>
						<?php
				 		
					}


				 ?>

				<div class="title" style="background: #80ffbf;text-align: center; border-radius: 10px; padding: 1px;">
					<h2><?=$name; ?></h2>
				</div>
				<div class="row" style="margin-top: 10px">
					<div class="col-md-4">
						<h4>Price: <?=$price; ?></h4>
						<h4>Quantity: <?=$quantity; ?></h4>
						<h4>Total Cost: <?='Ksh'.$tot_cost; ?></h4>
						<p>Description: <?=$description; ?></p>
						
					</div>
					<div class="col-md-8">
						<img style="height: 250px; width: 400px;" src="images/<?php echo $pic; ?>" class="img-responsive  img-thumbnail image">
						
					</div>
					
				</div>
				<!--details confirmation-->
				<div class="row">
					<?php 
					$tabsql =$conn->query("SELECT * FROM tables");

					 ?>
					<form method="POST" action="success.php?id=<?=$id;?>">
						<input type="hidden" name="name" value="<?=$name;?>">
						<input type="hidden" name="quantity" value="<?=$quantity;?>">
						<input type="hidden" name="price" value="<?=$price;?>">
						<input type="hidden" name="tot_cost" value="<?=$tot_cost;?>">
						<input type="hidden" name="id" value="<?=$id;?>">
						<input type="hidden" name="description" value="<?=$description;?>">
						<input type="hidden" name="customer" value="<?=$customer ?>"><br>
						<p>You wanna reserve a table?</p>
						<label>Table: </label>
						<select class="form-control" name="table">
							<option value=""></option>
							<?php while($tabs=mysqli_fetch_assoc($tabsql)): ?>
							
							<option value="<?=$tabs['name']; ?>"><?=$tabs['name']; ?></option>
							<?php endwhile;?>
						</select><br>
						<p>You want it delivered to you?</p>
						<input type="text" name="address" placeholder="Enter your address" class="form-control"><br>

						<input type="submit" name="order" value="Order" style="margin-top: 20px; margin-left: 10px;" class="btn btn-success form-control btn push-right">
						
					</form>
				</div>
				
				
			</div>
			<div class="col-md-1">
				
			</div>
			
		</div>

		
	</div>

</body>
</html>