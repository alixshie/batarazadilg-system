<?php 
   session_start();
   include "db_conn.php";
   if (isset($_SESSION['username']) && isset($_SESSION['id'])) {   ?>

			
<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Barangay Forms </title>

        <!-- CSS -->
        <link rel="stylesheet" href="CSS/barangayform.css">
                                        
    </head>
    <header>
       
    <body>
        <head>
            <div class="nav">
                <ul>
                    <li><a href="home.php">HOME</a></li>
                    <li><a href="about.php">ABOUT US</a></li>
                    <li><a href="#">BARANGAY FORMS</a></li>
                                    <li><a href="logout.php" class="btn btn-dark">Logout</a></li>

                </ul>
             </div> 
    </head>
    <header>
      <header>
        <img src="images/stitle.png" alt="header Image" class="header-image">
      </DIV>
      </header>
    <main>
    <div class="container">
        <h1>CLICKABLE DOWNLOADABLE FORMS</h1>
        <h2>FINANCIAL ADMINISTRATION AND SUSTAINABILITY</h2>
        <ul>
            <li><a href="link-to-form1.pdf">Barangay Full Disclosure Policy (BFDP) Form A</a></li>
            <li><a href="link-to-form2.pdf">Barangay Financial Report (BFR) – Statement of Receipts and Expenditures (SRE)</a></li>
            <li><a href="link-to-form3.pdf">BFDP Form I (Financial Documents)</a></li>
            <li><a href="link-to-form4.pdf">BFDP – Notice of Award</a></li>
            <li><a href="link-to-form5.pdf">BFDP – Barangay Budget Preparation Form No. 2 (Annex 2)</a></li>
            <li><a href="link-to-form6.pdf">SK – Annual Budget</a></li>
            <li><a href="link-to-form7.pdf">SK – Annual Budget Authorization Form No. 1 (Annual Budget / Appropriation Ordinance)</a></li>
            <li><a href="link-to-form8.pdf">SP – CODIWOP</a></li>
            <li><a href="link-to-form9.pdf">Annual Budget</a></li>
            <li><a href="link-to-form10.pdf">Barangay Assembly Post Activity Report</a></li>
            <li><a href="link-to-form11.pdf">Annual Investment Plan</a></li>
        </ul>
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