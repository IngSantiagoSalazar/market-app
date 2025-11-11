<?php
   //Step 1 get database access
   require('../config/database.php');
   

   //step 2. Get Data or params
   $user_id = $_GET['userId'];
   //step 3 prepare query
   $sql_delete_user ="delete from users where id= $user_id ";
    //Step 4. execute query
    $result = pg_query($conn_local,$sql_delete_user);
    if(!$result){
        die("error: ".preg_last_error());
    }else{
        echo"<script>alert('User has been eliminited')</script>";
        header('refresh:0;url=list_users.php');

    }
?>