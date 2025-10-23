<?php
   //Step 1 get database access
   require('../config/database.php');
   ?>

   
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>marketapp- List users</title>
</head>
<body>
    <table
        border="1" align="center">
        <tr>
         <th>fullname</th>
        <th>E-mail</th>
        <th>Ide.number</th>
        <th>Phone number</th>
        <th>Status</th>
        <th>Options</th>
        </tr>
            <?php
                $sql_users=" 
                select 
                u.firstname || ' '|| u.lastname as fullname ,
                u.email,  
                u.ide_number,
                u.mobile_number,
                case
                 when u.status = true then 'active' else 'inactive'
                 end as status
                 from 
                 users u                
                ";
            $result = pg_query($conn_local,$sql_users);
            if(!$result){

                die("error: ".preg_last_error());
                
                }
                
                while($row = pg_fetch_assoc($result)){

                    echo" <tr>
                    <td>".$row['fullname']."</td>
                    <td>".$row['email']."</td>
                    <td>3213213</td>
                    <td>1231233</td>
                    <td>active</td>
                    <td>Joe Doe</td>
                    <td>
                
                    <a href='#'><img src='icons/update.png'width='30'>
                    <a href='#'><img src='icons/delete.png'width='30'>
                    <a href='#'><img src='icons/search.png'width='30'>
                    </td>
                    </tr>
                    

                    ";
                }
            

            ?>

             

        <tr>
        <td>Joe Doe</td>
        <td>joe@gmail.com</td>
        <td>3213213</td>
        <td>1231233</td>
        <td>active</td>

        <td>
           <a href="#"><img src="icons/search.png"width="30">
           <source></a>|
           <a href="#"><img src="icons/update.png"width="30">
            <a href="#"><img src="icons/delete.png"width="30">
        </td>





        </tr>
    
    </table>
</body>
</html>