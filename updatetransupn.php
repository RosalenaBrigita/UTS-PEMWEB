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
    <script src="https://kit.fontawesome.com/2365b8dab9.js" crossorigin="anonymous"></script>
    <style>
        body {
            margin-top:40px;
            color:#06194d;
            font-weight:900;
            background:#ffdda7;
            font-family: 'Roboto Slab', serif;      
        }

        h1 {
            color:#06194d;;
            margin:20px;
        }
        form {
            margin-left:30px;
            
        }
        input[type=submit], input[type=reset] , input[type=button] , input[type=text] #db {
            background-color: #0b3cc1;;
            color:#fff;
            border: none;
            padding: 16px 32px;
            text-decoration: none;
            font-family: 'Roboto Slab', serif;      
            margin: 4px 2px;
            cursor: pointer;
            border-radius:10px;
        }

        input[type=submit]:hover,input[type=reset]:hover,input[type=button]:hover{
            background-color: #06194d;;
            color: white;
            font-weight:700;
        }
        input[type=text],input[type=date], input[type=number], input[type=text-area], select[type=text] {
            width: 100%;
            padding: 12px 20px;
            margin: 8px 0;
            border:0px;
            box-sizing: border-box;
            color:rgb(30, 27, 2);
            opacity:0.5;
            font-weight:700;
        }
        input[type=text]:hover,input[type=date]:hover, input[type=number]:hover, select[type=text]:hover{
            opacity:1;
            border:2px;
            border-color:#06194d;;
            border-style:groove;
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
                <a href="<?php echo "transupn.php"; ?>"class="active">
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
                <li><a href="#">Driver</a></li>
                <li><a href="#">Kondektur</a></li>
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
        <h1><center>Update Data Trans UPN</center></h1>
        <?php
            $id_trans_upn = $_GET['id_trans_upn'];
            $data = mysqli_query($conn, "SELECT * FROM trans_upn WHERE id_trans_upn='$id_trans_upn'");
            while ($print = mysqli_fetch_array($data)) {
        ?>
        
        <form action="updatetransupn1.php" method="post">
            <table id="db">
                <tr>
                    <td width="200">ID Trans UPN</td>
                    <td>:</td>
                    <td><input type="number" name="id_trans_upn" value="<?php echo $print ['id_trans_upn'];?>" readonly></td>
                </tr>
                <tr>
                    <td>ID Kondektur</td>
                    <td>:</td>
                    <td><select type="text" name="id_kondektur" value="<?php echo $print ['id_kondektur'];?>" required>
                        <option value="<?php echo $print ['id_kondektur'];?>" required>
                            <?php echo $print ['id_kondektur'];?>
                        </option>
                        <?php
                        include "conn.php";
                        $query = mysqli_query($conn,"select * from kondektur;") or die (mysqli_connect_error($conn));
                        while($data = mysqli_fetch_array($query)){
                            echo "<option value=$data[id_kondektur]> $data[id_kondektur] </option>";
                        }
                        ?>
                        </select>
                </tr>
                <tr>
                    <td>ID Bus</td>
                    <td>:</td>
                    <td><select type="text" name="id_bus"value="<?php echo $print ['id_bus'];?>" required>
                        <option value="<?php echo $print ['id_bus'];?>" required>
                            <?php echo $print ['id_bus'];?>
                        </option>
                        <?php
                        include "conn.php";
                        $query = mysqli_query($conn,"select * from bus;") or die (mysqli_connect_error($conn));
                        while($data = mysqli_fetch_array($query)){
                            echo "<option value=$data[id_bus]> $data[id_bus] </option>";
                        }
                        ?>
                        </select>
                </tr>
                </tr>
                    <td>ID Driver</td>
                    <td>:</td>
                    <td><select type="text" name="id_driver" >
                        <option value="<?php echo $print ['id_driver'];?>" required>
                            <?php echo $print ['id_driver'];?>
                        </option>
                        <?php
                        include "conn.php";
                        $query = mysqli_query($conn,"select * from driver;") or die (mysqli_connect_error($conn));
                        while($data = mysqli_fetch_array($query)){
                            echo "<option value=$data[id_driver]> $data[id_driver] </option>";
                        }
                        ?>
                        </select>
                </tr>
                <tr>
                    <td>Jumlah Kilometer</td>
                    <td>:</td>
                    <td><input type="text" name="jumlah_km" size="30" value="<?php echo $print ['jumlah_km'];?>" required></td>
                </tr>
                <tr>
                    <td>Tanggal</td>
                    <td>:</td>
                    <td><input type="date" name="tanggal" size="30" value="<?php echo $print ['tanggal'];?>" required></td>
                </tr>  
                <tr>
                    <td></td>
                    <td></td>
                    <td>
                        <input type="submit" value="Save" name="save">
                        <input type="reset" value="Cancel" name="cancel">
                        <input type="button" value="Back" name="back" onclick="self.history.back()">
                    </td>
                </tr>
            </table>
        </form>
        <?php
            }
        ?>
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
