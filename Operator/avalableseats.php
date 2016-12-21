<?php require_once('connection.php');

?>

<?php  

	$query ="SELECT * FROM bookings ";

	$result_set = mysqli_query($connection,$query);
	if($result_set){
		$table = '<table>';
		$table .='<tr><th>NIC </th><th>Route </th><th>Date</th><th>Time</th><th>Seats</th><th>Bus Number</th></tr>';
	while($record = mysqli_fetch_assoc($result_set)){
		 $table .='<tr>';
		 $table .='<td>'.$record['role_id'].'</td>';
		 $table .='<td>'.$record['route_id'].'</td>';
		 $table .='<td>'.$record['date'].'</td>';
		 $table .='<td>'.$record['time'].'</td>';
        $table .='<td>'.$record['seats'].'</td>';
        $table .='<td>'.$record['bus_id'].'</td>';
		 $table .='</tr>';

	}
	$table .='</table>';
	}else{
		echo "reading failed!";
	}
	

?>
<!DOCTYPE html>
<html>
<br>

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Booking list</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <style>
    body {
        padding-top: 70px;
        /* Required padding for .navbar-fixed-top. Remove if using .navbar-static-top. Change if height of navigation changes. */
    }
    </style>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <div class="container">
    <h2>Booked seats with customer names!</h2>
    <br>
    </div>
	</head>
	<body ><nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.php">Home</a>
                </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li>
                        <a href="booking.php">Reservation</a>
                    </li>
                    <li class = "active">
                        <a href="avalableseats.php">Booking List</a>
                    </li>
                    <li >
                        <a href="busdetails.php">Bus Details</a>
                    </li>
                    <li>
                        <a href="addbus.php">Add a Bus</a>
                    </li>
                    <li>
                        <a href="activatebus.php">Activate Bus</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>
	<!-- jQuery Version 1.11.1 -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>
    </body>
<style type="text/css">
	table{border-collapse: collapse;}
	td,th{border: 1px solid black; padding: 10px}
</style>
<div class="container">
<?php 
	echo $table;
?>
</div>
</html>
<?php mysqli_close($connection); ?>