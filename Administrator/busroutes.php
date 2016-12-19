<?php require_once('inc/connection.php'); ?>
<?php 

	$query = "SELECT * FROM route";

	$result_set = mysqli_query($connection, $query);

	if ($result_set){

		$table = '<table>';
		$table .= '<tr><th>Route ID</th><th>First Station</th><th>Second Station</th><th>Ticket Price (Rs)</th></tr>';

		while ($record = mysqli_fetch_assoc($result_set)){
			$table .= '<tr>';
			$table .= '<td>' . $record['route_no'] . '</td>';
			$table .= '<td>' . $record['first_station'] . '</td>';
			$table .= '<td>' . $record['second_station'] . '</td>';
			$table .= '<td>' . $record['price'] . '</td>';
			$table .= "<td><a onClick=\"javascript: return confirm('Please confirm deletion');\" href='deleterow.php?id=".$record['route_no']."'>Remove</a></td><tr>";
			$table .= '</tr>';
		}
	}
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Routes</title>
	<style>
		table {border-collapse: collapse;} 
		td, th {border: 1px solid black; padding: 10px;}
	</style>
</head>
<body>
	<header>
		<h1>Route List</h1>
	</header>

	<?php echo "$table"; ?>
	<p>
	<input type="submit" value="Add" name="add_route" onclick= "parent.location=('add_bus_route.php')">
	</p>
</body>
</html>

<?php mysqli_close($connection); ?>