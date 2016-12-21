<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Add bus route</title>

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
            <a class="navbar-brand" href="adminhomepage.php">Home</a>
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
<form action="insert_bus_route_info.php" method="post" class="form-horizontal" style="margin-right:10px;width:95%;">
	<div class="form-group">
    	<label for="route_number" class="control-label col-sm-2">Route number:</label>
        <div class="col-sm-10">
        <input type="text" name="route_no" class="form-control" id="route_no" placeholder="Enter bus registration number">
        </div>
    </div>

    <div class="form-group">
    	<label for="first_station" class="control-label col-sm-2">First station:</label>
        <div class="col-sm-10">
        <input type="text" name="first_station" class="form-control" id="first_station" placeholder="Enter first station">
        </div>
    </div>

    <div class="form-group">
        <label for="second_station" class="control-label col-sm-2">Second station:</label>
        <div class="col-sm-10">
        <input type="text" name="second_station" class="form-control" id="second_station" placeholder="Enter second station">
        </div>
    </div>

    <div class="form-group">
    	<label for="price" class="control-label col-sm-2">Price:</label>
        <div class="col-sm-10">
        <input type="text" name="price" class="form-control" id="price" placeholder="Enter price of the journey">
        </div>
    </div>

    <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
    <input type="submit" value="Submit" class="btn btn-success">
     &nbsp;&nbsp;&nbsp;
    <a href="busroutes.php"><button type="button" class="btn btn-danger">Cancel</button></a>
    </div>
    </div>
    
</form>
</div>
</body>
</html>