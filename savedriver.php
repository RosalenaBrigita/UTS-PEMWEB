<?php
include "conn.php";

    $id_driver = $_POST['id_driver'];
    $nama = $_POST['nama'];
    $no_sim = $_POST['no_sim'];
    $alamat = $_POST['alamat'];
    
    $save = mysqli_query ($conn, "insert into driver values ('$id_driver', '$nama'
    , '$no_sim', '$alamat')");
   
   if($save){
        echo"<script>alert ('Data Berhasil disimpan')</script>";
        header ("refresh:0;driver.php");
   }
   else {
        echo"<script>alert ('Data Tidak Berhasil disimpan')</script>";
        header ("refresh:0;insertdriver.php");
        
   }

 
   ?>