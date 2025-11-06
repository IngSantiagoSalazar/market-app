<?php
 //start or continue
 session_start();

 //destrory current session
 session_destroy();
 
 //redirect
 header('refresh:0;url=singin.html')

?>