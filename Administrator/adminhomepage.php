<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Admin-Home</title>
	<link href = "../style/css/bootstrap.min.css" rel = "stylesheet">
	<link rel="stylesheet" href="styles.css">

</head>
<body background = "../style/images/image3.jpg">
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
            <a class="navbar-brand" href="#">Home</a>
        </div>
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
                <li>
                    <a href="administrator/busses.php">View Buses</a>
                </li>
                <li>
                    <a href="administrator/busroutes.php">View Routes</a>
                </li>
                <li>
                    <a href="administrator/userlist.php">View Customers</a>
                </li>

                <li>
                    <a href="administrator/owner_list.php" >View Bus Owners</a>
                </li>

                <li>
                    <a href="administrator/admin_list.php" >View Admins</a>
                </li>

                <li>
                    <a href="administrator/admin_new_password.php" >Change Password</a>
                </li>

                <li style="position:absolute; top: 0;right: 0">
                    <a href="../index.html" style="text-align:right;">Sign Out</a>
                </li>


            </ul>
        </div>
        <!-- /.navbar-collapse -->
    </div>
    <!-- /.container -->
</nav>

	

	



</body>
</html>

