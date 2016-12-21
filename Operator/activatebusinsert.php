<?php
/*
Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password)
*/


$link = mysqli_connect("localhost", "root","","busticketing");

// Check connection
if($link === false){
	die("ERROR: Could not connect. " . mysqli_connect_error());
}

// Escape user inputs for security
$route_name = $_POST['route_name'];
$start_station = mysqli_real_escape_string($link, $_POST['start_station']);
$date = mysqli_real_escape_string($link, $_POST['date']);
$time = $_POST['time'];
$seats = $_POST['seats'];

$bus_id = mysqli_real_escape_string($link, $_POST['bus_id']);
session_start();
$role_id = $_SESSION['role_id'];

	$sql_insert = "INSERT INTO active_busses (bus_id , route_no , start_loc , date , time , seats_available )
    VALUES ('$bus_id', '$route_name', '$start_station', '$date', '$time','$seats')";
	$result3 = mysqli_query( $link,$sql_insert) or die('Could not look up user information; ' . mysqli_error($link));



	echo "<div align='center'><h2>Your Bus has been added to the active list. </h2></div>";



// close connection
mysqli_close($link);
?>