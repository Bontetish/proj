<?php

require('includes/connect.php');

//submitting an order
if (isset($_POST['order'])) {
	$customer= $_POST['customer'];
	$address= $_POST['address'];
	$table= $_POST['table'];
	$name = $_POST['name'];
	$quantity = $_POST['quantity'];
	$price = $_POST['price'];
	$id = $_POST['id'];
	$description = $_POST['description'];
	$tot_cost =$price*$quantity;
	$sql_query = $conn->query("SELECT * FROM orders WHERE archive = '1' and delivery = '0' AND tabl ='$table'");
	$tabquery = mysqli_num_rows($sql_query);

	echo $customer.'<br>';
	echo $address.'<br>';
	echo $table.'<br>';
	echo $name.'<br>';
	echo $quantity.'<br>';
	echo $price.'<br>';
	echo $tot_cost.'<br>';
	if (empty($customer)) {?>
		<script type="text/javascript">
			alert('Please Fill your Name!');
			window.location.replace('home.php');
		</script>

	<?php
		
	}elseif (empty($address) AND empty($table)) {?>
		<script type="text/javascript">
			alert('Both address and table cannot be empty!');
			window.location.replace('home.php');
		</script>

	<?php
		
	}elseif (!empty($table) AND !empty($address)) {?>
		<script type="text/javascript">
			alert('You have to choose between To reserve a tablem and address to where your order should be dropped!');
			window.location.replace('home.php');
		</script>

	<?php
		
	}elseif($tabquery>6){?>
		<script type="text/javascript">
			alert('The table is already Full!');
			window.location.replace('home.php');
		</script>

	<?php

	}else{
		$sql = $conn->query("INSERT INTO orders(id,name,price,quant,tot_cost,customer,tabl,address) VALUES(NULL, '$name','$price','$quantity','$tot_cost','$customer','$table','$address')");
		if ($sql) {?>
			<script type="text/javascript">
				alert('You ordered successfully');
				window.location.replace('home.php');
			</script>

	<?php
		}

	}


	

	
}


 ?>

				
	