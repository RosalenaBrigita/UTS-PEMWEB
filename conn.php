<?php 

   $dbServer = "localhost";
   $dbUser = "root";
   $dbPass = "";
   $dbName = "transupn";

   $conn = mysqli_connect($dbServer, $dbUser, $dbPass);

   if($conn) {
      $open=mysqli_select_db($conn,$dbName) ;
   }
   
  
?>