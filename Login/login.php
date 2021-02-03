<?php 
// cek apakah tombol login sudah di click apa belum
if(isset($_POST["submit"])){
    //cek usename dan password
    if($_POST["username"] == "admin" && $_POST ["password"] == "ayo"){
        //jika benar maka akan pindah ke halaman admin
        header("location: admin.php");
        exit;
    }else{
        $error = true;
    }
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <!-- pesan error -->
    <?php if(isset($error)):?>
        <p style="color: red; font-style: italic;"> username/password is wrong <P>
    <?php endif; ?>

    <form action="" method="post">

    
    <label for="username">Username :</label>
    <input type="text" name="username" id="username">
    
    <p>

    <label for="password">Password :</label>
    <input type="password" name="password" id="password">

    <p>
    <button tyoe="submit" name="submit">Login</login>

    </form>
</body>
</html>