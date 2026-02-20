<?php
session_start();
include "db.php";

if(isset($_POST['login'])){

    $username = mysqli_real_escape_string($conn, $_POST['username']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);

    $sql = "SELECT * FROM admins WHERE username='$username' AND password='$password'";
    $result = mysqli_query($conn, $sql);

    if(mysqli_num_rows($result) == 1){
        $_SESSION['admin'] = $username;
        header("Location: post.php");
        exit();
    } else {
        $error = "Invalid Username or Password!";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
<title>Admin Login</title>
<style>
*{margin:0;padding:0;box-sizing:border-box;font-family:Poppins;}
body{
    background:#1e1e2f;
    display:flex;
    justify-content:center;
    align-items:center;
    height:100vh;
    color:#fff;
}
.admin-panel{
    background:#2b2b3d;
    padding:40px 60px;
    border-radius:12px;
    box-shadow:0 8px 25px rgba(0,0,0,0.5);
    text-align:center;
}
h1{
    margin-bottom:20px;
    color:#ffcc00;
}
input{
    width:200px;
    padding:8px;
    margin:5px 0;
    border:none;
    border-radius:5px;
}
button{
    width:200px;
    padding:10px;
    background:#ffcc00;
    border:none;
    border-radius:5px;
    cursor:pointer;
    font-weight:bold;
}
button:hover{
    background:#fff;
}
.error{
    color:red;
    margin-bottom:10px;
}
</style>
</head>
<body>

<div class="admin-panel">
    <h1>Admin Login</h1>

    <?php if(isset($error)){ echo "<div class='error'>$error</div>"; } ?>

    <form method="POST">
        <input type="text" name="username" placeholder="Username" required><br>
        <input type="password" name="password" placeholder="Password" required><br><br>
        <button type="submit" name="login">Login</button>
    </form>
</div>

</body>
</html>