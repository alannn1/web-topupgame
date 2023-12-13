<?php
if (isset($_POST["submit"])){
    $username=htmlentities(strip_tags(trim($_POST["username"])));
    $password=htmlentities(strip_tags(trim($_POST["password"])));

    $pesan_error="";

    if(empty($username)){
        $pesan_error .="Username Belum Diisi<br>";
    }
    if(empty($password)){
        $pesan_error .="Password belum diisi<br>";
    }

    include("koneksi.php");

    $username=mysqli_real_escape_string($link,$username);
    $password=mysqli_real_escape_string($link,$password);

    //$password_sha1= sha1($password);

    $query = "SELECT * FROM admin WHERE username='$username' AND password='$password'";
    $result=mysqli_query($link,$query);

    if(mysqli_num_rows($result) == 0 ){
        $pesan_error .="Username dan/atau Password tidak sesuai";
    } 
    mysqli_free_result($result);
    mysqli_close($link);

    if($pesan_error === ""){
        session_start();
        $_SESSION["nama"] = $username;
        header("Location:halaman-tampil/tampil-ml.php");
    }
}
else{
    $pesan_error ="";
    $username = "";
    $password = "";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<?php
        if (isset($pesan)){
            echo "<div class=\"pesan\"$pesan</div>";
        }
        if ($pesan_error !== ""){
            echo "<div class=\"error\"$pesan_error</div>";
        }
        ?>
    <div class="login-page">
        <div class="form">
            <form action="login.php" method="post" class="login" >
                <input type="text" name="username" id="username" placeholder="username">
                <input type="password" name="password" id="password" placeholder="password">
                <button type="submit" name="submit" value="Log in">Login</button>
            </form>
        </div>
    </div>
</body>
</html>