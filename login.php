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
$sql = "SELECT IFNULL((SELECT role FROM login WHERE username={$username} AND password={$password}),'not found')";
$result = mysql_query($sql,$link);
$row = mysql_fetch_assoc($result);

if ($row[0] == 'cus') {
    readfile('Customer/customerhomepage.html');
}
else if($row[0] == 'not found'){
    echo "Your username or password is wrong. Try again" ;
}    
else{
    echo "Somthing is wrong" ;
}
 
// close connection
mysqli_close($link);
?>