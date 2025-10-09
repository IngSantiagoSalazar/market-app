   <?php
   //Step 1 get database access

   require('../config/database.php');
   //Step 2 get form-data

   $l_name = trim($_POST['lname']); //deber ser igual al de el $
   $f_name = trim($_POST['fname']); //los campos dentro de los corchetes 
   $m_number = trim($_POST['mnumber']);
   $ide_number = trim($_POST['idnumber']);
   $e_mail = trim($_POST['email']);
   $p_wd = trim($_POST['passwd']);

   
   //$enc_pass =password_hash($p_wd,PASSWORD_DEFAULT);
   $enc_pass = md5($p_wd);

   $check_email = "
   SELECT
   u.email
   from  
    users u
   where
   email = '$e_mail' or  ide_number = '$ide_number'
   LIMIT 1
   ";
   $res_check= pg_query($conn_supa,$check_email);
   if(pg_num_rows($res_check)>0){
   echo "<script>alert('user already exist!!')</script>";
      header('refresh:0;url=singin.html');
   } else {
      $query = "INSERT INTO users(firstname,lastname,mobile_number,ide_number,email,password)
      Values(
      '$f_name'
      ,'$l_name',
      '$m_number',
      '$ide_number',
      '$e_mail',
      '$enc_pass')";

      //Step 4  execute query
      $res= pg_query($conn_supa,$query);

      //Step 5 validate result
      if($res){
      //echo "User has been created succesfully!!!";  
      echo "<script>alert('Success!!! GO TO LOGIN')</script>";
         header('refresh:0;url=singin.html');
      }else{
         echo "something wrong !";
      }



      }


   //Step 3 create query to insert into

   ?>