<?php 
require('includes/connect.php');
$sql = $conn->query("SELECT * FROM comments ORDER BY com_id Desc");





 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Comments Page</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="home.css">
    
</head>
<body>
	<br><br>
	<div class="container-fluid">
		<h1>List of Comments</h1><hr>
		<div class="row">
			
		
		<div class="col-md-4" style="">
			
			<?php while ($comments=mysqli_fetch_assoc($sql)): ?>
			<div style="background-color: green;padding: 10px; border-radius: 15px;">
				<h5><?=$comments['uname'] ;?> (<?=$comments['time_c'] ;?>)</h5>
				<p><?=$comments['message'] ;?></p>
			</div><br>
			<?php endwhile ?>
			
		</div>
		<div class="col-md-8">
			<a href="index.php" class="btn btn-primary">Go Home</a><br>
			
		</div>
		</div>
	</div>
	

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
</body>
</body>
</html>