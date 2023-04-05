<?php
include "conn.php";

    $id_bus = $_POST['id_bus'];
    $plat = $_POST['plat'];
    $status = $_POST['status'];
    
    $save = mysqli_query ($conn, "insert into bus values ('$id_bus', '$plat'
    , '$status')");
   
   if($save){
        echo"<script>alert ('Data Berhasil disimpan')</script>";
        header ("refresh:0;bus.php");
   }
   else {
        echo"<script>alert ('Data Tidak Berhasil disimpan')</script>";
        header ("refresh:0;insertbus.php");
        
   }
   ?>