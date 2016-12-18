<html>
   
   <head>
      <title>Register</title>
   </head>
   
   <body>
      <?php
            $dbhost = 'localhost';
            $dbuser = 'root';
            $conn = mysql_connect($dbhost, $dbuser);
            
            if(! $conn ) {
               die('Could not connect: ' . mysql_error());
            }
            
            $emp_name = $_GET['cust_name'];
            $emp_address = $_GET['cust_address'];         
            $emp_salary = $_GET['cust_salary'];
            
            $sql = "INSERT INTO employee ". "(cust_name,cust_addr, cust_salary
                    ) ". "VALUES('$emp_name','$emp_address',$emp_salary)";
               
            mysql_select_db('blog_db');
            $retval = mysql_query( $sql, $conn );
            
            if(! $retval ) {
               die('Could not enter data: ' . mysql_error());
            }
            
            echo "Entered data successfully\n";
            
            mysql_close($conn);
         
            ?>
            
               <form method = "post" action = "<?php $_PHP_SELF ?>">
                  <table width = "400" border = "0" cellspacing = "1" 
                     cellpadding = "2">
                  
                     <tr>
                        <td width = "100">Name</td>
                        <td><input name = "cust_name" type = "text" 
                           id = "emp_name"></td>
                     </tr>
                  
                     <tr>
                        <td width = "100">Address</td>
                        <td><input name = "cust_address" type = "text" 
                           id = "emp_address"></td>
                     </tr>
                  
                     <tr>
                        <td width = "100">Salary</td>
                        <td><input name = "cust_salary" type = "text" 
                           id = "emp_salary"></td>
                     </tr>
                  
                     <tr>
                        <td width = "100"> </td>
                        <td> </td>
                     </tr>
                  
                     <tr>
                        <td width = "100"> </td>
                        <td>
                           <input name = "add" type = "submit" id = "add" 
                              value = "Add Employee">
                        </td>
                     </tr>
                  
                  </table>
               </form>           
            
   
   </body>
</html>