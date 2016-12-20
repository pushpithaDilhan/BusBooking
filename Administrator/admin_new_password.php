<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Change Password</title>

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
<form action="insert_admin_new_password.php" method="post" class="form-horizontal" style="margin-right:10px;width:95%;">

    <div class="form-group">
    	<label for="username" class="control-label col-sm-2">Username:</label>
        <div class="col-sm-10">
        <input type="text" name="username" class="form-control" id="username" placeholder="Enter your username">
        </div>
    </div>

    <div class="form-group">
    	<label for="password" class="control-label col-sm-2">New Password:</label>
        <div class="col-sm-10">
        <input type="password" name="password" class="form-control" id="password" placeholder="Enter your new password">
        </div>
    </div>

    <div class="form-group">
    	<label for="password_retype" class="control-label col-sm-2">New Password (retype):</label>
        <div class="col-sm-10">
        <input type="password" name="password_retype"  class="form-control" id="password_retype" placeholder="Retype your new password">
        </div>
    </div>

    <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
    <input type="submit" value="Change" class="btn btn-success">
     &nbsp;&nbsp;&nbsp;
    <a href="admin_list.php"><button type="button" class="btn btn-danger">Cancel</button></a>
    </div>
    </div>
    
</form>
</div>
</body>
</html>