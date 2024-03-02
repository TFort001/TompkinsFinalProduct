<!DOCTYPE html>
<html>
   <head>
        <meta charset = "utf-8">
        <title>Tompkins of all Trades</title>
        <!--script for a java script attempt on this page. Saving for future development. CSS link and bootsrap-->
        <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
        <script src ="sliderCarousel.js"></script>
        <link rel ="stylesheet" type = "text/css" href ="sliderCarousel.css">
        <link rel = "stylesheet" type = "text/css" href = "indexStyle.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
   </head> 
   <body>
       <nav class="navbar navbar-expand-lg navbar-light bg-light">
           <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
               <span class="navbar-toggler-icon"></span>
           </button>
           <div class="collapse navbar-collapse" id="navbarNav">
               <ul class="navbar-nav">
                   <li class="nav-item active">
                        <a class="nav-link" href="index.php">Home<span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="brand.php">About the brand</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="AboutTompkins.php">About us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="SchedulingInfo.php">Schedule an appointment</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="Whatweoffer.php">Check out our services</a>
                    </li>
                    <li class ="nav-item">
                        <a class ="nav-link" href ="contactform.php">Contact Us</a>
                      </li>
               </ul>
           </div>
       </nav>
       <!--more information coming for these sections-->
       <section class="part1">
           <div class="informhome">
               <header class="flexbox">
                    <h1>Tompkins of all Trades!</h1>
                </header><br/>
               <p class="flexbox"> Looking for physical fitness services? Our team at Tompkins of all Trades can provide you with the best fitness services</p>
           </div>
       </section>
       <section class="part2">
           <div id="slideshow">
           <div id="slideshowWindow">
                  <div class="slide">
                       <img alt="workin"  src="workin.jpg">
                       <div class = "slideText" id = "slide1">
                       <h1 class ="slideHeading">Plans to  get you happier and healthier</h1>
                       </div>
                   </div>
                   <div class ="slide">
                       <img alt="brand1"  src="Logo.jpg">
                       <div class = "slideText" id ="slide2">
                       <h1 class ="slideHeading">Our Brand</h1>
                       </div>
                   </div>
                   <div class="slide">
                       <img alt="water"  src="Tired.jpg">
                       <div class = "slideText" id = "slide3" >
                       <h1 class ="slideHeading">Put the work in</h1>
                       </div>
                   </div>
               </div>
           </div>
       </section> 
       <section class="welcome video" >
       <div class="col-md-12">
                    <video controls width="100%" height="350">
                        <source src="WelcomeVideo.mp4" type="video/mp4">
                        Your browser does not support the video tag.
                    </video>
                </div>
       </section>
       <section>
           <div class="container">
               <a href="brand.php">Find out more about the Brand</a>
               <p>Our brand is what defines us</p>
           </div>



           <div class="container">
               <a href="AboutTompkins.php">Find out more about us</a>
               <p>We want our customers to get to know us</p>
           </div>



           <div class="container">
               <a href="SchedulingInfo.php">Schedule an appointment with us</a>
               <p>This page is an aid to get scheduling started. We will contact you to figure out a time and day that works best</p>
               <p>Primary scheduling platform is on Instagram Jotform linked here</p>
           </div>



           <div class="container">
               <a href="Whatweoffer.php">Find out what personal training services we offer</a>
               <p>We offer 2 different plans of services as well as ideas for nutrion plans and workout regimens</p>
           </div>
           <div class=" container">
               <a href="contactform.php">Contact us with feedback or questions</a>
               <p>This form is for feedback and questions only.</p>
               <p>Please visit the scheduling page to get started planning our first session!</p>
           </div>
       </section>
       <section class="footer">
           <footer>
               <p>Copyright 2024.</p>
               <a href="contactform.php">Need to ask a question or provide feedback? Check out our feedback form.</a>
           </footer>
       </section>
   </body>

</html>
