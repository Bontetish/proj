<?php 
require('connect.php');	
if (isset($_GET['archive'])) {
	$archive = $_GET['archive'];
	$arc_sql = $conn->query("UPDATE orders SET archive = '0' WHERE id = '$archive'");
	header('location: orders.php');
}
$arc_select = $conn->query("SELECT * FROM orders WHERE archive = '0'");
if (isset($_GET['restore'])) {
	$restore_id = $_GET['restore'];
	$restore_sql = $conn->query("UPDATE orders SET archive = '1' WHERE id = '$restore_id'");
	header('location: archive.php');
}

 ?>
 <!DOCTYPE html>
 <html>
 <head>
 	<title>	Archives</title>
 	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
 </head>
 <body>
	<h1 style="text-align: center;" class="bg-primary fixed-top">Archived Orders</h1>
	<div class="container-fluid">
		
		<div class="row" style="margin-top: 50px;">
			<?php include 'incl/sidebar.php'; ?>
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
						<th>Delete | Archive</th>

					</tr>
					<?php while($order = mysqli_fetch_assoc($arc_select)): ?>
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
							<a style="margin-bottom: 5px;" href="archive.php?delete=<?=$order['id'] ; ?>" class="btn btn-danger btn-sm">Delete</a>
							<a href="archive.php?restore=<?=$order['id'] ; ?>" class="btn btn-info btn-sm">Restore</a>
						</td>
							
						
						
					</tr>
					<?php endwhile; ?>
				</table>
 				
 			</div>
 			
 		</div>
 		
 	</div>

<?php include 'incl/footer.php'; ?>