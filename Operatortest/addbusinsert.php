<?php
/*
Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password)
*/

//take from session
$bus_id="WPNA-8201";
$route_no = "383/2";

$link = mysqli_connect("localhost", "root","","busticketing");
$sql = "SELECT * FROM route WHERE route_no='$route_no'";
$result = mysqli_query( $link,$sql) or die('Could not look up user information; ' . mysqli_error($link));
$row  = mysqli_fetch_array($result,MYSQLI_ASSOC);



//pass from session
$start_location = $row['first_station'];
$end_location = $row['second_station'];


$link = mysqli_connect("localhost", "root","","busticketing");

// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

// Escape user inputs for security
$bus_id = mysqli_real_escape_string($link, $_POST['bus_id']);
$date = mysqli_real_escape_string($link, $_POST['date']);
$time = $_POST['time'];
$seats = $_POST['seats'];

// insert bus to the active busses table
$sql_insert = "INSERT INTO active_busses( bus_id , route_no , start_loc , end_loc , date , time , seats_available ) VALUES ('$bus_id','$route_no',  $start_location  ,  $end_location  ,'$date','$time',$seats)";
$result3 = mysqli_query( $link,$sql_insert) or die('Could not look up user information; ' . mysqli_error($link));

echo "<div align='center'><h2>Your Bus has been successfully added for booking. </h2></div>";

// close connection
mysqli_close($link);
?>