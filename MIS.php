<?php 
   session_start();
   include "db_conn.php";
   if (isset($_SESSION['username']) && isset($_SESSION['id'])) {   ?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MONITORING AND EVALUATION</title>
    <link rel="stylesheet" href="CSS/mis.css">
    <link rel="shortcut icon" href="images/dilglogo.png">

</head>
<body>

<body>
    <head>
        <div class="nav">
            <ul>
                <li><a href="index.php">HOME</a></li>
                <li><a href="about.php">ABOUT US</a></li>
                <li><a href="#">BARANGAY</a></li>
            </ul>
         </div> 
       </head>
       <header>
        <header>
          <img src="images/moonitor.png" alt="header Image" class="header-image">
        </DIV>
        </header>
  
      <main>
          <section class="reference">
            <div class="time-period">
                <a href="https://docs.google.com/spreadsheets/d/1cxiJCw2YDwS9LHZmi0o0vMeCktSiSmskZ0jOO8Qb0TU/edit?fbclid=IwAR27G6pyJortAfUG6vbiT1mZoCldUSLL0n1ozG0jCvEJTVqAUa6STD-eWDI&gid=391486590#gid=391486590">
              <img src="images/reference.png" alt=""></a>
              <p>LGMED SCORECARD REFERENCER</p>
          </div>
            <div class="time-period">
                <a href="AUDIT.php">
              <img src="images/audit.jpg" alt=""></a>
              <p>AUDIT RESULT</p>
          </div>
      
          </section>
  
          <section class="frequency">
              <div class="time-period">
                <a href="Daily.php">
                  <img src="images/daily.png" alt=""></a>
                  <p>Daily</p>
              </div>
              <div class="time-period">
                <a href="Weekly.php">
                  <img src="images/weekly.png" alt=""></a>
                  <p>Weekly</p>
              </div>
              <div class="time-period">
                <a href="Monthly.php">
                  <img src="images/monthly.png" alt=""></a>
                  <p>Monthly</p>
              </div>
              <div class="time-period">
                <a href="Quarterly.php">
                  <img src="images/quarteyly.png" alt=""></a>
                  <p>Quarterly</p>
              </div>
              <div class="time-period">
                <a href="Semestral.php">
                  <img src="images/semestral.jpg" alt=""></a>
                  <p>Semestral</p>
              </div>
              <div class="time-period">
                <a href="One_shot.php">
                  <img src="images/oneshot.png" alt=""></a>
                  <p>One Shot</p>
              </div>
          </section>
      </main>




      <div class="container">

        <h1>2023 LEAD SCHEDULE & NON-SCORECARD MONITORING – BATARAZA</h1>

        <table>

            <thead>

                <tr>

                    <th>Location</th>

                    <th>Date 1</th>

                    <th>Date 2</th>

                    <th>Date 3</th>

                    <th>Date 4</th>

                    <th>Date 5</th>

                </tr>

            </thead>

            <tbody>

                <tr>

                    <td>Inogbong</td>

                    <td class="date-green">Jan 12, 2024</td>

                    <td class="date-green">Feb 2, 2025</td>

                    <td class="date-green">Mar 7, 2023</td>

                    <td class="date-green">Apr 10, 2025</td>

                    <td class="date-green">May 11, 2025</td>

                </tr>

                <tr>

                    <td>Marangas</td>

                    <td class="date-green">Jan 14, 2023</td>

                    <td class="date-green">Feb 25, 2023</td>

                    <td class="date-green">Mar 26, 2023</td>

                    <td class="date-green">Apr 15, 2023</td>

                    <td class="date-green">May 21, 2023</td>

                </tr>

                <tr>

                    <td>Bunobuno</td>

                    <td class="date-green">Jan 16, 2023</td>

                    <td class="date-green">Feb 22, 2023</td>

                    <td class="date-green">Mar 28, 2023</td>

                    <td class="date-green">Apr 26, 2023</td>

                    <td class="date-green">May 27, 2023</td>

                </tr>

                <tr>

                    <td>Malihud</td>

                    <td class="date-green">Jan 18, 2024</td>

                    <td class="date-green">Feb 18, 2024</td>

                    <td class="date-green">Mar 30, 2024</td>

                    <td class="date-green">Apr 28, 2024</td>

                    <td class="date-green">May 31, 2024</td>

                </tr>

                <tr>

                    <td>Bulalacao</td>

                    <td class="date-green">Jan 20, 2024</td>

                    <td class="date-green">Feb 20, 2024</td>

                    <td class="date-green">Mar 29, 2024</td>

                    <td class="date-green">Apr 30, 2024</td>

                    <td class="date-green">May 29, 2024</td>

                </tr>

                <tr>

                    <td>Tarusan</td>

                    <td class="no-meeting">NO MEETING</td>

                    <td class="date-green">Feb 30, 2024</td>

                    <td class=”date-green”>Mar 31, 2024</td>

                    <td class="date-green">Apr 15, 2024</td>

                    <td class="date-red">May 15, 2024</td>

                </tr>

                <tr>

                    <td>Kulandanom</td>

                    <td class="date-green">Jan 22, 2023</td>

                    <td class="date-green">Feb 2, 2023</td>

                    <td class="date-green">Mar 28, 2023</td>

                    <td class="date-green">Apr 12, 2023</td>

                    <td class="date-green">May 20, 2023</td>

                </tr>

                <tr>

                    <td>Sandoval</td>

                    <td class="date-green">Jan 23, 2024</td>

                    <td class="date-green">Feb 5, 2024</td>

                    <td class="date-green">Mar 15, 2024</td>

                    <td class="date-green">Apr 22, 2024</td>

                    <td class="date-green">May 10, 2024</td>

                </tr>

                <tr>

                    <td>Igang-Igang</td>

                    <td class="date-green">Jan 24, 2024</td>

                    <td class="date-green">Feb 12, 2024</td>

                    <td class="date-green">Mar 5, 2024</td>

                    <td class="date-green">Apr 1, 2024</td>

                    <td class="date-green">May 28, 2024</td>

                </tr>

                <tr>

                    <td>Gotuk</td>

                    <td class="date-green">Jan 25, 2024</td>

                    <td class="date-green">Feb 18, 2024</td>

                    <td class="date-green">Mar 19, 2024</td>

                    <td class="date-green">Apr 20, 2024</td>

                    <td class="date-green">May 26, 2024</td>

                </tr>

                <tr>

                    <td>Ocayan</td>

                    <td class="date-green">Jan 26, 2024</td>

                    <td class="date-green">Feb 16, 2024</td>

                    <td class="date-green">Mar 30, 2023</td>

                    <td class="date-green">Apr 16, 2024</td>

                    <td class="date-green">May 30, 2024</td>

                </tr>

                <tr>

                    <td>Rio Tuba</td>

                    <td class="date-green">Jan 27, 2024</td>

                    <td class="date-green">Feb 5, 2024</td>

                    <td class="date-green">Mar 15, 2024</td>

                    <td class="date-red">Apr 15, 2024</td>

                    <td class="date-green">May 17, 2024</td>

                </tr>

                <tr>

                    <td>TAratak</td>

                    <td class=”date-green”>Jan 28, 2024</td>

                    <td class="date-green">Feb 21, 2024</td>

                    <td class="date-green">Mar 18, 2024</td>

                    <td class="date-green">Apr 27, 2024</td>

                    <td class="date-green">May 25, 2024</td>

                </tr>

                <tr>

                    <td>Sumbiling</td>

                    <td class="date-green">Jan 29, 2024</td>

                    <td class="date-green">Feb 28, 2024</td>

                    <td class="date-green">Mar 5, 2024</td>

                    <td class="date-green">Apr 16, 2024</td>

                    <td class="date-green">May 22, 2024</td>

                </tr>
            </tbody>
            
        </table>
        <div class="links">
          <a href="#">mettings</a>
          <a href="#">monthly</a>
          <a href="#">quarteyly</a>
          <a href="#">semestral</a>
          <a href="#">one shot</a>
          <a href="#"class="important-links">DSWVP</a>
          <a href="#">DDRRM PLAN 2025</a>
          <a href="#">ASSESSMENT</a>
        </div>
    </div>
    
<div class="container">
  <a href="index.php" class="home-button">HOME</a>
</div>






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
        </footer>
  </body>
  </html>
  
<?php }else{
	header("Location: index.php");
} ?>