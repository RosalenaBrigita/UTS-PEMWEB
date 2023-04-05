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
            width: 80%;
            margin-left: 50px;
            margin-bottom: 20px;
        }
        
        table, th, td
        {
            border: 1px solid gainsboro;
            padding: 10px;
        }
        button{
            padding:15px;
            border: 1px solid gainsboro;
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
                <a href="<?php echo "bus.php"; ?>" class="active">
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
                <a href="<?php echo "driver.php"; ?>">
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
                <a href="#">
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
                    <span class="text">DATA BUS</span>
                </div>

                <div class="center">
                <table>
                    <thead>
                    <tr>
                        <th>Id Bus</td> 
                        <th>Plat</td> 
                        <th>Status</td> 
                        <th>Action</td> 
                    </tr>
                    </thead>
                    <tbody>
                        <?php
                            
                            $query = "SELECT * FROM bus where status=0;" ;
                            $result = mysqli_query($conn,$query);

                                    while($data = mysqli_fetch_array($result)): ?>
                                <tr style = "<?php echo 'background-color : ', $color_level[$level];?>">
                                    <td><?php echo $data['id_bus'];  ?></td>
                                    <td><?php echo $data['plat'];  ?></td>
                                    <td><?php 
                                                                    if ($data["status"] == 1) {
                                                                        $warna = "green";
                                                                    } elseif ($data["status"] == 2) {
                                                                        $warna = "yellow";
                                                                    } elseif ($data["status"] == 0) {
                                                                        $warna = "red";
                                                                    }
                                                                $status=$data["status"];
                                                                    echo "<center><button style ='background-color:$warna;'>$status</button></center>"
                                                                ?></td>
                                    <td class = "actions">
                                    <a href="<?php echo "updatebus.php?id_bus=".$data['id_bus']; ?>" >update<i class="fa-sharp fa-solid fa-pen"></i></a>
                                    &nbsp;&nbsp;
                                    <a href="<?php echo "deletebus.php?id_bus=".$data['id_bus']; ?>" >delete<i class="fa-solid fa-trash"></i></a>
                                    </td>
                                </tr>
                                <?php endwhile ?>
                    </tbody>
                    </table>
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
