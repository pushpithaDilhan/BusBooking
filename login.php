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
$username = mysqli_real_escape_string($link, $_POST['username']);
$password = md5(mysqli_real_escape_string($link, $_POST['password']));

//check if passwords are equal
if($password!=$password_retype){
    echo "Passwords are not matching";
}else{
    // attempt insert query execution
    $sql = "INSERT INTO customer (name, NIC , address , occupation , email , username , password ) 
    VALUES ('$name', '$addr', '$nic', '$occupation', '$email','$username','$password')";
if(mysqli_query($link, $sql)){
    echo "Records added successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
}
 
// close connection
mysqli_close($link);
?>