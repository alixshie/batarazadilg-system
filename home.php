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
        <title>Bataraza Local Cloud Database Management||System </title>
        <link rel="shortcut icon" href="images/dilglogo.png">
        <!-- Swiper CSS -->
        <link rel="stylesheet" href="CSS/swiper-bundle.min.css">
        <!-- CSS -->
        <link rel="stylesheet" href="CSS/style.css">
                                        
    </head>
             <body>

    <header>
      <header>
        <main>
        <div class="nav">
            <ul>
                <li><a href="#">HOME</a></li>
                <li><a href="about.php">ABOUT US</a></li>
                <li><a href="barangayform.php">BARANGAY FORMS</a></li>
                <li><a href="logout.php" class="btn btn-dark">Logout</a></li>
           </ul>
           </div> 
        </div>
     </main> 


</header>
             <section>
                  <div class="logo">
                     <img src="images/dilglogo.png" alt="" class="logo">
                       <div class="logo-text">BATARAZA</div>
                       </div>
                          </div>
                             <div class="system-title">
                               <img src="stitle.png" alt="" class="system-title"></div>
                                 </div>
        <div class="slide-container swiper">
            <div class="slide-content">
                <div class="card-wrapper swiper-wrapper">
                    <div class="card swiper-slide">
                        <div class="image-content">

                            <div class="card-image" title="watch on You Tube">
                                <a href="https://www.youtube.com/watch?v=sl04V1nU5tM&embeds_referring_euri=https%3A%2F%2Fsites.google.com%2F&source_ve_path=OTY3MTQ">
                                <img src="municipal.jpg" alt="" class="card-img"></a>
                                  </div>
                                    </div>
                                      </div>

         <div class="card swiper-slide">
               <div class="image-content">
                   <div class="card-image">
                    <a href="https://napolcom.gov.ph/">
                      <img src="images/awards (1).jpg" alt="" class="card-img"></a>
                         </div>
                            </div>
                               </div>

      <div class="card swiper-slide">
          <div class="image-content">
             <div class="card-image">
              <a href="https://www.dilg.gov.ph/">
                <img src="images/awards (2).jpg" alt="" class="card-img"></a>
                    </div>
                        </div>
                           </div>
                 
                    <div class="card swiper-slide">
                        <div class="image-content">

                            <div class="card-image">
                                <img src="images/awards (5).jpg" alt="" class="card-img">
                            </div>
                        </div>                                             
                    </div>
                </div>
            </div>
        </div>
                    <div class="swiper-button-next swiper-navBtn"></div>
                    <div class="swiper-button-prev swiper-navBtn"></div>
                    <div class="swiper-pagination"></div>
            </div>
            
      </section>

  <style>
  body{
  min-height: 100vh;
  display: flex;
  align-items: center;
  justify-content: center;
  background-color: grey white;
  background-size: cover;
}
.swiper-navBtn:hover{
  color: black;

}

.slide-container{
  max-width: 1120px;
  width: 100%;
  padding: 150px 0;
}

.swiper-navBtn{
  color: #fff;
  transition: color 0.3s ease;
  margin: 10px;
  padding: 160px;

}
  .card-image .card-img{
  height: 150px;
  width: 150px;
  padding: 150;
}
    .Report h3{
  margin-bottom: 10px;
  background: #943b03;
  font-size: 3rem;
  width: 100%;
  padding-right: 1px;
  
}
  </style>
          <!-- REPORT AND ACOMPLISHMENT -->
      <section id="Report" class="Report">
    <h3>PALAWAN, MOVING FORWARD  </h3>  
          <h2>REPORT AND ACOMPLISHMENT</h2>
        <div class="Report-grid">
          <div class="Report-item" title="MIS">
                       <a href="MIS.php">
                        <img src="images/mis.jpg" alt="" /></a>
                          <h4>MIS</h4>
           
          </div>
          <div class="Report-item" title="Capacity & Development"> 
                       <a href="capacity.php">
                         <img src="images/capacity.jpg" alt="" /></a>
                           <h4>CAPACITY & DEVELOPMENT</h4>
          
          </div>
          <div class="Report-item" title="FINANCE & ADMINISTRATIVE">
            <a href="FINANCE & ADMINISTRATIVE.php">
            <img src="images/fiance.jpg" alt="" /></a>
            <h4>FINANCE & ADMINISTRATIVE</h3>
           
          </div>
        </div>
      </section>
             <!--OTHER PROGRAM--> 
      <section id="OTHER" class="OTHER">
        <h2>
          OTHER PROGRAM</h2>
        <div class="OTHER-grid">
          <div class="OTHER-item" title="BGY. LGRC">
          <a href="BGY_LGRC.php">
            <img src="images/BGYLGR.jpg" alt="" /></a>
            <h3>BGY. LGRC</h3>

          </div>
          <div class="OTHER-item" title="ISO">
            <a href="ISO.php">
            <img src="images/ISO.jpg" alt="" /></a>
            <h3>ISO</h3>
          
          </div>
          <div class="OTHER-item" title="Special Program">
            <a href="SPECIAL_PROGRAM.php">
            <img src="images/SPECIAL.png" alt="" /></a>
            <h3>SPECIAL PROGRAM</h3>
           
          </div>
        </div>
      </section>
      <!--CALENDAR OF ACTIVITIES-->
    <div class="OTHER">
      <div class="OTHER-text" >CALENDAR OF ACTIVITIES</div>
      <iframe src="https://calendar.google.com/calendar/embed?height
      =500&wkst
      =1&ctz=Asia%2FManila&showPrint=0&showTitle=0&showTz=0&src=YjM4Yzg1ZjgwMjY5YjVlMDM3YjcyNDViYTMyMDc1YTgwOTI3Nzc2MWYwYWZhNzRkZGFiMzViZTg4MTAyOWMyMEBncm91cC5jYWxlbmRhci5nb29nbGUuY29t&color=%23009688" 
      style="border:solid 1px #777" width="900" height="500" frameborder="0" scrolling="no"></iframe>
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
  
    <!-- Swiper JS -->
    <script src="js/swiper-bundle.min.js"></script>
    <!-- JavaScript -->
    <script src="js/script.js"></script>
</html>

<?php }else{
	header("Location: index.php");
} ?>