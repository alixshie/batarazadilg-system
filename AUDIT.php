<?php 
   session_start();
   include "db_conn.php";
   if (isset($_SESSION['username']) && isset($_SESSION['id'])) {   ?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Audit</title>
    <link rel="stylesheet" href="CSS/audit.css">
    <link rel="shortcut icon" href="images/dilglogo.png">

</head>
<body>

<body>
    <head>
        <div class="nav">
            <ul>
                <li><a href="index.php">HOME</a></li>
                <li><a href="about.php">ABOUT US</a></li>
                <li><a href="#">BARANGAY FORMS</a></li>
            </ul>
         </div> 
       </head>
       <header>
        <header>
          <img src="images/moonitor.png" alt="header Image" class="header-image">
        </DIV>
        </header>
<body>
    <div class="container">
        <h1>AUDIT RESULT</h1>
        <div class="back">  <a href="MIS.php">
        <button class="back-button">BACK</button></a></div>
        <div class="logo-grid">
            <div class="logo-item">
                <a href="https://bit.ly/2022PALAWAN-POC">
                <img src="images/POC.jpg" alt="POC Logo"></a>
                <p>POC</p>
            </div>
            <div class="logo-item">
                  <a href="https://drive.google.com/drive/folders/1z2nZMEm-kNMNcpxrZMk9OdX9fXrNhACR">
                <img src="images/ADAC.png" alt="ADAC Logo"></a>
                <p>ADAC</p>
            </div> <div class="logo-item">
                  <a href="https://drive.google.com/drive/u/0/folders/1aEYi86Vt4GvYVY7V3MPtHcyUfYHneMyv">
                <img src="images/SPECIAL.png" alt="SGLG Logo"></a>
                <p>Seal of Good Local Governance</p>
            </div>
            <div class="logo-item">
                  <a href="https://drive.google.com/file/d/1CY_49eOw0TvvsplUFn5n4CoekL7kgYCA/view">
                <img src="images/LCAT-VAWC.jpg" alt="LCAT-VAWC Logo"></a>
                <p>LCAT-VAWC</p>
            </div>
            <div class="logo-item">
                  <a href="https://drive.google.com/file/d/1meh_0s-AIjU_t5zZA2oW7KMS79Hd0PpL/view">
                <img src="IMAGES/LCPC.png" alt="LCPC Logo"></a>
                <p>LCPC</p>
            </div>
           
            <div class="logo-item">
                  <a href="#">
                <img src="images/CFLGA.jpg" alt="CFLGA Logo"></a>
                <p>CFLGA</p>
            </div>
        </div>
    </div>
    
    <footer>
      <footer class="footer">
        <div class="footer-content">
          <span class="email">dilg.bataraza@gmail.com</span>
          <span class="separator">|</span>
          <span class="phone">(087) 685464</span>
          <span class="separator">|</span>
          <span class="phone">097687755677</span>
          <span class="separator">|</span>
          <span class="phone">096786868866</span>
          <span class="separator">|</span>
          <span class="copyright"> 2025 DILG BATARAZA PALAWAN</span>
      </div>
      </div>
      
        </footer>
</body>
</html>



<?php }else{
	header("Location: index.php");
} ?>
