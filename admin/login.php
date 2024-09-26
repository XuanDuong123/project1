<?php
session_start();
ob_start();
include "../model/connectdb.php";
include "../model/user.php";
if((isset($_POST['dangnhap']))&&($_POST['dangnhap'])){
    $user = $_POST['user'];
    $pass = $_POST['pass'];
    $role=checkuser($user,$pass);
    $_SESSION['role']=$role;
    if($role==1) header('location:index.php');
    else{
        $txt_error="Username hoặc Password không tồn tại!";

    }// header('location:login.php');
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
    <style>
        body{
            font-family: Arial, sans-serif;
            }
            .signup-labal{
                display: inline-block;
            }
    </style>
    <div class="login">
        <h2>Login up</h2>
        <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
            <label class="signup-labal" for="username">Username:</label>
            <input type="text" name="user" id="username" required>
            <label class="signup-labal" for="password">Password:</label>
            <input type="password" name="pass" id="password" required>
            <input type="submit" name="dangnhap" value="Đăng nhập">
            <?php
            if(isset($txt_error)&&($txt_error!="")){
                echo "<font color='red'>".$txt_error."</font>";
            }
            ?>
        </form>
    </div>
</body>
</html>