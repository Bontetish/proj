<?php 
require('connect.php');

 ?>
<?php 
	$name = ((isset($_POST['name']))?$_POST['name']:'');
	$description = ((isset($_POST['description']))?$_POST['description']:'');
	$price = ((isset($_POST['price']))?$_POST['price']:'');
	$category = ((isset($_POST['category']))?$_POST['category']:'');
	if ($_POST) {

     $error = array();
     
      if(isset($_FILES['image'])){
           $error= array();
           $file_name = $_FILES['image']['name'];
           $file_size =$_FILES['image']['size'];
           $file_tmp =$_FILES['image']['tmp_name'];
           $file_type=$_FILES['image']['type'];
           $file_ext=strtolower(end(explode('.',$_FILES['image']['name'])));

           $expensions= array("jpeg","jpg","png");

           if(in_array($file_ext,$expensions)=== false){
              $errors[]="extension not allowed, please choose a JPEG or PNG file.";
           }

           if($file_size > 2097152){
              $errors[]='File size must be excately 2 MB';
           }
         }
          if (empty($name)) {
               $error[] = "Name cannot be empty!";
              }
                if (empty($category)) {
                     $error[] = "category cannot be empty!";
                   }
                if (empty($price)) {
                      $error[] = "price cannot be empty!";
                  }
                   if (empty($description)) {
                      $error[] = "description cannot be empty!";
                  }
          if(empty($error)){
           move_uploaded_file($file_tmp,"../images/".$file_name);
          $insertSql = $conn->query("INSERT INTO prod(name, img, price, category, description)
                              VALUES('$name', '$file_name', '$price', '$category', '$description')");
          header("Location:items.php");
             
           }else{
                $error_message = '<span class ="error">';
               foreach ($error as $key => $value) {
               $error_message .="$value";
              }
             $error_message .='</span><br><br>';    
           }
	}

 ?>
			  

<!DOCTYPE html>
<html>
<?php 
include 'incl/header.php';

 ?>
<style type="text/css">
	.table-head{
		background: green;
	}
	body{
		
	}
</style>
<body>
	<h1 style="text-align: center;" class="bg-primary fixed-top">Manage Items</h1>
	<div class="container-fluid">
		<div class="row" style="margin-top: 55px;">
			<div class="col-md-3">
				<h4 class="bg-warning text-center" style="border-radius: 10px;padding: 5px;">ADD ITEM</h4>
				  <form action="items.php" method="POST" enctype="multipart/form-data">
				  	 <label>Name: </label>
			         <input type="text" name="name" class="form-control" placeholder="Name"><br>
				  	 <label>Image <span class="glyphicon glyphicon-upload"></span>: </label>
			         <input type="file" name="image" class="form-control" /><br>
			         <label>Price: </label>
			         <input type="text" name="price" class="form-control" placeholder="Price"><br>
			         <label>Category: </label>
			         <?php 
			         $cat_Sql = $conn->query("SELECT * FROM category");



			          ?>
			         <select class="form-control" name="category">
			         	<option value="0">---</option>
			         	<?php while($cat = mysqli_fetch_assoc($cat_Sql)): ?>

			         	<option value="<?=$cat['category'] ;?>"><?=$cat['category'] ;?></option>

			         	<?php endwhile; ?>

			         	
			         </select><br>
			         <label>Description: </label>
			         <textarea class="form-control" name="description" style="height: 100px;"></textarea><br>
			         <input type="submit" class="btn btn-success form-control" value="Add Item" />
			      </form>
				
			</div>
            <div class="col-md-9">
				<?php
				//delete item
				$tableSql = $conn->query("SELECT * FROM prod ORDER BY id DESC");
				  if (isset(($_GET['delete']))) {
		          $id = $_GET['delete'];
		          $delteQuery = $conn->query("DELETE FROM prod WHERE id ='$id'");
		          header("Location:items.php");


		      	}
		      	//set availability
		      	if (isset($_GET['availability'])) {
		      		$av_id = $_GET['id'];
		      		$availability = $_GET['availability'];
		      		$av_sel = $conn->query("SELECT * FROM prod WHERE Id = '$av_id'");
		      		$av_res = mysqli_fetch_assoc($av_sel);
		      		if ($av_res['availability']!=='0' ) {
		      			$update_sql = $conn->query("UPDATE prod SET availability = '0' WHERE Id = '$av_id'");
		      		}
		      		else{
		      			$conn->query("UPDATE prod SET availability = '1' WHERE Id = '$av_id'");
		      			header('items.php');
		      		}
		      	};




				 ?>
				<table class="table table-bordered table-condensed">
				
					<tr class="table_head bg-warning">
						<th>Id</th><th>Name</th><th>Price</th><th>Category</th><th>Description</th><th>Delete</th>
					</tr>
					<?php while($item = mysqli_fetch_assoc($tableSql)): ?>
					<tr>
						
						

						<td><?=$item['id']; ?></td>
						<td><?=$item['name']; ?></td>
						<td><?=$item['price']; ?></td>
						<td><?=$item['category']; ?></td>
						<td><?=$item['description']; ?></td>
						<td>
							<a href="items.php?delete=<?=$item['id'];?>" class="btn btn-danger btn-sm" style="margin-top: 5px">Delete</a>
						</td>
						 
					</tr>
				<?php endwhile; ?>

					
				</table>
				
			</div>
			
		</div>
			
		</div>
		
	</div>
	  
<?php include 'incl/footer.php'; ?>