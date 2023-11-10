<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Perpustakaan Provinsi Jawa Tengah</title>
</head>
<body>
<?php 
        if(isset($_GET['pesan'])){
            if($_GET['pesan']=="gagal"){
                echo "<div class='alert'>Username dan Password tidak sesuai !</div>";
            }
        }
    ?>
<div>
    <!--Navbar-->
    <div class="container">
        <nav class="navbar">
            <ul class="navbar-list">
                <img src="foto/logo1.png" alt="" style="padding-left :10px;">
                <li class="navbar-item" style="padding-left :20px;"><a href="index.php">PERPUSTAKAAN</a></li>
                <li class="navbar-item" style="padding-left :20px;"><a href="index.php">Home</a></li>
                <li class="navbar-item"><a href="about.php">About</a></li>
                <li class="navbar-item"><a href="contact.php">Contact</a></li>
                <li class="navbar-item" style="padding-left: 56%;"><a href="login.php">Login</a></li>
                <li class="navbar-item"><a href="register.php">Register</a></li>
            </ul>
        </nav>
    </div>
    
    <!--Tampilan Menu 1-->
    <div class="title">
        <center><h2>PERPUSTAKAAN PROVINSI JAWA TENGAH</h2></center>
    </div>
    <!--Grid Container-->
    <div class="grid-container">
        <div class="grid-item">
            <div class="container2">
                    <form class="login" action="cek_login.php" method="post">
                        <label>Username</label>
                        <input type="text" name="username" class="form_login" placeholder="Username" required="required">
                        <br/>
                        <label>Password</label>
                        <input type="password" name="password" class="form_login" placeholder="Password" required="required">
                        <br/>
                        <button class="btn-login" type="submit">LOGIN</button>
                    </form>
            </div>

            <div>
                <ul>
                    <a>
                        <img class="icon" href="" src="icon/instagram.png"></img>
                        <img class="icon" src="icon/twitter.png"></img>
                        <img class="icon" src="icon/facebook.png"></img>
                    </a>
                </ul>
            </div>

            <div class="call-center">
                <label>Call Center : </label>
                <li><a href="#">08567894321</a></li>
                <li><a href="#">08567894321</a></li>
            </div>
        </div>

        <div class="grid-item" style="width: 100%;">
            
        </div>
    </div>
</div>
<!--Footer-->
<div class="footer">
<footer>
    <p>&copy; Copyright 2023 | Web Perpustakaan Provinsi Jawa Tengah</p>
</div>
</body>
</html>