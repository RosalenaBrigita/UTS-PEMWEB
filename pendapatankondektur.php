<?php 
  //memanggil file conn.php yang berisi koneski ke database
  //dengan include, semua kode dalam file conn.php dapat digunakan pada file index.php
  include ('conn.php'); 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="stylesheet" href="style3.css">
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <style>
        table
        {
            border: 1;
            border-collapse: collapse;
            width: 100%;
            margin-left: 50px;
            margin-bottom: 20px;
        }
        
        table, th, td
        {
            border: 1px solid gainsboro;
            padding: 10px;
        }

        .red {
            background-color: red;
        }

        .green {
            background-color: green;
        }

        .blue {
            background-color: blue;
        }
        </style>
    <title>UTS PEMWEB</title>
</head>
<body>
    <div class="sidebar close">
     
            <div class="logo-details">
                <i class='bx bxs-data'></i>
            <span class="logo_name">Database</span>           

            </div>
       
        <ul class="nav-links">
            <li>
                <a href="<?php echo "dashboard2.php"; ?>">
                <i class='bx bxs-home-smile'></i>
                <span class="link_name">Home</span>
                </a>
                <ul class="sub-menu blank">
                <li><a class="link_name" href="<?php echo "dashboard2.php"; ?>">Home</a></li>
                </ul>
            </li>
            <li>
                <div class="iocn-link">
                <a href="<?php echo "bus.php"; ?>" >
                    <i class='bx bxs-bus'></i>
                    <span class="link_name">Bus</span>
                </a>
                <i class='bx bxs-chevron-down arrow' ></i>
                </div>
                <ul class="sub-menu">
                <li><a class="link_name" href="#">Bus</a></li>
                <li><a href="<?php echo "insertbus.php"; ?>">Insert</a></li>
                <li><a href="<?php echo "bus1.php"; ?>">Status 1</a></li>
                <li><a href="<?php echo "bus2.php"; ?>">Status 2</a></li>
                <li><a href="<?php echo "bus0.php"; ?>">Status 0</a></li>
                </ul>
            </li>
            <li>
                <div class="iocn-link">
                <a href="<?php echo "driver.php"; ?>" >
                    <i class='bx bxs-user' ></i>
                    <span class="link_name">Driver</span>
                </a>
                <i class='bx bxs-chevron-down arrow' ></i>
                </div>
                <ul class="sub-menu">
                <li><a class="link_name" href="#">Driver</a></li>
                <li><a href="<?php echo "insertdriver.php"; ?>">Insert Data</a></li>
                </ul>
            </li>
            <li>
                <div class="iocn-link">
                <a href="<?php echo "kondektur.php"; ?>">
                    <i class='bx bxs-user-voice'></i>
                    <span class="link_name">Kondektur</span>
                </a>
                <i class='bx bxs-chevron-down arrow' ></i>
                </div>
                <ul class="sub-menu">
                <li><a class="link_name" href="<?php echo "kondektur.php"; ?>">Kondektur</a></li>
                <li><a href="<?php echo "insertkondektur.php"; ?>">Insert Data</a></li>
                </ul>
            </li>            
            <li>
                <div class="iocn-link">
                <a href="<?php echo "transupn.php"; ?>">
                    <i class='bx bx-transfer'></i>
                    <span class="link_name">Trans UPN</span>
                </a>
                <i class='bx bxs-chevron-down arrow' ></i>
                </div>
                <ul class="sub-menu">
                <li><a class="link_name" href="<?php echo "transupn.php"; ?>">Trans UPN</a></li>
                <li><a href="<?php echo "inserttransupn.php"; ?>">Insert Data</a></li>
                </ul>
            </li>
            <li>
                <div class="iocn-link">
                <a href="#" class="active">
                    <i class='bx bx-money'></i>
                    <span class="link_name">Pendapatan</span>
                </a>
                <i class='bx bxs-chevron-down arrow' ></i>
                </div>
                <ul class="sub-menu">
                <li><a class="link_name" href="#">Pendapatan</a></li>
                <li><a href="<?php echo "formdriver.php"; ?>">Driver</a></li>
                <li><a href="<?php echo "formkondektur.php"; ?>">Kondektur</a></li>
                </ul>
            </li>
            <li>
                <a href="#">
                <i class='bx bx-cog' ></i>
                <span class="link_name">Setting</span>
                </a>
                <ul class="sub-menu blank">
                <li><a class="link_name" href="#">Setting</a></li>
                </ul>
            </li>          
        </ul>
    </div>

    <section class="dashboard">
        <div class="top">
            <div class="sidebar-button">
            <i class='bx bx-menu sidebar-toggle'></i>
            
        </div>
            <div class="search-box">
                <input type="text" placeholder="Search...">
                <i class='bx bx-search' ></i>
            </div>
            <div class="profile-details">
                <!--<img src="images/profile.jpg" alt="">-->
                <span class="admin_name">Rosalena Brigita</span>
                <i class='bx bx-chevron-down' ></i>
            </div>
            
            <!--<img src="images/profile.jpg" alt="">-->
        </div>
        

        <div class="dash-content">
            <div class="overview">
                <div class="title">
                    <i class="uil uil-tachometer-fast-alt"></i>
                    <span class="text">PENDAPATAN KONDEKTUR</span>
                </div>
                <div class="center">
                    <?php
                            include ('conn.php');
                            $link_kondektur = "kondektur.php";
                            $id_kondektur = $_POST["id_kondektur"];
                            $bulan = $_POST["bulan"];

                            $query = "SELECT SUM(jumlah_km) AS km_sum, SUM(jumlah_km)*1500 AS pendapatan_sum FROM trans_upn WHERE id_kondektur = '$id_kondektur' AND MONTH(tanggal) = '$bulan' GROUP BY MONTH(tanggal)";
                            $result = mysqli_query($conn,$query);
                            echo "<a href = \"$link_kondektur\">Back</a>";
                           
                            if ($result->num_rows > 0) {
                                while($row = $result->fetch_assoc()) {
                                    echo "<h3>Total kilometer :"." ".$row["km_sum"]." KM"."</h3>";
                                    echo "<h3>Total pendapatan :"." "."Rp".$row["pendapatan_sum"]."</h3>";
                                }
                            } else {
                                echo "BELUM DAPAT PENGHASILAN";
                                echo "<br />";
                                echo "<a href = \"$link_kondektur\">Back to kondektur table</a>";
                                exit();
                            }
                
                                $detail = "SELECT * FROM trans_upn WHERE id_kondektur = '$id_kondektur' AND MONTH(tanggal) = '$bulan'";
                                $result = mysqli_query($conn,$detail);

                                echo "<table>";
                                echo "<th>ID_Trans_UPN</th>";
                                echo "<th>ID_Kondektur</th>";
                                echo "<th>ID_Bus</th>";
                                echo "<th>ID_Driver</th>";
                                echo "<th>Jumlah_KM</th>";
                                echo "<th>tanggal</th>";
                                while($obj = $result->fetch_object()){
                                    echo ("<tr>
                                    <td>$obj->id_trans_upn</td>
                                    <td>$obj->id_kondektur</td>
                                    <td>$obj->id_bus</td>
                                    <td>$obj->id_driver</td>
                                    <td>$obj->jumlah_km</td>
                                    <td>$obj->tanggal</td>
                                    </tr>");
                                }
                                echo "</table>";
                                
                        ?>
                   
                    </div>           
            </div>
        </div>
    </section>

    <!--<script src="script.js"></script>-->
    <script>
        
        const body = document.querySelector("body"),
        modeToggle = body.querySelector(".mode-toggle");
        sidebar = body.querySelector(".sidebar");
        sidebarToggle = body.querySelector(".sidebar-toggle");
        
        let arrow = document.querySelectorAll(".arrow");
        for (var i = 0; i < arrow.length; i++) {
            arrow[i].addEventListener("click", (e)=>{
        let arrowParent = e.target.parentElement.parentElement;//selecting main parent of arrow
        arrowParent.classList.toggle("showMenu");
            });
        }

        let getStatus = localStorage.getItem("status");
        if(getStatus && getStatus ==="close"){
            sidebar.classList.toggle("close");
        }

        sidebarToggle.addEventListener("click", () => {
            sidebar.classList.toggle("close");
            if(sidebar.classList.contains("close")){
                localStorage.setItem("status", "close");
            }else{
                localStorage.setItem("status", "open");
            }
        })
        
        
        sidebarToggle.onclick = function() {
        sidebar.classList.toggle("active");
        if(sidebar.classList.contains("active")){
        sidebarToggle.classList.replace("bx-menu" ,"bx-menu-alt-right");
        }else
        sidebarToggle.classList.replace("bx-menu-alt-right", "bx-menu");
        }
        
    </script>
</body>
</html>
