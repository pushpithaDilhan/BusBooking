<?php require_once('inc/connection.php'); ?>
<?php 

	$query = "SELECT * FROM bus";

	$result_set = mysqli_query($connection, $query);

	if ($result_set){

		$table = '<table>';
		$table .= '<tr><th>Registered Number</th><th>Owner</th><th>Route Number</th></tr>';

		while ($record = mysqli_fetch_assoc($result_set)){
			$table .= '<tr>';
			$table .= '<td>' . $record['reg_id'] . '</td>';
			$table .= '<td>' . $record['company'] . '</td>';
			$table .= '<td>' . $record['route_id'] . '</td>';
			$table .= "<td><a onClick=\"javascript: return confirm('Please confirm deletion');\" href='deletebus.php?id=".$record['reg_id']."'>Remove</a></td><tr>";
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

	<p><input type="submit" value="Add" name="add_bus" onclick= "parent.location=('add_bus.php')"></p>
</body>
</html>

<?php mysqli_close($connection); ?>