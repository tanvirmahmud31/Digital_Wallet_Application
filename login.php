<?php
include 'db.php';

if(isset($_POST['login'])){

   $email = trim($_POST['email']);
   $password = trim($_POST['password']);

   $sql = "SELECT * FROM users
           WHERE email='$email'
           AND password='$password'";

   $result = mysqli_query($conn,$sql);

   if(mysqli_num_rows($result) > 0){
        header("Location: dashboard.php");
        exit();
   }else{
        $error = "Invalid Email or Password!";
   }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Login | CyberShield Wallet</title>

<style>
body{
    margin:0;
    font-family: Arial;
    background: radial-gradient(circle at top left, #00ffee22, #0a0f1f),
                radial-gradient(circle at bottom right, #00ff8822, #0a0f1f);
    height:100vh;
    display:flex;
    justify-content:center;
    align-items:center;
    color:white;
}

.login-box{
    width:350px;
    padding:40px;
    background: rgba(255,255,255,0.05);
    border:1px solid rgba(255,255,255,0.1);
    backdrop-filter: blur(15px);
    border-radius:20px;
    box-shadow:0 0 30px rgba(0,255,255,0.2);
    animation: glow 3s infinite alternate;
}

@keyframes glow{
    from{ box-shadow:0 0 15px rgba(0,255,255,0.2); }
    to{ box-shadow:0 0 40px rgba(0,255,255,0.5); }
}

h2{
    text-align:center;
    color:#00ffee;
    margin-bottom:20px;
    letter-spacing:2px;
}

input{
    width:100%;
    padding:12px;
    margin:10px 0;
    border:none;
    border-radius:10px;
    outline:none;
    background:rgba(0,0,0,0.4);
    color:white;
    border:1px solid rgba(255,255,255,0.2);
}

input:focus{
    border:1px solid #00ffee;
    box-shadow:0 0 10px #00ffee55;
}

button{
    width:100%;
    padding:12px;
    margin-top:10px;
    border:none;
    border-radius:10px;
    background:#00ffee;
    color:black;
    font-weight:bold;
    cursor:pointer;
    transition:0.3s;
}

button:hover{
    transform:scale(1.05);
    box-shadow:0 0 15px #00ffee;
}

.error{
    text-align:center;
    color:#ff4d4d;
    margin-top:10px;
}
</style>
</head>

<body>

<div class="login-box">

    <h2>SECURE LOGIN</h2>

    <form method="POST">

        <input type="text" name="email" placeholder="Enter Email" required>

        <input type="password" name="password" placeholder="Enter Password" required>

        <button name="login">LOGIN</button>

    </form>

    <?php if(isset($error)) echo "<div class='error'>$error</div>"; ?>

</div>

</body>
</html>
