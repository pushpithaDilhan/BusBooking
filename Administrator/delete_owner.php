<?php
 
	$id = $_GET['id'];
	$link = mysqli_connect('localhost', 'root', '', 'busticketing') or die('Connection error!');	 

    $link->autocommit(false);

	$query = "DELETE FROM owner WHERE NIC = '$id'";
	$query2 = "DELETE FROM login WHERE role_id = '$id'";

	if(mysqli_query($link, $query) AND mysqli_query($link, $query2)){
    readfile('regsuccess.html');
    $link->commit();
} else{
	$link->rollback();
    echo "ERROR: Could not able to execute $query. " . mysqli_error($link);
}

 
mysqli_close($link);


?>