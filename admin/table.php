<?php 
require('connect.php');
$tab_Sql = $conn->query("SELECT * FROM tables");
                 
                 
                 //Edit Table
                 if (isset(($_GET['edit']))) {
                 	$id = $_GET['edit'];
                 	$tab_Sq = $conn->query("SELECT * FROM tables WHERE id ='$id'");
                 	$tab_res = mysqli_fetch_assoc($tab_Sq);
                 	$nam = $tab_res['name'];  
                 	if (isset($_POST['edit_table'])) {
                 		$upd_name = $_POST['table'];
                 		$ed_sql = $conn->query("UPDATE tables SET name = '$upd_name'");
                 		header('location: table.php');
                 	}     	

                 }


 ?>

 <?php include 'incl/header.php'; ?>
<body>
	<h1 style="text-align: center;" class="bg-primary fixed-top">Manage tables</h1>
	<div class="container-fluid">
		<div class="row" style="margin-top: 55px">
			<?php include 'incl/sidebar.php'; ?>
			<div class="col-md-3">
				 <?php 
					 if (isset($_POST['table'])) {
					 	$table =$_POST['table'];
					 	if ($_POST['table'] != '') {
					 		$sql = "INSERT INTO tables(id, name) VALUES(NULL, '$table')";
					 		$query = mysqli_query($conn, $sql) or die(mysql_error());
					 		if ($query) {
					        echo '<h5 class="alert alert-success">';
					 		echo "You successifully added a new ".$table." to your Database!";
					 		echo'<h5>';

					 		header('location: table.php');

					 		}
					 	}
					 	else{
					 		//echo '<div class="alert alert-warning"';
					 		echo '<h5 class="alert alert-danger">';
					 		echo "You must enter a table to continue!";
					 		echo'<h5>';
					 		//echo '</div class="alert alert-warning">';
					 	}
					 }



					  ?>
				  <form action="table.php" method="POST" enctype="multipart/form-data">
				  	<h4 class="bg-warning text-center" style="border-radius: 10px;padding: 5px;">Add Table</h4>
				  	 <label>Enter A table </label>
			         <input type="text" name="table" class="form-control" value="<?= (isset($_GET['edit'])? $nam :'') ?>" placeholder="Add a Table">
				  	 <button class="btn btn-primary btn btn-sm" type="submit" name="<?= (isset($_GET['edit'])? 'edit_table':'add_table') ?>" style="margin-top: 10px;"><?= (isset($_GET['edit'])? 'Update Table':'Add Table') ?></button>
			      </form>
				
			</div>
			<div class="col-md-7">
				<?php 
                 
				 ?>
				


				<table class="table table-striped table-bordered table-condensed table-center">
					<?php 
					 					//delete table
                     $tableSql = $conn->query("SELECT * FROM tables");
			         if (isset(($_GET['delete']))) {
			          $id = $_GET['delete'];
			          $delteQuery = $conn->query("DELETE FROM tables WHERE id ='$id'");
			          header("Location:table.php");
			      }

					 ?>
					<tr class="bg-warning">
						<td>Id</td>
						<td>table</td>
						<td>Delete</td>
					</tr>
					<?php while($table = mysqli_fetch_assoc($tab_Sql)): ?>
					<tr>
						<td><?=$table['id']; ?></td>
						<td><?=$table['name']; ?></td>
						<td>
							<a href="table.php?delete=<?=$table['id'];?>" class="btn btn-danger btn-sm">Delete</a>
						</td>
					</tr>
					<?php endwhile; ?>
					
				</table>
				
			</div>
			
		</div>
		
	</div>
	  
<?php include 'incl/footer.php'; ?>