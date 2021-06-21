<?php 
require('connect.php');
if (isset($_GET['item'])) {
	$it_name =(string)$_GET['item'];
	$items_sql = $conn->query("SELECT * FROM orders WHERE name = '$it_name'");
}

 ?>


<?php include 'incl/header.php'; ?>
<div class="container">
	<div class="row">
		<div class="col-md-3">
			<?php 	while($item_res = mysqli_fetch_assoc($items_sql)): ?>
			<h5><a href="view_list.php?item= <?=$item_res['name']  ?> "><?=$item_res['name'] ?></a></h5>
			<?php 	endwhile ?>

		</div>
		
	</div>
</div>


<?php include 'incl/footer.php'; ?>  