<?php
     define('DB_HOSTNAME', 'localhost'); 
     define('DB_USER', 'root'); 
     define('DB_PASS', '0000'); 
     define('DB_DATABASE', 'final'); 
     define('DB_PREFIX', 'cw'); 
     define('DB_CHARSET', 'utf8'); 

     function dbClose($conn){
         @mysql_clone($conn) or die(mysqli_error($conn));
     }
     function dbConnect(){
         $conn = @mysqli_connect(DB_HOSTNAME,DB_USER,DB_PASS,DB_DATABASE) or die(mysqli_connect_error());
         mysql_set_charset($conn,DB_CHARSET)or die(mysqli_error($conn));
         return $conn;
     }
?>