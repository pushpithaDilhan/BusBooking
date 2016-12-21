<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Add bus</title>

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
<form action="insert_bus_info.php" method="post" class="form-horizontal" style="margin-right:10px;width:95%;">
	<div class="form-group">
    	<label for="registration_number" class="control-label col-sm-2">Registration number:</label>
        <div class="col-sm-10">
        <input type="text" name="reg_no" class="form-control" id="Reg_no" placeholder="Enter bus registration number">
        </div>
    </div>

    <div class="form-group">
    	<label for="owner" class="control-label col-sm-2">Name of the owner:</label>
        <div class="col-sm-10">
        <input type="text" name="owner" class="form-control" id="Owner" placeholder="Enter owner's name">
        </div>
    </div>

    <div class="form-group">
    	<label for="route_no" class="control-label col-sm-2">Route number:</label>
        <div class="col-sm-10">
        <input type="text" name="route_no" class="form-control" id="Route_no" placeholder="Enter bus route number">
        </div>
    </div>

    <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
    <input type="submit" value="Submit" class="btn btn-success" onclick= "parent.location=('insert_bus_info.php')">
     &nbsp;&nbsp;&nbsp;
    <a href="busses.php"><button type="button" class="btn btn-danger">Cancel</button></a>
    </div>
    </div>
    
</form>
</div>
</body>
</html>