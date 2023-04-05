<?php 

  include "conn.php"; 

 $id_kondektur = $_GET['id_kondektur'];

 $delete = mysqli_query ($conn, "delete form kondektur where id_kondektur='$id_kondektur' ");

 if($delete){
    echo"<script>alert ('Data Berhasil dihapus')</script>";
    header ("refresh:0;kondektur.php");
}
else {
    echo"<script>alert ('Data Berhasil dihapus')</script>";
    header ("refresh:0;kondektur.php");
    
}

?>