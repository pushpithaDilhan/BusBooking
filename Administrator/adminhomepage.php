<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Admin-Home</title>
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

	<header>
		<h1>Welcome Admin</h1>
	</header>

	<nav>
		<a href="http://localhost/busbooking/index.html">log out</a>
	</nav>


	<input type="submit" value="View Busses" name="view_busses" onclick="parent.location=('busses.php')">
	<input type="submit" value="View Routes" name="view_routes" onclick="parent.location=('busroutes.php')">
	<input type="submit" value="View Customers" name="view_customers" onclick= "parent.location=('userlist.php')">
	<input type="submit" value="View Bus Owners" name="view_owners" onclick= "parent.location=('owner_list.php')">
	<input type="submit" value="View System Administrators" name="view_admins" onclick= "parent.location=('admin_list.php')">

</body>
</html>

