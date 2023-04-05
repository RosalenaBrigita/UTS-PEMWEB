<?php
include "conn.php";

    $id_trans_upn = $_POST['id_trans_upn'];
    $id_kondektur = $_POST['id_kondektur'];
    $id_bus = $_POST['id_bus'];
    $id_driver = $_POST['id_driver'];
    $jumlah_km = $_POST['jumlah_km'];
    $tanggal = $_POST['tanggal'];
    
    $update = mysqli_query ($conn, "update trans_upn set id_kondektur='$id_kondektur', 
    jumlah_km='$jumlah_km',tanggal='$tanggal' WHERE id_trans_upn='$id_trans_upn'");
   
   if($update){
        echo"<script>alert ('Data Berhasil disimpan')</script>";
        header ("refresh:0;transupn.php");
   }
   else {
        echo"<script>alert ('Data Tidak Berhasil disimpan')</script>";
        header ("refresh:0;updatetransupn.php");
        
   }
   ?>