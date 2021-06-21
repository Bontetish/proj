<?php 
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

  ?>

<!DOCTYPE html>
<html>
<head>
	<title>Orders page</title>
	     <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
	         <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    
</head>
<body>
	<h1 style="text-align: center;" class="bg-primary fixed-top">Delivered Orders</h1>
	<div class="container-fluid">
		
		<div class="row" style="margin-top: 50px;">
			<?php include 'incl/sidebar.php'; ?>
			<?php 
			$sql_query = $conn->query("SELECT * FROM orders WHERE archive = '1' and delivery = '1'  ORDER BY time_order DESC");

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
						<th>Delivery Status</th>

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
							<?php 
						        $rec_sql = $conn->query("SELECT * FROM orders WHERE archive ='1' ORDER BY id ASC");
						        $t_sql =mysqli_fetch_assoc($rec_sql);
						        $init =$t_sql['time_order'];
						        $current =date('y-m-d H:i:s');
						        $init=strtotime($init);
						        $current=strtotime($current);
						        $time_diff = $current - $init;
						        $time_diff =$time_diff+7200;


						        
						        
						         ?>

						</td>
						<td>
						<h5><span class="badge badge-success">Delivered</span></h5>
						</td>
						
							
						
						
					</tr>
					<?php endwhile; ?>
				</table>
			</div><br><br>
			
		</div>
		
	</div>
<?php include 'incl/footer.php'; ?>