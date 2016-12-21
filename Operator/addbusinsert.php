
<?php require_once('connection.php');?>


<?php
$link = mysqli_connect("localhost", "root","","busticketing");

// Check connection
if($link === false){
	die("ERROR: Could not connect. " . mysqli_connect_error());
}

session_start();
	$reg_id = mysqli_real_escape_string($link, $_POST["bus_id"]);
	$route_id= mysqli_real_escape_string($link, $_POST["route_id"]);
	$company  = $_SESSION['role_id'];;
	$bus_condition =mysqli_real_escape_string($link, $_POST["bus_condition"]);
	$num_of_seats  = $_POST['num_of_seats'];
	


	$query ="INSERT INTO bus ( reg_id , route_id  , company , bus_condition , num_of_seats) VALUES ( '{$reg_id}','{$route_id}','{$company}','{$bus_condition}','{$num_of_seats}' )";
	

	$result = mysqli_query($connection,$query);

	if($result){
		
		echo "recode successfully added!";
	}else{
		echo "record adding failed!";
	}

?>

<?php mysqli_close($link); ?>


