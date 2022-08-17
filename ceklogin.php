<?php
include 'conn.php';
session_start();
if(isset($_POST["submit"])){
    $_username = $_POST["username"];
    $_password = $_POST["password"];

    $result = ("SELECT * FROM akun WHERE npm='$_username' AND password='$_password'");
    $akun =mysqli_query($conn,$result);
    $login_akun = mysqli_fetch_assoc($akun);
    
    $_SESSION['npm'] = $login_akun['npm'];
    if(mysqli_affected_rows($conn) > 0 ){

        if($login_akun['user_type'] == 'admin'){
            header('location: admin/admin.php');
            echo "Berhasil Login";
        }else{
            header('location: member/member.php');
            echo "Berhasil Login";
        }
            
        }else{
            echo "Password dan username salah";
            echo mysqli_error($conn);
        }
        
    }
    

    


?>