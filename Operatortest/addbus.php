<?php

// pass from session
$bus_id="WPNA-8201";
$route_no = "383/2";

$link = mysqli_connect("localhost", "root","","busticketing");
$sql = "SELECT * FROM route WHERE route_no='$route_no'";
$result = mysqli_query( $link,$sql) or die('Could not look up user information; ' . mysqli_error($link));
$row  = mysqli_fetch_array($result,MYSQLI_ASSOC);

//pass from session
$start_location = $row['first_station'];
$end_location = $row['second_station'];

?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Register</title>

<!-- bootstrap -->
<link href = "../style/css/bootstrap.min.css" rel = "stylesheet">
<link rel="stylesheet" href="styles.css">

</head>

<body style="background-color:#3399ff;">

<!-- Navigation -->
<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
    <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="../common/routelist.php">Home</a>
        </div>
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
                <li>
                    <a href="#">About</a>
                </li>
                <li>
                    <a href="#">Services</a>
                </li>
                <li>
                    <a href="#">Contact</a>
                </li>

            </ul>
        </div>
        <!-- /.navbar-collapse -->
    </div>
    <!-- /.container -->
</nav>

<div class="container jumbotron" style="width:50%;margin-top:50px;border-radius:10px;">
<form action="addbusinsert.php" method="post" class="form-horizontal" style="margin-right:10px;width:95%;">
	<div class="form-group">
    	<label for="bus_id" class="control-label col-sm-2">Bus Number:</label>
        <div class="col-sm-10">
        <input type="text" name="bus_id" class="form-control" id="bus_id" value="<?php echo $bus_id ?>">
        </div>
    </div>


    <div class="form-group">
        <label for="num_of_seats" class="control-label col-sm-2">Date:</label>
        <div class="col-sm-10">
            <input type="text" name="date" class="form-control" id="date" value="<?php echo date('Y/m/d')?>">
        </div>
    </div>

    <div class="form-group">
        <label for="nic" class="control-label col-sm-2">Time:</label>
        <div class="col-sm-10">
            <select name="time" class="form-control">
                <option value="8.00 AM">8.00 AM</option>
                <option value="9.00 AM">9.00 AM</option>
                <option value="10.00 AM">10.00 AM</option>
                <option value="11.00 AM">11.00 AM</option>
            </select>
        </div>
    </div>

    <div class="form-group">
        <label for="num_of_seats" class="control-label col-sm-2">Seats:</label>
        <div class="col-sm-10">
            <input type="number" name="seats" class="form-control" id="seats">
        </div>
    </div>


    <div class="form-group">
        <div class="col-sm-offset-2 col-sm-10">
            <input type="submit" value="Activate" class="btn btn-success">              &nbsp;&nbsp;&nbsp;

        </div>
    </div>
    
</form>
</div>
</body>
</html>