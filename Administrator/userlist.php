<?php require_once('inc/connection.php'); ?>
<?php 

	$query = "SELECT * FROM customer_view";

	$result_set = mysqli_query($connection, $query);

	if ($result_set){

		$table = '<table>';
		$table .= '<tr><th>NIC Number</th><th>Customer Name</th><th>Email address</th><th>Address</th><th>Occupation</th></tr>';

		while ($record = mysqli_fetch_assoc($result_set)){
			$table .= '<tr>';
			$table .= '<td>' . $record['NIC'] . '</td>';
			$table .= '<td>' . $record['name'] . '</td>';
			$table .= '<td>' . $record['email'] . '</td>';
			$table .= '<td>' . $record['address'] . '</td>';
			$table .= '<td>' . $record['occupation'] . '</td>';
			$table .= "<td><a onClick=\"javascript: return confirm('Please confirm deletion');\" href='deleteuser.php?id=".$record['NIC']."'>Remove</a></td><tr>";
			$table .= '</tr>';
		}
	}

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Customers</title>
	<style>
		table {border-collapse: collapse;} 
		td, th {border: 1px solid black; padding: 10px;}
	</style>
</head>
<body>
	<header>
		<h1>Customers</h1>
	</header>

	<?php echo "$table"; ?>
	
	
</body>
</html>

<?php mysqli_close($connection); ?>