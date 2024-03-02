<!-- This page is the about us page that provides information about the tompkins, a couple photos, navbar at the top, and a form for feedback and questions that will be connected to a database-->
<!DOCTYPE html>
<html>
    <head>
        <meta charset = "utf-8">
        <Title> About the Tompkins</Title>
        <!-- links to about us css sheet and bootstrap-->
        <link rel = "stylesheet" type = "text/css" href = "aboutTompStyle.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    </head>
    <body>
      <!--navbar to navigate between pages-->
      <section class ="navbar">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
              <ul class="navbar-nav">
                <li class="nav-item active">
                        <a class="nav-link" href="index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="brand.php">About the brand</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="AboutTompkins.php">About us<span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="https://form.jotform.com/231178469964067">Schedule an appointment</a>
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
        </section>
        <section class="headerhere">
          <header class="flexbox"><h1>About Us</h1></header>
        </section>
        <!-- header with information provided to us, more information coming for this about page and the about brand page-->
        <section class = "tompkinsabout">
          <div class="container">
            <div class="col-md-6">
            <p>Erica has over 10 years e experience as a personal trainer. Erica was an active athlete in childhood, and had the opportunity to be a collegiate cross country runner scholar athlete. 
              Erica has an undergrad in Kinesiology, and a masters in Psychology, where she is going to take her licensing exam this year. Erica has been an associate therapist for 7 years. Erica is passionate about overall wellness. She is a working mother and a military spouse with two children.</p>
            </div>
            <div class ="col-md-6">
              <img src ="Erica.jpg" class="resize-image" id="image4" alt="about"></div>
          </div>
        </section>
        <div class="footer">
        
           <footer>
               <p>Copyright 2024.</p>
               <a href="contactform.php">Need to ask a question or provide feedback? Check out our feedback form.</a>
           </footer>
       
            </div>
    </body>
    </html>
    
