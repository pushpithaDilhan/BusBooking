<?php 
	
	$connection = mysqli_connect('localhost', 'root', '', 'userdb');

	if (mysqli_connect_errno()) {
		die("Something went wrong.");
	}
?>