<?php
	session_start();//parse username here
	$username = $_SESSION['username'];

$link = mysql_connect('localhost','root');
mysql_select_db('busticketing',$link);
//testing on my database
//$result = mysql_query('SELECT * FROM route',$link);
//$result_locations = mysql_query('SELECT start FROM booking',$link);

$result = mysql_query('SELECT * FROM route',$link);
$result_locations = mysql_query('SELECT first_station FROM route UNION SELECT second_station FROM route',$link);
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



    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
   
	</head>
<body style="background-color:#3399ff;" background="../style/images/operator_home.jpg"><nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
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
                    <li class="active">
                        <a href="#">Reservation</a>
                    </li>
                    <li>
                        <a href="avalableseats.php">Booking List</a>
                    </li>
                    <li>
                        <a href="busdetails.php">Bus Details</a>
                    </li>
                    <li >
                        <a href="addbus.php">Activate bus</a>
                    </li>
                    <li>
                        <a href="addbus.php">Activate bus</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>
	<!-- jQuery Version 1.11.1 -->
    <!-- Custom CSS -->
    <style>
    body {
        /*padding-top: 70px;
       Required padding for .navbar-fixed-top. Remove if using .navbar-static-top. Change if height of navigation changes. */
        
    }
    </style>


<div class="container jumbotron" style="width:50%;margin-top:50px;border-radius:10px;">
    <form action="validatebooking.php" method="post" class="form-horizontal" style="margin-right:10px;width:95%;">


        <div class="form-group">
            <label for="address" class="control-label col-sm-2">Customer NIC:</label>
            <div class="col-sm-10">
                <input type="text" name="customer_id"  class="form-control" />
            </div>
        </div>
        <div class="form-group">
            <label for="Name" class="control-label col-sm-2">Route:</label>
            <div class="col-sm-10">
                <select name="route_name" class="form-control dropdown-toggle btn btn-default">
                    <?php while ($row = mysql_fetch_assoc($result)):?>
                    <option value="<?php echo $row['route_no'] ?>"><?php echo $row['route_no'] ." ".$row['first_station']." - ".$row['second_station']?></option>
                    <?php endwhile ?>
                </select>
            </div>
        </div>

        <div class="form-group">
            <label for="Name" class="control-label col-sm-2">Start:</label>
            <div class="col-sm-10">
                <select name="start_station" class="form-control dropdown-toggle btn btn-default">
                    <?php while ($row = mysql_fetch_assoc($result_locations)):?>
                        <option value="<?php echo $row['first_station'] ?>"><?php echo $row['first_station'] ?></option>
                    <?php endwhile ?>
                </select>
            </div>
        </div>

        <div class="form-group">
            <label for="address" class="control-label col-sm-2">Date:</label>
            <div class="col-sm-10">
                <input type="text" name="book_date" value="2016/12/21" class="form-control" />
            </div>
        </div>
        <script type="text/javascript">
            $(function() {
                $('input[name="birthdate"]').daterangepicker({
                        singleDatePicker: true,
                        showDropdowns: true
                    },
                    function(start, end, label) {
                    });
            });
        </script>

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
            <label for="email" class="control-label col-sm-2">Seats needed:</label>
            <div class="col-sm-10">
                <input type="number" name="seats" class="form-control" id="email" >
            </div>
        </div>

        <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
                <input type="submit" value="Reserve" class="btn btn-success">              &nbsp;&nbsp;&nbsp;

            </div>
        </div>

    </form>
</div>



   
    


		




     <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>


</body>

</html>


