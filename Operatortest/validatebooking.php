
<?php require_once('connection.php');?>

<?php  


	$cus_id = $_POST["customer_id"];
	$name	= $_POST["name"];
	$bus_id=$_POST["bus_id"];
	$seats =$_POST["seat_count"];
	$date  = date('Y-m-d H:i:s');
	$start =$_POST["start"];
	$end   =$_POST["ending"];
	$data_complete = 0;


	$query ="INSERT INTO booking ( customer_id , bus_id ,seat_range , start , ending ,travel_date ) VALUES ( '{$cus_id}','{$bus_id}','{$seats}','{$start}','{$end}','{$date}' )";
	//$query1 ="INSERT INTO customer ( customer_id ,name ) VALUES ( '{$cus_id}','{$name}')";

	$result = mysqli_query($connection,$query);

	if($result){
		$result = mysqli_query($connection,$query1);
		echo "recode successfully added!";
	}else{
		echo "record adding failed!";
	}

?>

<?php mysqli_close($connection); ?>


