<?php 
   session_start();
   include "db_conn.php";
   if (isset($_SESSION['username']) && isset($_SESSION['id'])) {   ?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Monthly</title>
    <link rel="stylesheet" href="CSS/Quarterly.css">
    <link rel="shortcut icon" href="images/dilglogo.png">

</head>
<body>
<style>
    
  .nav ul {
      List-style: none;
      padding-left: 770px;
      font-family: Arial, Helvetica, sans-serif;
      font-weight: bold;
  }
</style>
<body>
    <head>
        <div class="nav">
            <ul>
                <li><a href="index.php">HOME</a></li>
                <li><a href="about.php">ABOUT US</a></li>
                <li><a href="#">BARANGAY FORMS</a></li>
                                <li><a href="logout.php" class="btn btn-dark">Logout</a></li>

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
        <h1>MONTHLY <a href="https://docs.google.com/spreadsheets/d/16p4ZOOdwQ3Cl0Hmg8_MAWVorpao2P77sojq5JAMVBls/edit?gid=415866244#gid=415866244" class="link">click here for the consolidated data!</a></h1>
        <ol class="meeting-list">
            <li><a href="https://docs.google.com/spreadsheets/d/1RTFmcY8rBA94sIu3WtRcZ2OLUst9wIjcdn_32PAcfWs/edit?gid=0#gid=0">African Swine Fever (ASF) Monitoring</a></li>
            <li><a href="#">Barangay Benefits</a></li>
            <li><a href="#">CDP Monitoring</a></li>
            <li><a href="#">CLUPS Monitoring</a></li>
            <li><a href="#">LDRRMF Utilization (Barangay)</a></li>
            <li><a href="#">LDRRMF Utilization (PCM)</a></li>
            <li><a href="#">Road Cleaning</a></li>
            <li><a href="#">Kasambahay Law </a></li>
        </ol>
  <a href="MIS.php" class="home-button">BACK</a>
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