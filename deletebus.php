<?php 

  include "conn.php"; 

 $id_bus = $_GET['id_bus'];

 $delete = mysqli_query ($conn, "delete form kondektur where id_bus='$id_bus' ");

 if($delete){
    echo"<script>alert ('Data Berhasil dihapus')</script>";
    header ("refresh:0;bus.php");
}
else {
    echo"<script>alert ('Data Berhasil dihapus')</script>";
    header ("refresh:0;bus.php");
    
}

?>