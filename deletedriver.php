<?php 

  include ('conn.php'); 

 $id_driver = $_GET['id_driver'];

 $delete = mysqli_query ($conn, "delete form driver where id_driver='$id_driver' ");

 if($delete){
    echo"<script>alert ('Data Berhasil dihapus')</script>";
    header ("refresh:0;driver.php");
}
else {
    echo"<script>alert ('Data Berhasil dihapus')</script>";
    header ("refresh:0;driver.php");
    
}


?>