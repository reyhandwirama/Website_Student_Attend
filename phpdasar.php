<?php

$conn = mysqli_connect('localhost','root','','phpdasar');

/* $data = mysqli_quer($conn, 'SELECT * FROM ') */
$foto = mysqli_query($conn,"SELECT * FROM mahasiswa where nama_image ='1.jpg'");

$row = mysqli_fetch_assoc($foto);
if (isset($_POST["submit"])){
    $filename = $_FILES["upload"]["name"];
    $imagedata = $_FILES["upload"]["tmp_name"];

    var_dump($filename);
    $file = "INSERT INTO mahasiswa (nama_image,image_data) values('$filename','$imagedata')";

    mysqli_query($conn,$file);
    if (mysqli_affected_rows($conn) >0){
        echo "Berhasil";
    }
    else{
        echo "Gagal!";
        echo mysqli_error($conn);
    }



}

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>



    <div>
    <?php echo '<img src ="data:image/png;base64,'.base64_encode($row['image_data']).'" height="50px"/>'; ?>
    </div>
    
</head>
<body>
    
</body>
</html>