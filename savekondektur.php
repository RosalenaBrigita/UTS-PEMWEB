<?php
include "conn.php";

    $id_kondektur = $_POST['id_kondektur'];
    $nama = $_POST['nama'];
    
    $save = mysqli_query ($conn, "insert into kondektur values ('$id_kondektur', '$nama')");
   
   if($save){
        echo"<script>alert ('Data Berhasil disimpan')</script>";
        header ("refresh:0;kondektur.php");
   }
   else {
        echo"<script>alert ('Data Tidak Berhasil disimpan')</script>";
        header ("refresh:0;insertkondektur.php");
        
   }
   ?>