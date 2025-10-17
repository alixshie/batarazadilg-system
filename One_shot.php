<?php 
   session_start();
   include "db_conn.php";
   if (isset($_SESSION['username']) && isset($_SESSION['id'])) {   ?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>One Shot</title>
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
        <h1>ONE SHOT <a href="https://docs.google.com/spreadsheets/d/1JI92RqpRufB4Bd4Vm5JXb1mTaKu35cyWMoNw0Q1ugcI/edit?gid=888564095#gid=888564095" class="link">click here for the consolidated data!</a></h1>
        <ol class="meeting-list">
            <li><a href="#">Barangay Assembly Day</a></li>
            <li><a href="#">BPOPS Accomplishment Report (AR)</a></li>
            <li><a href="#">CHR-DILG JMC No 2020-01</a></li>
            <li><a href="#">JJWA</a></li>
            <li><a href="#">LCAT- VAWC Accomplishment 1st Sem</a></li>
            <li><a href="#">LCAT- VAWC Accomplishment 2NDt Sem</a></li>
            <li><a href="#">LDC Meeting</a></li>
            <li><a href="#">Nutrition Concerns</a></li>
            <li><a href="#">RPRH Law (P/HUC)</a></li>
            <li><a href="#">RBIs</a></li>
            <li><a href="#">HAPAG</a></li>
            <li><a href="#">SWMB Meeting</a></li>

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