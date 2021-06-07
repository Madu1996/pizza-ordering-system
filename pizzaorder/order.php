<html>
<head>
<title></title>
<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body background="checkOrder.jpg">
<h2 align="center" style="color:white;">Check All Orders</h2>
<form method="post" action="order.php">
Enter delivery date<input type="date" name="date"><br><br>
<input type="submit" name="view" id="view" value="View">
</form>
	<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "mydatabase";
$conn = new mysqli($servername, $username, $password, $dbname);
$results1 = mysqli_query($conn, "SELECT * FROM pizza");
?>
<h2 align="center">All orders</h2>
<table>
		<thead>
			<tr>
				<th>Order ID</th>
				<th>Customer name</th>
				<th>Customer phone number</th>
				<th>NIC</th>
				<th>Delivery date</th>
				<th>Pizza type</th>
				<th>Pizza size</th>
				<th>Quantity</th>
				<th>Status</th>
				<th>Delivered</th>
				<th>Delete</th>
			</tr>
		</thead>
		
		<?php while ($row = mysqli_fetch_array($results1)) { ?>
			<tr>
				<td><?php echo $row['id']; ?></td>
				<td><?php echo $row['cn']; ?></td>
				<td><?php echo $row['cp']; ?></td>
				<td><?php echo $row['nic']; ?></td>
				<td><?php echo $row['d']; ?></td>
				<td><?php echo $row['pt']; ?></td>
				<td><?php echo $row['ps']; ?></td>
				<td><?php echo $row['q']; ?></td>
				<td><?php echo $row['s']; ?></td>
				<td>
					<a href="order.php?deliver=<?php echo $row['id']; ?>" class="edit_btn" >Deliver</a>
				</td>
				<td>
					<a href="order.php?del=<?php echo $row['id']; ?>" class="del_btn">Delete</a>
				</td>
			</tr>

		<?php }

	
if(isset($_POST['view'])){
		$date=$_POST['date'];
		$results = mysqli_query($conn, "SELECT * FROM pizza where d='$date'"); 
	?>

</table>	<br><br>
<h2 align="center">Orders by delivery date</h2>	
	<table>
		<thead>
			<tr>
				<th>Order ID</th>
				<th>Customer name</th>
				<th>Customer phone number</th>
				<th>NIC</th>
				<th>Delivery date</th>
				<th>Pizza type</th>
				<th>Pizza size</th>
				<th>Quantity</th>
				<th>Status</th>
				<th>Delivered</th>
				<th>Delete</th>
			</tr>
		</thead>
		
		<?php while ($row = mysqli_fetch_array($results)) { ?>
			<tr>
				<td><?php echo $row['id']; ?></td>
				<td><?php echo $row['cn']; ?></td>
				<td><?php echo $row['cp']; ?></td>
				<td><?php echo $row['nic']; ?></td>
				<td><?php echo $row['d']; ?></td>
				<td><?php echo $row['pt']; ?></td>
				<td><?php echo $row['ps']; ?></td>
				<td><?php echo $row['q']; ?></td>
				<td><?php echo $row['s']; ?></td>
				<td>
					<a href="order.php?deliver=<?php echo $row['id']; ?>" class="edit_btn" >Deliver</a>
				</td>
				<td>
					<a href="order.php?del=<?php echo $row['id']; ?>" class="del_btn">Delete</a>
				</td>
			</tr>
		
		<?php }
		
}


if (isset($_GET['del'])) {
	$id = $_GET['del'];
	mysqli_query($conn, "DELETE FROM pizza WHERE id=$id");
	unset($_POST['view']);
	header('location: order.php');
}
if (isset($_GET['deliver'])) {
	$id1 = $_GET['deliver'];
	mysqli_query($conn, "UPDATE pizza SET s='Delivered' WHERE id=$id1");
	unset($_POST['view']);
	header('location: order.php');
}

?>
</table>
</body>
</html>