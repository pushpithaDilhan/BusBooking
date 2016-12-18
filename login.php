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
$username = md5(mysqli_real_escape_string($link, $_POST['username']));
$password = md5(mysqli_real_escape_string($link, $_POST['password']));

// attempt search query execution
$sql = "SELECT IFNULL((SELECT role FROM login WHERE username='$username' AND password= '$password'),'not found')";

$result = mysqli_query( $link,$sql) or die('Could not look up user information; ' . mysqli_error($link));

$row  = mysqli_fetch_array($result,MYSQLI_ASSOC);

$key = "IFNULL((SELECT role FROM login WHERE username='$username' AND password= '$password'),'not found')";



if ($row[$key] == 'cus') {
    readfile('Customer/customerhomepage.html');
}
if($row[$key]=='adm'){
    readfile('Administrator/adminhomepage.php');
}
if($row[$key]=='ope'){
    readfile('Operator/operatorhome.html');
}
else if($row[$key] == 'not found'){
    echo "Your username or password is wrong. Try again" ;
}
 
// close connection
mysqli_close($link);
?>