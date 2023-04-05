<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="stylesheet" href="style3.css">
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>

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
                <a href="<?php echo "dashboard2.php"; ?>" class="active">
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
                    <span class="text">Home</span>
                </div>

                <div class="boxes">
                    <div class="box box1">
                        <i class="uil uil-thumbs-up"></i>
                        <span class="text">Total Likes</span>
                        <span class="number">50,120</span>
                    </div>
                    <div class="box box2">
                        <i class="uil uil-comments"></i>
                        <span class="text">Comments</span>
                        <span class="number">20,120</span>
                    </div>
                    <div class="box box3">
                        <i class="uil uil-share"></i>
                        <span class="text">Total Share</span>
                        <span class="number">10,120</span>
                    </div>
                </div>
            </div>

            <div class="activity">
                <div class="title">
                    <i class="uil uil-clock-three"></i>
                    <span class="text">Recent Activity</span>
                </div>

                <div class="activity-data">
                    <div class="data names">
                        <span class="data-title">Name</span>
                        <span class="data-list">Prem Shahi</span>
                        <span class="data-list">Deepa Chand</span>
                        <span class="data-list">Manisha Chand</span>
                        <span class="data-list">Pratima Shahi</span>
                        <span class="data-list">Man Shahi</span>
                        <span class="data-list">Ganesh Chand</span>
                        <span class="data-list">Bikash Chand</span>
                    </div>
                    <div class="data email">
                        <span class="data-title">Email</span>
                        <span class="data-list">premshahi@gmail.com</span>
                        <span class="data-list">deepachand@gmail.com</span>
                        <span class="data-list">prakashhai@gmail.com</span>
                        <span class="data-list">manishachand@gmail.com</span>
                        <span class="data-list">pratimashhai@gmail.com</span>
                        <span class="data-list">manshahi@gmail.com</span>
                        <span class="data-list">ganeshchand@gmail.com</span>
                    </div>
                    <div class="data joined">
                        <span class="data-title">Joined</span>
                        <span class="data-list">2022-02-12</span>
                        <span class="data-list">2022-02-12</span>
                        <span class="data-list">2022-02-13</span>
                        <span class="data-list">2022-02-13</span>
                        <span class="data-list">2022-02-14</span>
                        <span class="data-list">2022-02-14</span>
                        <span class="data-list">2022-02-15</span>
                    </div>
                    <div class="data type">
                        <span class="data-title">Type</span>
                        <span class="data-list">New</span>
                        <span class="data-list">Member</span>
                        <span class="data-list">Member</span>
                        <span class="data-list">New</span>
                        <span class="data-list">Member</span>
                        <span class="data-list">New</span>
                        <span class="data-list">Member</span>
                    </div>
                    <div class="data status">
                        <span class="data-title">Status</span>
                        <span class="data-list">Liked</span>
                        <span class="data-list">Liked</span>
                        <span class="data-list">Liked</span>
                        <span class="data-list">Liked</span>
                        <span class="data-list">Liked</span>
                        <span class="data-list">Liked</span>
                        <span class="data-list">Liked</span>
                    </div>
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
