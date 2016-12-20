
<?php require_once('connection.php');
?>
session_start();

<?php  


	$bus_id = $_POST["bus_id"];
	$route_id= mysqli_query($connection,'SELECT route_id FROM bus WHERE reg_id = $bus_id LIMIT 1');
	$company=$_SESSION["company"];
	$bus_condition =$_POST["bus_condition"];
	$num_of_seats  = date("num_of_seats");
	


	$query ="INSERT INTO bus ( reg_id , route_id  , company , bus_condition , num_of_seats) VALUES ( '{$reg_id}','{$route_id}','{$company}','{$bus_condition}','{num_of_seats}' )";
	

	$result = mysqli_query($connection,$query);

	if($result){
		
		echo "recode successfully added!";
	}else{
		echo "record adding failed!";
	}

?>

<?php mysqli_close($connection); ?>


