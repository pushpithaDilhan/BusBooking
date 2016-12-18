
<?php require_once('connection.php');?>

<!DOCTYPE html>
<html>
<head>
	<h1>Adding Status</h1>
</head>
<body>

</body>
</html>
<?php  


	$cus_id = $_POST["customer_id"];;
	$bus_id=$_POST["bus_id"];
	$seats =$_POST["seat_count"];
	$date  = date('Y-m-d H:i:s');
	$start =$_POST["start"];
	$end   =$_POST["ending"];

	$query ="INSERT INTO booking ( customer_id , bus_id ,seat_range , start , ending ,travel_date ) VALUES ( '{$cus_id}','{$bus_id}','{$seats}','{$start}','{$end}','{$date}' )";

	$result = mysqli_query($connection,$query);
	if($result){
		echo "recode successfully added!";
	}else{
		echo "record adding failed!";
	}

?>

<?php mysqli_close($connection); ?>


