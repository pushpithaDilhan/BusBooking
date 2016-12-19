<?php
	$username = "Siripala"
?>
<!DOCTYPE html>
<html>
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
	<body><nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.php"><?php echo $username ?></a>
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
	<!-- jQuery Version 1.11.1 -->






    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>
    
    	

    	<!-- Special version of Bootstrap that only affects content wrapped in .bootstrap-iso -->
<link rel="stylesheet" href="https://formden.com/static/cdn/bootstrap-iso.css" /> 

<!-- Inline CSS based on choices in "Settings" tab -->
<style>.bootstrap-iso .formden_header h2, .bootstrap-iso .formden_header p, .bootstrap-iso form{font-family: Arial, Helvetica, sans-serif; color: black}.bootstrap-iso form button, .bootstrap-iso form button:hover{color: white !important;} .asteriskField{color: red;}</style>

<!-- HTML Form (wrapped in a .bootstrap-iso div) -->
<div class="bootstrap-iso">
 <div class="container">
  <div class="row">
   <div class="col-md-6 col-sm-6 col-xs-12">
    <form action="validatebooking.php" method="post">
     <div class="form-group ">
      <label class="control-label requiredField" for="name">
       Customer NIC
       <span class="asteriskField">
        *
       </span>
      </label>
      <input class="form-control" id="name" name="customer_id" type="text"/>
     </div>
     <div class="form-group ">
      <label class="control-label requiredField" for="name1">
       Name
       <span class="asteriskField">
        *
       </span>
      </label>
      <input class="form-control" id="name1" name="name" type="text"/>
     </div>
     <div class="form-group ">
      <label class="control-label requiredField" for="name2">
       Bus Reg No
       <span class="asteriskField">
        *
       </span>
      </label>
      <input class="form-control" id="name2" name="bus_id" type="text"/>
     </div>
     <div class="form-group ">
      <label class="control-label requiredField" for="number">
       Number of seats to be booked
       <span class="asteriskField">
        *
       </span>
      </label>
      <input class="form-control" id="number" name="seat_count" type="text"/>
     </div>
     <div class="form-group ">
      <label class="control-label " for="name3">
       Start
      </label>
      <input class="form-control" id="name3" name="start" type="text"/>
     </div>
     <div class="form-group ">
      <label class="control-label " for="name4">
       End
      </label>
      <input class="form-control" id="name4" name="ending" type="text"/>
     </div>
     <div class="form-group">
      <div>
       <button class="btn btn-primary " name="submit" type="submit">
        Submit
       </button>
      </div>
     </div>
    </form>
   </div>
  </div>
 </div>
</div>



		


</body>

</html>


