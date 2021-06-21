<?php 
require('connect.php');
$sql = $conn->query("SELECT * FROM subscribers");





 ?>
<!DOCTYPE html>
<html>
<?php include 'incl/header.php'; ?>
<body>
	<h1 style="text-align: center;" class="bg-primary fixed-top">Subscribers</h1>
	<div class="container-fluid">
		<div class="row" style="margin-top: 50px;">
			<?php include 'incl/sidebar.php'; ?>
			
			<div class="col-md-10" style="padding: 20px;">
					<?php while($sql_res = mysqli_fetch_assoc($sql)): ?>
					<ul>
						<li><h3><?=$sql_res['subscriber_name'] ?></h3></li><hr>
					</ul>
					
					
				    <?php endwhile; ?>

			</div>
			
		</div>
		
	</div>

  <?php include 'incl/footer.php'; ?>