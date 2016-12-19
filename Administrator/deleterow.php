<?php
 
	$id = $_POST['id'];
	$dbc = mysqli_connect('localhost', 'root', '', 'busticketing') or die('Connection error!');	 

	$query = "DELETE FROM tablica WHERE id = '$id'";

	
	mysqli_query($dbc, $query) or die('Database error!');

?>