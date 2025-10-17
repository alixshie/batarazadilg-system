<?php 
   session_start();
   include "db_conn.php";
   if (isset($_SESSION['username']) && isset($_SESSION['id'])) {   ?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daily</title>
    <link rel="stylesheet" href="CSS/weekly.css">
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
        <h2>DAILY REPORTS</h2>
        <ul> <li> <a href="#">TeLPOMS (every Wednesday via Portal for LGUs)</a></li>
      
      <div class="home">
  <a href="MIS.php" class="home-button">BACK</a>
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