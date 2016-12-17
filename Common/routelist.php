<?php
    $link = mysql_connect('localhost','root');
    mysql_select_db('blog_db',$link);
    $result = mysql_query('SELECT route_no,route_name FROM routelist',$link);
?>

<html>
    <head>
        <title>Online Bus Ticketing</title>
        <link href = "https://bootswatch.com/superhero/bootstrap.min.css" rel = "stylesheet">
        <link rel="stylesheet" href="styles.css">
    </head>
    

    <body>
        

        <div id="wrapper">

        <!-- Sidebar -->
        <div id="sidebar-wrapper">
            <nav id="spy">
                <ul class="sidebar-nav nav">
                <?php while ($row = mysql_fetch_assoc($result)):?>
                    <li>
                        <a href="#anch1=<?php echo $row['route_no'] ?>" data-scroll>
                            <span class="fa fa-anchor solo"><?php echo $row['route_name'] ?></span>
                        </a>
                    </li>
                    <?php endwhile ?>                    
                </ul>
            </nav>
        </div>
    </body>
</html> 