<!DOCTYPE html>
<html>
    <head>
        <meta charset = "utf-8">
        <Title> About the Tompkins Fitness Brand</Title>
        <!--links for css sheet and bootsrap-->
        <link rel = "stylesheet" type = "text/css" href = "scheduleStyle.css">
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
                        <a class="nav-link" href="AboutTompkins.php">About us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="SchedulingInfo.php">Schedule an appointment<span class="sr-only">(current)</span></a>
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
    <section>
        <header>
            Help us find a time to schedule an appointment with each other!
        </header><br/>
        <h2>To schedule an appointment through our primary scheduler, click here to go to Instagram JotForm.</h2><br/>
        <p> The below form will ask for information regarding what services you want to choose, best days that work for you, and the time frames appointments would work for you!</p>
    </section>
    <section class ="formtime">
    <div class = "container-fluid">
      <h2>Give us feedback or ask questions</h2>
      <form action = "" id="scheduleform"method ="post">
        
          <label for ="sname">Please enter your first and last name:</label>
          <input type ="text" id ="schedfullname" name="sname" size ="50" maxlength="50" class="form-control">
        <br/>
        
          <label for ="semail">Please enter a valid email address:</label>
          <input type ="text" id ="schedContact" name="semail" size ="50" maxlength="50" class="form-control">
        <br/>
          <label for= "phone">Please enter a phone number we can contact to discuss further with you!</label>
          <input type="text" id="phone" name="phone" size="10" maxlength="10" class="form-control" ><br/>
        
          <label for ="topic">Select primary contact method</label>
          <select class="form-control"id="topic"name="pcontact">
            <option>Phone</option>
            <option>Email</option>
          </select>
        <br/>
          <label for="planservice">Select plan desired for fitness services</label>
          <select class="form-control"id="plan"name="planservice">
              <option>Basic</option>
              <option>Supreme</option>
              
          </select>
        
          <label for ="sfeedback">Please enter information regarding what days and times work to schedule appointment</label>
          <textarea id="feedback" name ="sfeedback" class="form-control"></textarea>
        </div><br/>
        <input type ="submit" value="Submit feedback" class="btn btn-primary">
        <input id ="clearButton" type ="reset" value ="Clear" class="btn btn-warning">
      </form>
        <?php
If(isset($_POST['submit'])){
 include("formConn.php");
  connForm();
  
  $sname = $_POST['sname'];
  $semail = $_POST['semail'];
  $phone = $_POST['phone'];
  $pcontact = $_POST['pcontact'];
  $planservice= $_POST['planservice'];
  $sfeedback = $_POST['sfeedback'];

  $sql = "INSERT INTO scheduleAid(sname,semail,phone,pcontact, planservice, sfeedback)
            VALUES (?, ?, ?, ?, ?)";

  $stmt = mysqli_stmt_init($conn);
  if (! mysqli_stmt_prepare($stmt, $sql)) {
    die(mysqli_error($conn));}
  mysqli_stmt_execute($stmt);
  echo "record saved.";?>
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

