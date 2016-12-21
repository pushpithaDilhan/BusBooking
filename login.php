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



// for testing - cutomer
//$username = md5("pushpedilhan");
//$password = md5("pushpitha123");


// for testing - operator
//$username = md5("raaja");
//$password = md5("raaja123");

// for testing - admin
//$username = md5("admin");
//$password = md5("admin123");

// Escape user inputs for security
$username = md5(mysqli_real_escape_string($link, $_POST['username']));
$password = md5(mysqli_real_escape_string($link, $_POST['password']));




// attempt search query execution
$sql = "SELECT IFNULL((SELECT role FROM login WHERE username='$username' AND password= '$password'),'not found')";

$result = mysqli_query( $link,$sql) or die('Could not look up user information; ' . mysqli_error($link));

$row  = mysqli_fetch_array($result,MYSQLI_ASSOC);



$key = "IFNULL((SELECT role FROM login WHERE username='$username' AND password= '$password'),'not found')";

$sql1 = "SELECT role_id FROM login WHERE username='$username' ";
$result1 = mysqli_query( $link,$sql1) or die('Could not look up user information; ' . mysqli_error($link));
$row1  = mysqli_fetch_array($result1,MYSQLI_ASSOC);

$role_id =  $row1['role_id'];

session_start();
$_SESSION['username'] = $username;
$_SESSION['password'] = $password;
$_SESSION['role_id'] = $role_id;



if ($row[$key] == 'cus') {
    readfile('customer/customerhomepage.php');
}
if($row[$key]=='adm'){
    readfile('Administrator/adminhomepage.php');
}
if($row[$key]=='ope'){
    readfile('operator/index.php');
}
else if($row[$key] == 'not found'){
    echo "Your username or password is wrong. Try again" ;
}

// close connection
mysqli_close($link);
?>