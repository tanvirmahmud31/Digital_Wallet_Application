<?php
$title = "CyberShield Wallet";
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php echo $title; ?></title>

  <style>
    *{
      margin:0;
      padding:0;
      box-sizing:border-box;
      font-family: Arial, sans-serif;
    }

    body{
      background: #0a0f1f;
      color: white;
      overflow-x: hidden;
    }

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

    nav{
      display:flex;
      justify-content:space-between;
      align-items:center;
      padding:20px 60px;
      background: rgba(255,255,255,0.05);
      backdrop-filter: blur(10px);
      border-bottom:1px solid rgba(255,255,255,0.1);
    }

    nav h1{
      color:#00ffee;
      font-size:28px;
    }

    nav ul{
      display:flex;
      list-style:none;
      gap:30px;
    }

    nav ul li a{
      color:white;
      text-decoration:none;
      transition:0.3s;
    }

    nav ul li a:hover{
      color:#00ffee;
    }

    .hero{
      min-height:90vh;
      display:flex;
      justify-content:space-between;
      align-items:center;
      padding:60px;
      gap:50px;
    }

    .hero-text{
      flex:1;
    }

    .hero-text h2{
      font-size:60px;
      color:#00ffee;
      margin-bottom:20px;
    }

    .hero-text p{
      font-size:20px;
      line-height:1.8;
      color:#ccc;
      margin-bottom:30px;
    }

    .buttons{
      display:flex;
      gap:20px;
    }

    .btn{
      padding:14px 30px;
      border:none;
      border-radius:10px;
      cursor:pointer;
      font-size:16px;
      transition:0.3s;
    }

    .login-btn{
      background:#00ffee;
      color:black;
      font-weight:bold;
    }

    .register-btn{
      background:transparent;
      border:2px solid #00ffee;
      color:#00ffee;
    }

    .btn:hover{
      transform:scale(1.05);
    }

    .wallet-card{
      flex:1;
      background: rgba(255,255,255,0.05);
      border:1px solid rgba(255,255,255,0.1);
      backdrop-filter: blur(15px);
      border-radius:20px;
      padding:40px;
      box-shadow:0 0 30px rgba(0,255,255,0.2);
      animation: glow 3s infinite alternate;
    }

    @keyframes glow{
      from{
        box-shadow:0 0 20px rgba(0,255,255,0.2);
      }
      to{
        box-shadow:0 0 40px rgba(0,255,255,0.5);
      }
    }

    .wallet-card h3{
      color:#00ffee;
      margin-bottom:20px;
      font-size:28px;
    }

    .balance{
      font-size:40px;
      margin:20px 0;
      color:#00ff88;
    }

    .security-status{
      margin-top:20px;
    }

    .security-status p{
      margin:10px 0;
      color:#ddd;
    }

    .features{
      padding:80px 60px;
    }

    .features h2{
      text-align:center;
      font-size:40px;
      color:#00ffee;
      margin-bottom:50px;
    }

    .feature-grid{
      display:grid;
      grid-template-columns:repeat(auto-fit,minmax(250px,1fr));
      gap:30px;
    }

    .feature-card{
      background: rgba(255,255,255,0.05);
      padding:30px;
      border-radius:20px;
      text-align:center;
      border:1px solid rgba(255,255,255,0.1);
      transition:0.3s;
    }

    .feature-card:hover{
      transform:translateY(-10px);
      box-shadow:0 0 20px rgba(0,255,255,0.3);
    }

    .feature-card h3{
      margin:20px 0;
      color:#00ffee;
    }

    .monitor{
      padding:60px;
    }

    .monitor-box{
      background:black;
      border:1px solid #00ff88;
      padding:30px;
      border-radius:20px;
      font-family: monospace;
      color:#00ff88;
      line-height:2;
      box-shadow:0 0 20px rgba(0,255,100,0.3);
    }

    footer{
      text-align:center;
      padding:20px;
      margin-top:50px;
      border-top:1px solid rgba(255,255,255,0.1);
      color:#aaa;
    }

    @media(max-width:900px){
      .hero{
        flex-direction:column;
        text-align:center;
      }

      .buttons{
        justify-content:center;
      }

      nav{
        flex-direction:column;
        gap:20px;
      }

      nav ul{
        flex-wrap:wrap;
        justify-content:center;
      }
    }
  </style>
</head>

<body>

<nav>
  <h1><?php echo $title; ?></h1>

  <ul>
    <li><a href="#">Home</a></li>
    <li><a href="#">Features</a></li>
    <li><a href="#">Security</a></li>
    <li><a href="#">About</a></li>
    <li><a href="login.php">Login</a></li>
  </ul>
</nav>

<section class="hero">

  <div class="hero-text">
    <h2>Secure Digital Wallet</h2>

    <p>
      Cybersecurity-based smart wallet system with secure transactions,
      encrypted payments, and real-time threat monitoring.
    </p>

    <div class="buttons">
      <button class="btn login-btn" onclick="window.location.href='login.php'">
        Login
      </button>

      <button class="btn register-btn" onclick="window.location.href='register.php'">
        Register
      </button>
    </div>
  </div>

  <div class="wallet-card">

    <h3>Wallet Status</h3>

    <p>Current Balance</p>

    <?php
      $balance = 12450;
    ?>

    <div class="balance">
      $<?php echo number_format($balance); ?>
    </div>

    <div class="security-status">
      <p>✔ AES-256 Encryption Enabled</p>
      <p>✔ Firewall Active</p>
      <p>✔ Secure Server Connected</p>
      <p>✔ Threat Monitoring ON</p>
    </div>

  </div>

</section>

<section class="features">

  <h2>Security Features</h2>

  <div class="feature-grid">

    <div class="feature-card">
      <h3>🔒 Secure Login</h3>
      <p>Protected authentication with encrypted access system.</p>
    </div>

    <div class="feature-card">
      <h3>💸 Instant Transfer</h3>
      <p>Fast and secure money transactions in real time.</p>
    </div>

    <div class="feature-card">
      <h3>🛡 Fraud Detection</h3>
      <p>Detects suspicious activities and protects accounts.</p>
    </div>

    <div class="feature-card">
      <h3>📱 QR Payment</h3>
      <p>Easy QR-based digital payment system.</p>
    </div>

  </div>

</section>

<section class="monitor">

  <div class="monitor-box">
    <h2>LIVE SECURITY MONITOR</h2>

    <p>Blocked Login Attempts : 12</p>
    <p>Firewall Status : ACTIVE</p>
    <p>Encryption Status : ENABLED</p>
    <p>Secure Connection : VERIFIED</p>
    <p>Threat Level : LOW</p>
  </div>

</section>

<footer>
  © <?php echo date("Y"); ?> CyberShield Wallet | Cybersecurity Mini Project
</footer>

</body>
</html>
