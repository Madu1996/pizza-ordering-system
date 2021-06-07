<html>
<head>
<title></title>
<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body background="user_bg.jpg">
<h1 align="center" style="color:green;">Pizza Ordering System</h1>
<h2 align="center" style="color:blue;">Price List of Pizza</h1>
<table border="3px;">
	<thead>
		<tr>
			<th>Pizza Type</th>
			<th>Pizza Size</th>
			<th>Price</th>
		</tr>
		<tr>
			<td>Chillie Chicken</td>
			<td>Small</td>
			<td>500</td>
		</tr>
		<tr>
			<td>Chillie Chicken</td>
			<td>Medium</td>
			<td>750</td>
		</tr>
		<tr>
			<td>Chillie Chicken</td>
			<td>Large</td>
			<td>1200</td>
		</tr>
		<tr>
			<td>Spicy</td>
			<td>Small</td>
			<td>550</td>
		</tr>
		<tr>
			<td>Spicy</td>
			<td>Medium</td>
			<td>800</td>
		</tr>
		<tr>
			<td>Spicy</td>
			<td>Large</td>
			<td>1300</td>
		</tr>
		<tr>
			<td>Cheese</td>
			<td>Small</td>
			<td>650</td>
		</tr>
		<tr>
			<td>Cheese</td>
			<td>Medium</td>
			<td>900</td>
		</tr>
		<tr>
			<td>Cheese</td>
			<td>Large</td>
			<td>1550</td>
		</tr>
	</thead>
</table>
<h2 align="center" style="color:red;">Order your pizza Here...</h2>
<form method="post" action="pizza.php">
<h3 align="center">Enter your details</h3>
<div class="input-group">
<label>Customer name</label><input type="text" name="name"><br>
<label>Customer's phone number</label><input type="text" name="number"><br>
<label>NIC</label><input type="text" name="nic"><br>
<label>Delivery date</label><input type="date" name="date"><br>
<label>Pizza type</label><input type="text" name="type"><br>
<label>Pizza size</label><input type="text" name="size"><br>
<label>Quantity</label><input type="text" name="quantity"><br><br>
<input type="submit" name="order" id="order" value="Order"><br><br>
</div>

<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "mydatabase";
$conn = new mysqli($servername, $username, $password, $dbname);
$name="";
$number="";
$nic="";
$date="";
$type="";
$size="";
$quantity="";
if(isset($_POST['order'])){
	$name=$_POST['name'];
	$number=$_POST['number'];
	$nic=$_POST['nic'];
	$date=$_POST['date'];
	$type=$_POST['type'];
	$size=$_POST['size'];
	$quantity=$_POST['quantity'];
	
	$sql = "INSERT INTO pizza(cn, cp, nic,d,pt,ps,q,s) VALUES ('$name', '$number', '$nic','$date','$type','$size','$quantity','new order')";
	mysqli_query($conn ,$sql);
	echo "<br/><br>Placing order is successful";
}

?>

</form>

</body>
</html>