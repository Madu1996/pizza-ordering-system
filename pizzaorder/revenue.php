<html>
<head>
<title></title>
<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body background="revenue.jpg">
<form method="post" action="revenue.php">
Enter delivery date <input type="date" name="date"><br>
Enter pizza type    <input type="text" name="type"><br>
<input type="submit" name="view" id="view" value="Show revenue">

<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "mydatabase";
$conn = new mysqli($servername, $username, $password, $dbname);
?>


<?php 
$t=0;
if(isset($_POST['view'])){
		$date=$_POST['date'];
		$type=$_POST['type'];
		$results = mysqli_query($conn, "SELECT * FROM pizza where d='$date' and pt='$type'"); 
		while ($row = mysqli_fetch_array($results)) { 
			$s=$row['ps'];
			$r=mysqli_query($conn, "SELECT p FROM price where pt='$type' and ps='$s'");
			$row1 = mysqli_fetch_array($r);
			$pr=$row1['p'];
			$t=$t+$row['q']*$pr;
		 }
		echo "<br><br>";
		echo "Revenue of $type pizza in $date = ".$t;
		$t=0;
}
?>
</form>
</body>
</html>