<?php 
require('connect.php');


 ?>

 <!DOCTYPE html>
<html>
<?php include 'incl/header.php'; ?>
<body>
	<h1 style="text-align: center;" class="bg-primary fixed-top">Manage Category</h1>
	<div class="container-fluid">
		
		<div class="row" style="margin-top: 50px;">
			<?php include 'incl/sidebar.php'; ?>
			<div class="col-md-3">
				<h4 class="bg-warning text-center" style="border-radius: 10px;padding: 5px;">Add Category</h4>
				<?php 
				if (isset($_POST['add'])) {
					$cat = $_POST['category'];
					if (empty($cat)) {
						echo '<div class="alert alert-danger" role="alert">';
					 	echo "You must enter a category inorder to add!";
					 	echo "</div>";
						
					}else{
						$sql_ins = $conn->query("INSERT INTO category (Id, category) VALUES(NULL,'$cat')");
						if ($sql_ins) {
							echo '<div class="alert alert-success" role="alert">';
					 		echo "You added ".$cat." into your categories' list! ";
					 		echo "</div>";
						}
					}
				}


				 ?>
				<form action="cat.php" method="POST">
					<input type="text" name="category" class="form-control" placeholder="Add Category"><br>
					<input type="submit" name="add" class="btn btn-success">

					
				</form>
			</div>

			<div class="col-md-7">
				<?php 
                 $cat_Sql = $conn->query("SELECT * FROM category");
				 ?>
				


				<table class="table table-striped table-bordered table-condensed table-center">
					<?php 
	                   $tableSql = $conn->query("SELECT * FROM category");
				       if (isset(($_GET['delete']))) {
				        $id = $_GET['delete'];
				        $delteQuery = $conn->query("DELETE FROM category WHERE id ='$id'");
				        if ($delteQuery) {
				                echo '<h5 class="alert alert-danger">';
					            echo "You removed data from the table! ";
					            echo'<h5>';
				        }
				        header("Location:cat.php");
				    }


					 ?>
					<tr class="bg-warning">
						<th>Id</th>
						<th>Category</th>
						<th>Delete</th>
					</tr>
					<?php while($cat = mysqli_fetch_assoc($cat_Sql)): ?>
					<tr>
						<td><?=$cat['Id']; ?></td>
						<td><?=$cat['category']; ?></td>
						<td>
							<a href="cat.php?delete=<?=$cat['Id'];?>" class="btn btn-danger btn-sm">Delete<span class="glyphicon glyphicon-delete"></span></a>
						</td>
					</tr>
					<?php endwhile; ?>
					
				</table>
				
			</div>
			
		</div>
		
	</div>
	  
<?php include 'incl/footer.php'; ?>