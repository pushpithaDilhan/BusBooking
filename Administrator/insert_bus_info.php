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
$reg_no = mysqli_real_escape_string($link, $_POST['reg_no']);
$owner = mysqli_real_escape_string($link, $_POST['owner']);
$route_no = mysqli_real_escape_string($link, $_POST['route_no']);

$sql = "INSERT INTO bus (registration_no, owner, route_no) VALUES ('$reg_no', '$owner', '$route_no')";

if(mysqli_query($link, $sql)){
    readfile('regsuccess.html');
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}

 
// close connection
mysqli_close($link);
?>