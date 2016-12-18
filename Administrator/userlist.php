<?php require_once('inc/connection.php'); ?>
<?php 

	$query = "SELECT NIC, name, email, address, occupation FROM customer";

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
			$table .= '</tr>';
		}
	}

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Busses</title>
	<style>
		table {border-collapse: collapse;} 
		td, th {border: 1px solid black; padding: 10px;}
	</style>
</head>
<body>
	<header>
		<h1>Bus List</h1>
	</header>

	<?php echo "$table"; ?>
</body>
</html>

<?php mysqli_close($connection); ?>