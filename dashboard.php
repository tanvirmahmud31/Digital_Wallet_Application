<?php
include 'db.php';

// demo user (later session use korbe)
$user_id = 1;

$sql = "SELECT * FROM users WHERE id=$user_id";
$result = mysqli_query($conn,$sql);
$user = mysqli_fetch_assoc($result);
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Dashboard | CyberShield Wallet</title>

<style>
body{
    margin:0;
    font-family: Arial;
    background:#0a0f1f;
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

/* navbar */
nav{
    display:flex;
    justify-content:space-between;
    align-items:center;
    padding:20px 50px;
    background:rgba(255,255,255,0.05);
    backdrop-filter:blur(10px);
    border-bottom:1px solid rgba(255,255,255,0.1);
}

nav h1{
    color:#00ffee;
}

nav a{
    color:white;
    text-decoration:none;
    margin-left:20px;
}

nav a:hover{
    color:#00ffee;
}

/* container */
.container{
    padding:40px;
}

/* cards */
.cards{
    display:grid;
    grid-template-columns:repeat(auto-fit,minmax(250px,1fr));
    gap:20px;
}

.card{
    background:rgba(255,255,255,0.05);
    border:1px solid rgba(255,255,255,0.1);
    padding:25px;
    border-radius:20px;
    backdrop-filter:blur(15px);
    box-shadow:0 0 20px rgba(0,255,255,0.1);
    transition:0.3s;
}

.card:hover{
    transform:translateY(-5px);
    box-shadow:0 0 25px rgba(0,255,255,0.3);
}

.card h2{
    color:#00ffee;
}

/* balance */
.balance{
    font-size:40px;
    color:#00ff88;
    margin-top:10px;
}

/* actions */
.actions{
    margin-top:30px;
    display:flex;
    gap:15px;
    flex-wrap:wrap;
}

.btn{
    padding:12px 20px;
    border:none;
    border-radius:10px;
    cursor:pointer;
    font-weight:bold;
    transition:0.3s;
}

.send{
    background:#00ffee;
    color:black;
}

.add{
    background:#00ff88;
    color:black;
}

.history{
    background:transparent;
    border:1px solid #00ffee;
    color:#00ffee;
}

.btn:hover{
    transform:scale(1.05);
}

/* info section */
.info{
    margin-top:30px;
    padding:20px;
    background:rgba(255,255,255,0.05);
    border-radius:20px;
    border:1px solid rgba(255,255,255,0.1);
}

</style>
</head>

<body>

<nav>
    <h1>CyberShield Wallet</h1>
    <div>
        <a href="#">Dashboard</a>
        <a href="logout.php">Logout</a>
    </div>
</nav>

<div class="container">

    <h2>Welcome, <?php echo $user['full_name']; ?> 👋</h2>

    <div class="cards">

        <div class="card">
            <h2>Balance</h2>
            <div class="balance">
                $<?php echo number_format($user['balance']); ?>
            </div>
        </div>

        <div class="card">
            <h2>Email</h2>
            <p><?php echo $user['email']; ?></p>
        </div>

        <div class="card">
            <h2>Phone</h2>
            <p><?php echo $user['phone']; ?></p>
        </div>

    </div>

    <div class="actions">
        <button class="btn send">Send Money</button>
        <button class="btn add">Add Money</button>
        <button class="btn history">Transaction History</button>
    </div>

    <div class="info">
        <h3>Security Status</h3>
        <p>✔ AES-256 Encryption Active</p>
        <p>✔ Firewall Protected</p>
        <p>✔ Fraud Detection ON</p>
        <p>✔ Secure Session Enabled</p>
    </div>

</div>

</body>
</html>
