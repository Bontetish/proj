<!DOCTYPE html>
<html>
<head>
	<title>error page</title>
	<link rel="stylesheet" type="text/css" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="home.css">
</head>
<style type="text/css">

	body{
		background: #4dff4d;
	}
</style>
<body>
	<div class="container">
		<div class="row">
			<div class="col-md-10 col-md-offset-1">
				<?php 
                        echo '<h3 class="alert alert-danger">';
				 		echo "Failed, You cannot order less than one meal!";
				 		echo'<h3>';


				 ?>
				
			</div>
			
		</div>
		
	</div>

</body>
</html>