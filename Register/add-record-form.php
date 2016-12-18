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
<div class="container jumbotron" style="width:50%;margin-top:50px;border-radius:10px;">
<form action="insert.php" method="post" class="form-horizontal" style="margin-right:10px;width:95%;">
	<div class="form-group">
    	<label for="Name" class="control-label col-sm-2">Name:</label>
        <div class="col-sm-10">
        <input type="text" name="name" class="form-control" id="Name" placeholder="Enter your name">
        </div>
    </div>

    <div class="form-group">
    	<label for="address" class="control-label col-sm-2">Address:</label>
        <div class="col-sm-10">
        <input type="text" name="addr" class="form-control" id="Address" placeholder="Enter your address">
        </div>
    </div>

    <div class="form-group">
    	<label for="nic" class="control-label col-sm-2">NIC:</label>
        <div class="col-sm-10">
        <input type="text" name="nic" class="form-control" id="nic" placeholder="Enter your NIC number">
        </div>
    </div>

    <div class="form-group">
    	<label for="occupation" class="control-label col-sm-2">Occupation:</label>
        <div class="col-sm-10">
        <input type="text" name="occupation" class="form-control" id="occupation" placeholder="Enter your occupation">
        </div>
    </div>

    <div class="form-group">
    	<label for="email" class="control-label col-sm-2">Email:</label>
        <div class="col-sm-10">
        <input type="text" name="email" class="form-control" id="email" placeholder="Enter your email address">
        </div>
    </div>

    <div class="form-group">
    	<label for="username" class="control-label col-sm-2">Username:</label>
        <div class="col-sm-10">
        <input type="text" name="username" class="form-control" id="username" placeholder="Enter a username for login">
        </div>
    </div>

    <div class="form-group">
    	<label for="password" class="control-label col-sm-2">Password:</label>
        <div class="col-sm-10">
        <input type="password" name="password" class="form-control" id="password" placeholder="Enter a password for login">
        </div>
    </div>

    <div class="form-group">
    	<label for="password_retype" class="control-label col-sm-2">Password (retype):</label>
        <div class="col-sm-10">
        <input type="password" name="password_retype"  class="form-control" id="password_retype" placeholder="Retype your address">
        </div>
    </div>

    <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
    <input type="submit" value="Sign Up" class="btn btn-success">
     &nbsp;&nbsp;&nbsp;
    <a href="../index.html"><button type="button" class="btn btn-danger">Cancel</button></a>
    </div>
    </div>
    
</form>
</div>
</body>
</html>