<?php //include_once("sessionVisitor.php"); ?>
<?php
session_start();
 if(isset($_SESSION['login']))
{
    
}
else{
    header("location:index.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">
    <link rel="stylesheet" href="css/sidenav.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Visitor Management System</title>
    <style>

    </style>
</head>
<body>

    <div class="wrapper">
        <!--Top menu -->
        <div class="section">
            <div class="top_navbar">
                <div class="hamburger">
                    <a href="#">
                        <i class="fas fa-bars"></i>
                    </a>
                </div>
            </div>
            <div class="content">
                <?php
       if(isset($_GET['page']))
       {
        include $_GET['page'].".php";
       }
       else{

       }
       ?>
</div>
        </div>
        <div class="sidebar">
           <!--profile image & text-->
           <div class="profile">
                <img src="images/logo.png" alt="profile_picture">
                <h3 style="font-size:10px"><?php echo $_SESSION['login']; ?></h3>
                <p>Visitor</p>
            </div>
            <!--menu item-->
            <ul>
                <li>
                    <a href="visitor.php?page=booking" class="active">
                        <span class="icon"><i class="fas fa-home"></i></span>
                        <span class="item">Booking Form</span>
                    </a>
                </li>
                <li>
                    <a href="visitor.php?page=activebookingsUser">
                        <span class="icon"><i class="fas fa-user-friends"></i></span>
                        <span class="item">Active Bookings</span>
                    </a>
                </li>
                <li>
                    <a href="visitor.php?page=history">
                        <span class="icon"><i class="fas fa-chart-line"></i></span>
                        <span class="item">History</span>
                    </a>
                </li>
                <li>
                    <a href="visitor.php?page=settings">
                        <span class="icon"><i class="fas fa-cog"></i></span>
                        <span class="item">Settings</span>
                    </a>
                </li>
                <li>
                    <a href="logout.php">
                        <span class="icon"><i class="fas fa-cog"></i></span>
                        <span class="item">Logout</span>
                    </a>
                </li>
            </ul>
            
        </div>
        </div>
    
    </div>
    
  <script>
var hamburger = document.querySelector(".hamburger");
    hamburger.addEventListener("click", function(){
        document.querySelector("body").classList.toggle("active");
    })
  </script>
</body>
</html>