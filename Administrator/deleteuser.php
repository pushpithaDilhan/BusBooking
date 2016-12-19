<?php
 
	$id = $_GET['id'];
	$link = mysqli_connect('localhost', 'root', '', 'busticketing') or die('Connection error!');	 

	$query = "DELETE FROM customer WHERE NIC = '$id'";

	if(mysqli_query($link, $query)){
    readfile('regsuccess.html');
} else{
    echo "ERROR: Could not able to execute $query. " . mysqli_error($link);
}

 
mysqli_close($link);


?>