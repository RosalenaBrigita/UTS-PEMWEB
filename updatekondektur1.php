<?php
include "conn.php";

    $id_kondektur = $_POST['id_kondektur'];
    $nama = $_POST['nama'];
    
    $update = mysqli_query ($conn, "update kondektur set nama='$nama'
         WHERE id_kondektur='$id_kondektur'");
   
   
   if($update){
        echo"<script>alert ('Data Berhasil disimpan')</script>";
        header ("refresh:0;kondektur.php");
   }
   else {
        echo"<script>alert ('Data Tidak Berhasil disimpan')</script>";
        header ("refresh:0;updatekondektur.php");
        
   }
   ?>