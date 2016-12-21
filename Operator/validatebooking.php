


<?php
$link = mysqli_connect("localhost", "root","","busticketing");

// Check connection
if($link === false){
	die("ERROR: Could not connect. " . mysqli_connect_error());
}

	session_start();
$user = $_SESSION['role_id'];

$role_id = mysqli_real_escape_string($link, $_POST['customer_id']);
$route_id = mysqli_real_escape_string($link,$_POST['route_name']);
$start_station = mysqli_real_escape_string($link, $_POST['start_station']);
$date = mysqli_real_escape_string($link, $_POST['book_date']);
$time =  $_POST['time'];
$seats = $_POST['seats'];

// attempt search query execution - search for the required bus
$sql = "SELECT IFNULL((SELECT seats_available FROM active_busses WHERE route_no='$route_id' AND start_loc= '$start_station' AND date='$date' AND time='$time'),'not found')";
$key = "IFNULL((SELECT seats_available FROM active_busses WHERE route_no='$route_id' AND start_loc= '$start_station' AND date='$date' AND time='$time'),'not found')";
$result = mysqli_query( $link,$sql) or die('Could not look up user information; ' . mysqli_error($link));
$row  = mysqli_fetch_array($result,MYSQLI_ASSOC);


$has_bus = true ;
if($row[$key]=='not found'){
	echo '<script type="text/javascript">alert("Unfortunately there is not a bus available for your need."); </script>';
	echo "<a href=\"javascript:history.go(-1)\">GO BACK</a>";
	$has_bus = false;
}
if($row[$key] < $seats){
	echo '<script type="text/javascript">alert("Unfortunately there is not a bus available for your need."); </script>';
	echo "<a href=\"javascript:history.go(-1)\">GO BACK</a>";
	$has_bus = false;
}
else{
	// bus is available and need to extract the bus number
	$sql2 = "SELECT bus_id FROM active_busses WHERE route_no='$route_id' AND start_loc='$start_station' AND date='$date' AND time='$time'";
	$result2 = mysqli_query( $link,$sql2) or die('Could not look up user information; ' . mysqli_error($link));
	$row2  = mysqli_fetch_array($result2,MYSQLI_ASSOC);


	$bus_id = $row2['bus_id'];
	$sql_insert = "INSERT INTO bookings (role_id , route_id , date , time , seats , bus_id )
    VALUES ('$role_id', '$route_id', '$date', '$time', '$seats','{$bus_id}')";
	$result3 = mysqli_query( $link,$sql_insert) or die('Could not look up user information; ' . mysqli_error($link));

	// update active bookings table
	$sql_update = "UPDATE active_busses SET seats_available = seats_available - $seats WHERE route_no='$route_id' AND date='$date' AND time='$time' AND seats_available > 0  ;";
	$result4 = mysqli_query( $link,$sql_update) or die('Could not look up user information; ' . mysqli_error($link));

	if($has_bus){
		echo "<div align='center'><h2>Your booking has been succesfully placed. Your bus number is : </h2></div>";
		echo "<div align='center'><h1>".$bus_id."</h1></div>" ;
		echo "<div align='center'><h3> Your NIC number is ".$role_id.". Bring your NIC as a proof of booking.</h3></div>" ;
	}

}



?>

<?php mysqli_close($link); ?>

<!DOCTYPE html>
<html>
<head>
	<title>Record add status!</title>
</head>
<body>


		<a href="index.php">home</a>
</body>
</html>