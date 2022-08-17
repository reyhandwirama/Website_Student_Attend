<?php

include '../conn.php';


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style.css">
    <title>Aplikasi Login</title>
</head>
<body>
    <div class="container">
        <div class="header">
            <div class="foto"><img src="../image/gunadarma.png" alt="gunadarma.png"></div>
            
            <h1>Selamat Datang Di Web Absensi Gunadarma
            </h1>
        </div>
        <div class="form">
            <form action="../ceklogin.php" method="post">

            <label for="username"> Username</label>
            <input type="text" name="username" id="username" required>
            <label for="password">Password</label>
            <input type="password" name="password" id="password" required>
            <div class="button">
            <button type="submit" name="submit" class="submit">submit</button>
            <button type="reset" class="reset">cancel</button>
            </div>
            </form>
        </div> 
        <div class="footer">
            <p>Universitas Gunadarma</p>
        </div>

    </div>

    
</body>
</html>