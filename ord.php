<?php 
error_reporting(0);
session_start();
include 'includes/connect.php';
include 'includes/header.php';
include 'nav.php';
if (isset($_SESSION['idnumber'])) {
	$id = $_SESSION['idnumber'];
	$sel_sql = $conn->query("SELECT * FROM orders WHERE customer = '$id'");

}

 ?>
 	<h1 style="text-align: center;" class="bg-warning fixed-top">Your Orders</h1>
	<div class="container-fluid">
			
<div class="row" style="margin-top: 60px;">
			<?php include 'incl/sidebar.php'; ?>
			<?php 
			$sql_query = $conn->query("SELECT * FROM orders WHERE customer='$id'  ORDER BY time_order DESC");

			 ?>
			 		
			<div class="col-md-12">
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
						<th>Status</th>

					</tr>
					<?php while($order = mysqli_fetch_assoc($sql_query)): ?>
					<tr style="background-color: white">
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
							
						
						
					</tr>
					<?php endwhile; ?>
				</table>
			</div><br><br>
			
		</div>
		
	</div>
