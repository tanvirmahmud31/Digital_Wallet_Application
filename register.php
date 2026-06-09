<?php
include 'db.php';

if(isset($_POST['register'])){

    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $password = $_POST['password'];

    $sql = "INSERT INTO users(full_name,email,phone,password)
            VALUES('$name','$email','$phone','$password')";

    if(mysqli_query($conn,$sql)){
        header("Location: login.php");
        exit();
    }else{
        echo "Register Failed";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Register</title>

<style>
body{
    margin:0;
    font-family: Arial, sans-serif;
    background: #0a0f1f;
    height:100vh;
    display:flex;
    justify-content:center;
    align-items:center;
    color:white;
}

/* background glow */
body::before{
    content:"";
    position:fixed;
    width:100%;
    height:100%;
    background:
    radial-gradient(circle at top left, #00ffee22, transparent 30%),
    radial-gradient(circle at bottom right, #00ff8822, transparent 30%);
    z-index:-1;
}

.box{
    width:360px;
    padding:35px;
    background: rgba(255,255,255,0.05);
    border:1px solid rgba(255,255,255,0.1);
    backdrop-filter: blur(15px);
    border-radius:20px;
    box-shadow:0 0 30px rgba(0,255,255,0.2);
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
    margin:8px 0;
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
    background:#00ff88;
    color:black;
    font-weight:bold;
    cursor:pointer;
    transition:0.3s;
}

button:hover{
    transform:scale(1.05);
    box-shadow:0 0 15px #00ff88;
}

.link{
    text-align:center;
    margin-top:15px;
    font-size:14px;
}

.link a{
    color:#00ffee;
    text-decoration:none;
}
</style>
</head>

<body>

<div class="box">

    <h2>CREATE ACCOUNT</h2>

    <form method="POST">

        <input type="text" name="name" placeholder="Full Name" required>

        <input type="text" name="email" placeholder="Email" required>

        <input type="text" name="phone" placeholder="Phone" required>

        <input type="password" name="password" placeholder="Password" required>

        <button name="register">REGISTER</button>

    </form>

    <div class="link">
        Already have account? <a href="login.php">Login</a>
    </div>

</div>

</body>
</html>
