<!DOCTYPE html>
<html>
    <head>
        <meta charset = "utf-8">
        <Title> About the Tompkins Fitness Brand</Title>
        <!--links for css sheet and bootsrap-->
        <link rel = "stylesheet" type = "text/css" href = "formStyle.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    </head>
<body>
      <!--navbar-->
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
                        <a class ="nav-link" href ="contactform.php">Contact Us<span class="sr-only">(current)</span></a>
                      </li>
              </ul>
            </div>
          </nav>

    <div class = "container-fluid">
      <header class="flexbox">Give us feedback or ask questions</header>
        <p class="flexbox">Please use this page only for asking questions about services or feedback about Tompkins Fitness/ website use</p><br/>
      <form action="https://formsubmit.co/trfort1@cougars.ccis.edu" method="POST" >
     
          <label for ="name">Please enter your first and last name:</label>
          <input type ="text" id ="fullname" name = "fullname" size ="50" maxlength="50" class="form-control">
        <br/>
        
          <label for ="contact">Please enter a valid email address:</label>
          <input type ="text" id ="contact" name="contact" size ="50" maxlength="50" class="form-control">
        <br/>
        
          <label for ="topic">Select a relevent topic your post relates to:</label>
          <select class="form-control"id="topic"name="relevant">
            <option>Personal training services specifics</option>
            <option>Personal question for Tompkins</option>
            <option>feedback about the website</option>
            <option>other</option>
          </select>
        <br/>
        
          <label for ="feedback">Give Feedback or have any questions? Enter here:</label>
          <textarea id="feedback" name ="feedback" rows="6" columns="35"class="form-control"></textarea>
        </div><br/>
        <input type ="submit" value="Submit feedback" class="btn btn-primary">
        <input id ="clearButton" type ="reset" value ="Clear" class="btn btn-warning">
      </form>
    </div>
    </body>
</html>



