<?php 
error_reporting(0);
require('connect.php');
 ?>
 <?php 
if (isset($_GET['delete'])) {
	$id = $_GET['delete'];
	$sql_del = "DELETE FROM orders WHERE id = '$id'";
	$del_query = mysqli_query($conn, $sql_del);
	//$sql_arch = "SELECT * FROM orders WHERE id = '$id'";
	//$arc_query = mysqli_query($conn, $sql_arch);


}

	 $rec_sql = $conn->query("SELECT * FROM orders WHERE archive ='1' ORDER BY id ASC");
	

						        
						        
						  

  ?>

<?php include 'incl/header.php'; ?>
<body>
	<h1 style="text-align: center;" class="bg-primary fixed-top">Pending Orders</h1>
	<div class="container-fluid">
		
		<div class="row" style="margin-top: 50px;">
			<?php include 'incl/sidebar.php'; ?>
			<?php 
			$sql_query = $conn->query("SELECT * FROM orders WHERE archive = '1' and delivery = '0'  ORDER BY time_order DESC");

			 ?>
			 		
			<div class="col-md-10">
				<table class="table table-striped table-hover table-bordered" style="padding: 10px;">
					<tr class="bg-success">
						<th>Order Number</th>
						<th>Item Title</th>
						<th>Item Price(Ksh)</th>
						<th>Item Quantity</th>
						<th>Item Toatal cost(Ksh)</th>
						<th>Address</th>
						<th>Table</th>
						<th>Customer</th>
						<th>Time of order</th>
						<th>Delivery</th>

					</tr>
					<?php while($order = mysqli_fetch_assoc($sql_query)): ?>
							<?php
					 $init =$order['time_order'];
					 $current =date('y-m-d H:i:s');
					 $init=strtotime($init);
					 $current=strtotime($current);
					 $time_diff = $current - $init;
					 $time_diff =$time_diff+3600; 
					 ?>
						<?php if($time_diff<1800): ?>
					<tr>
						<td>
							<?=$order['id'] ;?>
						</td>
						<td>
							<?=$order['name']; ?>
						</td>
						<td>
							<?=$order['price']; ?>
						</td>
						<td>
							<?=$order['quant']; ?>
						</td>
						<td>
							<?=$order['tot_cost']; ?>
						</td>
						<td>
							<?=$order['address']; ?>
						</td>
						<td>
							<?=$order['tabl']; ?>
						</td>
						<td>
							<?=$order['customer']; ?>
						</td>
						<td>
							<?=$order['time_order']; ?>
							

						</td>
						<td>
							<h5><span class="badge badge-secondary">Pending</span></h5>
						</td>
							
						
						
					</tr>
				<?php endif ?>
					<?php endwhile; ?>
				</table>
			</div><br><br>
			
		</div>
		
	</div>
<?php include 'incl/footer.php'; ?>