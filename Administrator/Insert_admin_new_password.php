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
$password_retype = md5(mysqli_real_escape_string($link, $_POST['password_retype']));

//check if passwords are equal
if($password!=$password_retype){
    echo "Passwords are not matching";
}else{
    // attempt insert query execution

    $sql = "UPDATE admin SET password = '$password' WHERE username = '$username'";
    $sql_login = "UPDATE login SET password = '$password' WHERE username = '$username'";

    
if(mysqli_query($link, $sql) & mysqli_query($link,$sql_login)){
    readfile('regsuccess.html');
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
}
 
// close connection
mysqli_close($link);
?>