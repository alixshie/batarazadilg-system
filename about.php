<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>About Us</title>

        <!-- CSS -->
        <link rel="stylesheet" href="CSS/about.css">
                                        
    </head>
    <header>
       <style>
        /* Google Fonts - Poppins */
@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap');

*{
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  font-family: 'Poppins', sans-serif;
}
body{
  min-height: 100vh;
  display: flex;
  align-items: center;
  justify-content: center;
  background-color: #fff;
  
}

.nav {
	padding-top: 10px;
  overflow: hidden;
	top: 0;
	right: 0;
  border: none;
	width: 100%;
	position:fixed;
    background-color: #2e4a62;

}

.nav ul {
    List-style: none;
    padding-left: 780px;
    font-family: Arial, Helvetica, sans-serif;
    font-weight: bold;
}


.nav ul li {
    Display: inline;
    Margin: 0 15px;
}

.nav a {
    Color: white;
    Text-decoration: none;
}
.nav a:hover {
    background: orange;
} 
.nav a:active {
background: #99c74b;
}
header {
    background-color: #fff;
    padding-top: 5px ;
    Justify-content: center;
    padding-left: 25px;

}


.header-image {
    Width: 1000px;
    Height: 240px;
    Justify-content: center;

}

.container {
    padding: 20px;
    border-radius: 8px;
    Justify-content: center;
    width: 1000px;
    align-items: center;

}

.container h1 {
    color: #3c5da3;
    text-align: left;
}

.vision h2, .mission h2 {
    color: black;
    font: bold ;
    padding-left: 25px;
    padding-top: 25px;
}

.container h3 {
    margin-top: 50px;
    color: rgb(220, 87, 87);
    font-family: Arial, Helvetica, sans-serif;
    font-size: 1.5rem;
    text-align: left;
}

.container p {
    line-height: 1.6;
    margin: 20px 0;
    padding-left: 25px;
}


.container {
   padding: 5px;
    border-radius: 8px;
    Justify-content: center;
    width: 1000px;
    align-items: center;

}
.container h3 {
    margin: 20px 0;
    color: rgb(220, 87, 87);
    font-family: Arial, Helvetica, sans-serif;
    font-size: 1.5rem;
    text-align: left;
}
.container h2 {
    color: black;
    font: bold ;
    padding-left: 25px;
    padding-top: 25px;
}
.objectives h2 {
    color: black;
    font: bold ;
    padding-left: 25px;
    padding-top: 25px;
}

.container ul  {
    line-height: 1;
    margin: 15px 0;
    padding-left: 25px;
}
.container li  {
    line-height: 1;
    margin: 15px 0;
    padding-left: 25px;
}

.container {
    padding: 5px;
    border-radius: 8px;
    Justify-content: center;
    width: 1000px;
    align-items: center;
}

.container h1 {
    margin-top: 15px;
    color: rgb(220, 87, 87);
    font-family: Arial, Helvetica, sans-serif;
    font-size: 1.5rem;
    text-align: left;
}

.container p {
       line-height: 1.6;
    margin: 20px 0;
    padding-left: 25px;
}

.footer{
  background-color: #ffc107;
  padding: 10px 0;
  text-align: center;
  width: 100%;

}
.footer-content{
  display: flex;
  justify-content: center;
  align-items: center;
  flex-wrap: wrap;
}
.email, .phone{
  margin: 0 15px;
}
.separator{
  margin: 0 10px;
}
.copyright{
  margin-left: 10px;
}
       </style>
    <body>
        <head>
            <div class="nav">
                <ul>
                    <li><a href="home.php">HOME</a></li>
                    <li><a href="about.php">ABOUT US</a></li>
                    <li><a href="barangayform.php">BARANGAY FORMS</a></li>
                                    <li><a href="logout.php" class="btn btn-dark">Logout</a></li>

                </ul>
             </div> 
    </head>
    <header>
      <header>
        <img src="images/aboutus.png" alt="header Image" class="header-image">
      </DIV>
      </header>
    <main>
      <div class="container">
        <h1>Vision & Mission</h1>
        <div class="vision">
            <h2>Vision</h2>
            <p>A highly trusted Department and Partner in nurturing local 
              governments and sustaining peaceful, safe, progressive, resilient,
               and inclusive communities towards a comfortable and secure life 
               for the Filipinos by 2040.</p>
        </div>
        <div class="mission">
            <h2>Mission</h2>
            <p>The Department shall ensure peace and order, 
              public safety and security, uphold excellence in local governance 
              and enable resilient and inclusive communities.</p>
        </div>
      <div class="container">
        <h3>Goals & Objectives</h3>
        <h2>Goals</h2>
<ul>
          <li>Peaceful, safe, self-reliant and development-dominated communities;</li>
          <li>Improve performance of local governments in governance, administration, social and economic development and environmental management;</li>
          <li>Sustain peace and order condition and ensure public safety.</li>
      </ul>
      <ul class="objectives">
        <h2>Objectives</h2>

          <li>Reduce crime incidents and improve crime solution efficiency;</li>
          <li>Improve jail management and penology services;</li>
          <li>Improve fire protection services;</li>
          <li>Continue professionalization of PNP, BFP and BJMP personnel and services;</li>
          <li>Enhance LGU capacities to improve their performance and enable them to effectively
             and efficiently deliver services to their constituents;</li>
          <li>Continue to initiate policy reforms in support of local autonomy.</li>
      </ul>
</div>
<div class="container">
  <h1>DILG Quality Policy</h1>
  <p>
      We, the DILG, imbued with the core values of Integrity, Commitment, 
      Teamwork, and Responsiveness, commit to formulate sound policies on strengthening local government capacities, 
      performing oversight functions over LGUs, 
      and providing rewards and incentives. 
      We pledge to provide effective technical
       and administrative services to promote excellence in local governance 
       and enhance the service delivery of our Regional and Field Offices for the LBN to become transparent, 
      resilient, socially protective, and competitive, where people in the community live happily.
  </p>
  <p>
      We commit to continually improve the effectiveness of our Quality Management System compliant with applicable statutory
       and regulatory requirements and international standards geared towards organizational efficiency in pursuing our mandate 
       and achieving our client’s satisfaction.
  </p>
  <p>
      We commit to consistently demonstrate "Matino, Mahusay at Mapanagot na Kagawaran Para sa Makabuluhang Pamamahala Lokal".
  </p>
</div>
      </div>

      </div>
    </main>
    </header>
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
        </footer>

    </body>

</html>