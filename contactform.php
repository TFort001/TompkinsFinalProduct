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
                        <a class="nav-link" href="SchedulingInfo.php">Schedule an appointment</a>
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
        <p class="flexbox">Please use this page only for asking questions about services or feedback about Tompkins Fitness/ website use</p>
      <form action = "formConn.php" id="contactform"  method ="post">
     
          <label for ="name">Please enter your first and last name:</label>
          <input type ="text" id ="fullname" size ="50" maxlength="50" class="form-control">
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
    
 <script src="//cdnjs.cloudflare.com/ajax/libs/validate.js/0.13.1/validate.min.js"></script>
 <script>


     const constraints = {
         fullname: {
             presence: { allowEmpty: false }
         },
         contact: {
             presence: { allowEmpty: false },
             email: true
         },
         topic: {
             presence: { allowEmpty: false }
         },
         feedback: {
             presence: {allowEmpty: false}
         }
     };

     const form = document.getElementById('contactform');
     form.addEventListener('submit', function (event) {

         const formValues = {
             fullname: form.elements.fullname.value,
             contact: form.elements.contact.value,
             topic: form.elements.topic.value,
             feedback: form.elements.feedback.value
         };


         const errors = validate(formValues, constraints);
         if (errors) {
             event.preventDefault();
             const errorMessage = Object
                 .values(errors)
                 .map(function (fieldValues) {
                     return fieldValues.join(', ')
                 })
                 .join("\n");

             alert(errorMessage);
         }
     }, false);
 </script>
    
    <?php
  If(isset($_POST['submit'])){
 include("formConn.php");
  connForm();
  
  $fullname = $_POST['fullname'];
  $contact = $_POST['contact'];
  $topic = $_POST['topic'];
  $feedback = $_POST['feedback'];

  $sql = "INSERT INTO feedback(fullname,contact,topic,feedback)
            VALUES (?, ?, ?, ?)";

  $stmt = mysqli_stmt_init($conn);
  if (! mysqli_stmt_prepare($stmt, $sql)) {
    die(mysqli_error($conn));}
  mysqli_stmt_execute($stmt);
  echo "record saved.";

$errors = [];
$errorMessage = '';

if (!empty($_POST)) {
   $fullname = $_POST['fullname'];
  $contact = $_POST['contact'];
  $topic = $_POST['topic'];
  $feedback = $_POST['feedback'];

   if (empty($fullname)) {
       $errors[] = 'Name is empty';
   }
   if (empty($contact)) {
       $errors[] = 'Email is empty';
   } else if (!filter_var($contact, FILTER_VALIDATE_EMAIL)) {
       $errors[] = 'Email is invalid';
   }

   if (empty($topic)) {
       $errors[] = 'Topic not chosen';
   }
   if (empty($feedback)) {
       $errors[] = 'Feedback is empty';
   }
   if (empty($errors)) {
       $toEmail = 'trfort1@cougars.ccis.edu';
       $emailSubject = 'New email from your contact form';
       $headers = ['From' => $contact, 'Reply-To' => $contact, 'Content-type' => 'text/html; charset=utf-8'];
       $bodyParagraphs = ["Name: {$fullname}", "Email: {$contact}", "Topic:{$topic}","Feedback: ($feedback)"];
       $body = join(PHP_EOL, $bodyParagraphs);

       if (mail($toEmail, $emailSubject, $body, $headers)) {

           header('Location: thank-you.html');
       } else {
           $errorMessage = 'Oops, something went wrong. Please try again later';
       }

   } else {

       $allErrors = join('<br/>', $errors);
       $errorMessage = "<p style='color: red;'>{$allErrors}</p>";
   }
}

?>
    
    </body>
</html>



