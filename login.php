<?php
//cel apakah tombol submit sdh di tekan atau belum
if(isset( $_POST["submit"])){
//cek username dan password
if( $_POST["username"] == "diazmdst" && $_POST["password"] == "2712"){
//jika benar redirect ke halaman admin
header("Location:admin.php");
exit;
}else{
//jika salah, tampilkan pesan kesalahan
$error = true;
}
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login admin</title>
</head>
<body>

<?php if(isset($error)) :  ?>
   <p style="color : red; font-style : italic;">username / password salah</p>
<?php endif;?>

    <ul>
    <form action="main.php" method="post">
        <li>
            <label for="username">Username</label>
            <input type="text" name="username" id="username">
        </li>
        <li>
        <label for="password">password</label>
            <input type="password" name="password" id="password">
        </li>
        <li>
            <button type="submit" name="submit">login</button>
        </li>
    </form>
    </ul>

</body>
</html>