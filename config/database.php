<?php
//DataBase Connection
$local_host    = "Localhost"; //127.0.0.1
$local_user    = "postgres";
$local_password = "unicesmag";
$local_dbname  = "marketapp";
$local_port = "5432";

//DataBase Connection
     $supa_host     = "aws-1-us-east-1.pooler.supabase.com"; 
     $supa_user     = "postgres.akbzuqltyexxblxiajxp";
     $supa_password = "SUPERsayayin12*";
     $supa_dbname   = "postgres";
     $supa_port     = "6543";

     $supa_connection = " 
     host=$supa_host
     user=$supa_user
     password=$supa_password
     dbname=$supa_dbname
     port=$supa_port

     ";

$local_data_connection = " 
     host=$local_host
     user=$local_user
     password=$local_password
     dbname=$local_dbname
     port=$local_port

     ";
     // $conn_supa = pg_connect($supa_connection);
     $conn_local = pg_connect($local_data_connection);


if   (!$conn_local){
     echo "error";


     }else{

          //echo " BIEN HECHO SO FAR SO GOOD LOQUITIN :D  ";

     }

/*     if (!$conn_supa){
     echo "error";


     }else{

          echo " BIEN HECHO SO FAR SO GOOD LOQUITIN :D  ";

     }
          */
?>
