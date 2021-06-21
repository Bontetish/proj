<?php 
error_reporting(0);
require('connect.php');
 ?>
 <?php 
if (isset($_GET['delete'])) {
	$id = $_GET['delete'];
	$sql_del = $conn->query("DELETE FROM orders WHERE id = '$id'");
	if ($sql_del) {?>
		<script type="text/javascript">
			alert('Order deleted successfully!');
		</script>
		<?php
		
	}
		


}
  $rec_sql = $conn->query("SELECT * FROM orders WHERE archive ='1' ORDER BY id ASC");
  					$id =$order['id'] ;
					$init =$order['time_order'];
					$current =date('y-m-d H:i:s');
					$init=strtotime($init);
					$current=strtotime($current);
					$time_diff = $current - $init;
					$time_diff =$time_diff+7200;


  ?>
  <?php include 'incl/header.php'; ?>
<body>
	<h1 style="text-align: center;" class="bg-primary fixed-top">Orders</h1>
	<div class="container-fluid">
		<div class="row text-center" style="margin-top: 60px; margin-bottom: 5px;">
			<a class="btn btn-secondary" style="margin-left: 10px" href="pending.php">View Pending orders</a>
			<a class="btn btn-success" style="margin-left: 10px" href="delivered.php">View Delivered orders</a>
			<a class="btn btn-info" style="margin-left: 10px" href="archive.php">View Archives</a>
			<a class="btn btn-primary" style="margin-left: 10px" href="summary.php">Summary</a>
		</div>	
			
		<div class="row">
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
						<th>Archive</th>
						<th>Status</th>
						<th>Delivery</th>

					</tr>
					<?php while($order = mysqli_fetch_assoc($sql_query)): ?>
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
							<a href="archive.php?archive=<?=$order['id'] ; ?>" class="btn btn-danger btn-sm">Delete</a>
						</td>
						<td>
							
							<?php 
							//Updating status of code
							$id =$order['id'] ;
							$init =$order['time_order'];
					        $current =date('y-m-d H:i:s');
					        $init=strtotime($init);
					        $current=strtotime($current);
					        $time_diff = $current-$init;
					        $time_diff =$time_diff+3600;
							if ($time_diff<1800){
								echo '<h5><span class="badge badge-secondary">Pending...</span></h5>';
							}else{
								echo '<h5><span class="badge badge-success">Ready</span></h5>';
							}
							 ?>
						</td>
						<td>
							<?php
							$id =$order['id'] ;
							$init =$order['time_order'];
					        $current =date('y-m-d H:i:s');
					        $init=strtotime($init);
					        $current=strtotime($current);
					        $time_diff = $current - $init;
					        $time_diff =$time_diff+3600;
					        if (isset($_GET['delivery'])) {
					        	$delivery = $_GET['delivery'];
					        	$deliv_sql = $conn->query("UPDATE orders SET delivery = '1' where id =$delivery");
					        		if ($deliv_sql) {?>
					        			<script type="text/javascript">
								 			alert('You successifully delivered the order! It will be delivered in 30 Minutes!');
								 			window.location.replace('orders.php');
								 		</script>
								 	<?php
					        		}
					        		

					        		
					        	
					        }
					        $identity =$order['id'];
							if ($time_diff>1800) {?>
								<a href="orders.php?delivery= <?=$identity ?>" class="btn btn-success btn-sm">Deliver</a>'
								<?php
							}else{
								echo '<h5><span class="badge badge-warning">Being Prepared</span></h5>';
							}

							 ?>

							
						</td>
							
						
						
					</tr>
					<?php endwhile; ?>
				</table>
			</div><br><br>
			
		</div>
		
	</div>
<?php include 'incl/footer.php'; ?>