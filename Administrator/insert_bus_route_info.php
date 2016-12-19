<?php
$link = mysqli_connect("localhost", "root","","busticketing");
 
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
$route_no = mysqli_real_escape_string($link, $_POST['route_no']);
$first_station = mysqli_real_escape_string($link, $_POST['first_station']);
$second_station = mysqli_real_escape_string($link, $_POST['second_station']);
$price = mysqli_real_escape_string($link, $_POST['price']);

$sql = "INSERT INTO route (route_no, first_station, second_station, price) VALUES ('$route_no', '$first_station', '$second_station', '$price')";

if(mysqli_query($link, $sql)){
    readfile('regsuccess.html');
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}

 
mysqli_close($link);
?>