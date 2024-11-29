<?php
session_start();
if (!isset($_SESSION['username'])) {
    header("Location: login.html");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="style.css">
    <style>
      
  

        .user-info {
            margin-left: auto; 
            margin-right: 20px; 
        }

        .reg {
            margin-left: 20px; 
        }


    </style>
</head>
<body>
    <div class="header">
        <nav>
            <img src="image/logo.png">
            <h1><img src="image/name.png" alt=""></h1> 
            <div class="nav-menu">
                <ul>
                    <li><a href="#">HOME</a></li> 
                    <li><a href="#">TOOLS</a></li>
                    <li><a href="#">CHAT</a></li>
                    <li><a href="#">FAQ</a></li>
                    <li><a href="logout.php"><button class="reg">LOG OUT</button></a></li>
                </ul>
            </div>
            <div class="user-info">
                <p>Welcome, <b><?php echo $_SESSION['username']; ?></b></p>
            </div>
        </nav>
    </div>
    <a href="#"><button class="ex">EXPLOOR ALL TOOL</button></a>
</body>
</html>
