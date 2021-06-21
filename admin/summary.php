<?php 
require('connect.php');
$items_sql = $conn->query("SELECT DISTINCT name FROM orders");
 ?>


<?php include 'incl/header.php'; ?>
<h1 class="text-center bg-primary fixed-top">Summary</h1>
<div class="container" style="margin-top: 60px;">
	<div class="row">
		<div class="col-md-12">
			
			<table class="table table-striped table-hover table-bordered">
				
				<tr class="bg-success">
					<th>Item</th>
					<th>Total Quantity ordered</th>
					<th>Number of Orders</th>
				</tr>
				<?php 	while($item_res = mysqli_fetch_assoc($items_sql)): ?>
				<tr>
					<td>
						<?=$item_res['name'] ?>		
					</td>
					<td>
						<?php 
						$nam = $item_res['name'];
						$quant_sql= $conn->query("SELECT SUM(quant) FROM orders WHERE name = '$nam' and delivery = '0' AND archive='1'");
						$quant_res = mysqli_fetch_array($quant_sql);
						$quantity= implode("", $quant_res);
						$quant_len= strlen($quantity);
						$quant_len= $quant_len/2;
						$quantity =substr($quantity, $quant_len);
						if ($quantity>0) {
							echo $quantity;
						}else{
							echo 0;
						}
						

						 ?>	
					</td>
					<td>
						<?php
						 $quant_sq= $conn->query("SELECT * FROM orders WHERE name = '$nam' and delivery = '0' and archive ='1'");	
						 $rows = mysqli_num_rows($quant_sq);
						 if ($rows>0) {
						 	echo $rows;
						 }else{
						 	echo 0;
						 }
						 
						 ?>
						
					</td>
				</tr>
			<?php 	endwhile ?>
			</table>
			

		</div>
		
	</div>
</div>


<?php include 'incl/footer.php'; ?>  