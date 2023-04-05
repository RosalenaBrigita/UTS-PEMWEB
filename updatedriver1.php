<?php
include "conn.php";

    $id_driver = $_POST['id_driver'];
    $nama = $_POST['nama'];
    $no_sim = $_POST['no_sim'];
    $alamat = $_POST['alamat'];
    
    $update = mysqli_query($conn, "update driver set nama='$nama', no_sim='$no_sim',
     alamat='$alamat' WHERE id_driver='$id_driver'");
    
   if($update){
        echo"<script>alert ('Data Berhasil diupdate')</script>";
        header ("refresh:0;driver.php");
   }
   else {
        echo"<script>alert ('Data Tidak Berhasil diupdate')</script>";
        header ("refresh:0;updatedriver.php");
        
   }

 
   ?>


