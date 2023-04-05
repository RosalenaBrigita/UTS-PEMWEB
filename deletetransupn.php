<?php 

  include "conn.php"; 

 $id_trans_upn = $_GET['id_trans_upn'];

 $delete = mysqli_query ($conn, "delete form trans_upn where id_trans_upn='$id_trans_upn' ");

 if($delete){
    echo"<script>alert ('Data Berhasil dihapus')</script>";
    header ("refresh:0;transupn.php");
}
else {
    echo"<script>alert ('Data Berhasil dihapus')</script>";
    header ("refresh:0;transupn.php");
    
}

?>