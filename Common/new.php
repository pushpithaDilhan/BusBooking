<?php
$link = mysql_connect('localhost','root');
mysql_select_db('busticketing',$link);
$result = mysql_query('SELECT * FROM route',$link);
?>

<!DOCTYPE html>
<html>
<head>
    <title></title>
</head>
<style>
    .inv {
        display: none;
    }
</style>
<body>
<select id="target">
    <option value="">Select...</option>
    <?php while ($row = mysql_fetch_assoc($result)):?>
    <option value="content_<?php echo $row['route_no'] ?>"><?php echo $row['first_station'].$row['second_station']?></option>
    <?php endwhile ?>
    <select>
        <div id="content_<?php echo $row['route_no'] ?>" class="inv">
            <?php while ($row = mysql_fetch_assoc($result)):?>
            <div>
                <h2><?php echo $row['route_no'] ?></h2>
                <h3><?php echo $row['first_station'] ?></h3>
                <h3><?php echo $row['second_station'] ?></h3>
                <h3><?php echo $row['price'] ?></h3>
            </div>
            <?php endwhile ?>
        </div>

        <script>
            document
                    .getElementById('target')
                    .addEventListener('change', function () {
                        'use strict';
                        var vis = document.querySelector('.vis'),
                                target = document.getElementById(this.value);
                        if (vis !== null) {
                            vis.className = 'inv';
                        }
                        if (target !== null ) {
                            target.className = 'vis';
                        }
                    });
        </script>

</body>
</html>