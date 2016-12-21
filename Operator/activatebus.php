<?php
// need to add drop box

    session_start();

    $username = $_SESSION['role_id'];

$link = mysql_connect('localhost','root');
mysql_select_db('busticketing',$link);
$result = mysql_query('SELECT * FROM route',$link);
$result_locations = mysql_query('SELECT first_station FROM route UNION SELECT second_station FROM route',$link);
?>

<html>
<head>
    <link rel="title icon" type="image/x-icon" href="../style/images/favicon.ico" />
    <!-- Bootstrap -->
    <link href = "../style/css/bootstrap.min.css" rel = "stylesheet">
    <title>Online Bus Ticketing</title>
    <link rel="stylesheet" href="../style/css/styles.css">
    <!-- Include Required Prerequisites -->
    <script type="text/javascript" src="//cdn.jsdelivr.net/jquery/1/jquery.min.js"></script>
    <script type="text/javascript" src="//cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/bootstrap/3/css/bootstrap.css" />


</head>
<body id="bgbody" >

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
            <a class="navbar-brand" href="#">Reserve</a>
        </div>
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">

                <li>
                    <a href="bookings.php">Bookings</a>
                </li>

                <li>
                    <a href="../about.html">About</a>
                </li>
                <li>
                    <a href="../services.html">Services</a>
                </li>
                <li>
                    <a href="../contact.html">Contact</a>
                </li>



                <li style="position: absolute; right: 50px; top: 0 ;">
                    <a href="../index.html">Sign Out</a>
                </li>




            </ul>
        </div>
        <!-- /.navbar-collapse -->
    </div>
    <!-- /.container -->
</nav>


<div class="container jumbotron" style="width:50%;margin-top:50px;border-radius:10px;">
    <form action="activatebusinsert.php" method="post" class="form-horizontal" style="margin-right:10px;width:95%;">

        <div class="form-group">
            <label for="email" class="control-label col-sm-2">Bus Number:</label>
            <div class="col-sm-10">
                <input type="text" name="bus_id" class="form-control" id="seats" >
            </div>
        </div>

        <div class="form-group">
            <label for="Name" class="control-label col-sm-2">Route:</label>
            <div class="col-sm-10">
                <select name="route_name" class="form-control dropdown-toggle btn btn-default">
                    <option >Select Route</option>
                    <?php while ($row = mysql_fetch_assoc($result)):?>
                        <option value="<?php echo $row['route_no']?>" ><?php echo $row['route_no'] ." ".$row['first_station']." - ".$row['second_station']?></option>
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
            <label for="date" class="control-label col-sm-2">Date:</label>
            <div class="col-sm-10">
                <input type="text" name="date" value="<?php echo date("Y/m/d"); ?>" class="form-control" />
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
            <label for="email" class="control-label col-sm-2">Seats:</label>
            <div class="col-sm-10">
                <input type="number" name="seats" class="form-control" id="seats" >
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