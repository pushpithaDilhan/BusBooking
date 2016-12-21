<?php
// pass from session
$role_id = "943340196v";

$link = mysqli_connect("localhost", "root","","busticketing");
$sql = "SELECT * FROM bookings WHERE role_id='$role_id' ";
$result = mysqli_query( $link,$sql) or die('Could not look up user information; ' . mysqli_error($link));
?>

<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <title>Booking list</title>

    <!-- Bootstrap Core CSS -->
    <link href="../style/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <style>
        body {
            padding-top: 70px;
            /* Required padding for .navbar-fixed-top. Remove if using .navbar-static-top. Change if height of navigation changes. */
        }

        table{border-collapse: collapse;}
        td,th{border: 1px solid black; padding: 10px;}
    </style>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>

    <![endif]-->
    <div class="container">

        <!-- jQuery Version 1.11.1 -->
        <script src="../style/js/jquery.js"></script>

        <!-- Bootstrap Core JavaScript -->
        <script src="../style/js/bootstrap.min.js"></script>

<body>

<h2>Booked seats</h2>

<div class="container">

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
                <a class="navbar-brand" href="bookbus.php">Home</a>
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

                    <li style="position: absolute; right: 50px; top: 0 ;">
                        <a href="../index.html" >SignOut</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>
</div>

<table class = "table table-hover">

    <thead>
    <tr>
        <th>Bus Number</th>
        <th>Date</th>
        <th>Time</th>
        <th>Seats</th>
    </tr>
    </thead>

    <tbody>

    <?php while ($row = mysqli_fetch_array($result,MYSQLI_ASSOC)):?>
        <tr>
            <td><?php echo $row['bus_id'] ?></td>
            <td><?php echo $row['date'] ?></td>
            <td><?php echo $row['time'] ?></td>
            <td><?php echo $row['seats'] ?></td>
        </tr>
    <?php endwhile ?>

    </tbody>

</table>


</body>
</html>
