<?php 
   session_start();
   include "db_conn.php";
   if (isset($_SESSION['username']) && isset($_SESSION['id'])) {   ?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quarterly</title>
    <link rel="stylesheet" href="CSS/Quarterly.css">
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
        <h1>QUARTERLY <a href="https://docs.google.com/spreadsheets/d/1LKDx7CiEgFRqSwcOtsISs99rKfiQA2rblDuU9MQV64U/edit?gid=0#gid=0" class="link">click here for the consolidated data!</a></h1>
        <ol class="meeting-list">
            <li><a href="#">BFDP</a></li>
            <li><a href="#">BPCO/BPL3 Quarterly Report thru OMS</a></li>
            <li><a href="#">LEIPO LEDIP</a></li>
            <li><a href="#">EVOSS</a></li>
            <li><a href="#">FDP PCM</a></li>
            <li><a href="#">LADAC Meeting</a></li>
            <li><a href="#">LDRRMC Meeting</a></li>
            <li><a href="#">Contingency Plan</a></li>
            <li><a href="#">Pre-emptive Evacuation</a></li>
            <li><a href="#">POC Meeting</a></li>
            <li><a href="#">LYDC Meeting</a></li>
            <li><a href="#">SWMB Meeting</a></li>
            <li><a href="#">Solid Waste Management Plan PCM</a></li>
            <li><a href="#">First Time Job Seeker</a></li>
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