<?php

$link = mysql_connect('localhost','root');
mysql_select_db('userdb',$link);
$result = mysql_query('SELECT * FROM route',$link);

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
            <a class="navbar-brand" href="../common/routelist.php">Search Routes</a>
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

                <li>
                    <a href="../Administrator/adminhomepage.php" >Admin test</a>
                </li>

                <li>
                    <a href="../Register/add-record-form.php" style="text-align:right;position:fixed;">SignUp</a>
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
        <input type="text" name="bus_id" class="form-control" id="bus_id" placeholder="Enter bus number">
        </div>
    </div>

    <div class="form-group">
            <label for="Name" class="control-label col-sm-2">Route:</label>
            <div class="col-sm-10">
                <select name="route_name" class="form-control dropdown-toggle btn btn-default">
                    <?php while ($row = mysql_fetch_assoc($result)):?>
                    <option value="<?php echo $row['route_no'] ?"><?php echo $row['route_no'] ." ".$row['first_station']." - ".$row['second_station']?></option>
                    <?php endwhile ?>
                </select>
            </div>
    </div>


    <div class="form-group">
    	<label for="bus_condition" class="control-label col-sm-2">NIC:</label>
        <div class="col-sm-10">
        <input type="text" name="bus_condition" class="form-control" id="bus_condition" placeholder="Ac / Luxuary /super Luxuary / Normal ">
        </div>
    </div>

    <div class="form-group">
    	<label for="num_of_seats" class="control-label col-sm-2">Number of seats:</label>
        <div class="col-sm-10">
        <input type="text" name="num_of_seats" class="form-control" id="num_of_seats" placeholder="Enter your occupation">
        </div>
    </div>

   
    <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
    <input type="submit" value="Add bus" class="btn btn-success">
     &nbsp;&nbsp;&nbsp;
    <a href="index.php"><button type="button" class="btn btn-danger">Cancel</button></a>
    </div>
    </div>
    
</form>
</div>
</body>
</html>