<?php require_once('inc/connection.php'); ?>
<?php 

	$query = "SELECT * FROM admin_view";

	$result_set = mysqli_query($connection, $query);

	if ($result_set){

		$table = '<table>';
		$table .= '<tr><th>NIC Number</th><th>Administrator Name</th><th>Email address</th><th>Address</th></tr>';

		while ($record = mysqli_fetch_assoc($result_set)){
			$table .= '<tr>';
			$table .= '<td>' . $record['NIC'] . '</td>';
			$table .= '<td>' . $record['name'] . '</td>';
			$table .= '<td>' . $record['email'] . '</td>';
			$table .= '<td>' . $record['address'] . '</td>';
			
			$table .= '</tr>';
		}
	}

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Administrators</title>
	<style>
		table {border-collapse: collapse;} 
		td, th {border: 1px solid black; padding: 10px;}
	</style>
</head>
<body>
	<header>
		<h1>Administrators</h1>
	</header>

	<?php echo "$table"; ?>
	<p><input type="submit" value="Add" name="add_admin" onclick= "parent.location=('add_admin.php')"></p>
	
</body>
</html>

<?php mysqli_close($connection); ?>