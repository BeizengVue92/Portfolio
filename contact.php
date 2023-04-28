<?php

$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];

$to = "bvportfoliowebsite@gmail.com";
$subject = "Mail From Portfolio Website";

$comment = "From: " . $name . "\r\n" . $message;


// mail($to,$subject,$comment);


$formOUt = <<<FORM
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Beizeng Vue's Portfolio</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <link href="css/style.css" rel="stylesheet">
</head>

<body>
  <!-- Top Navigation Menu -->
  <div class="topnav">
    <a href="#home" class="active">
      <h2>Beizeng Vue's Portfolio</h2>
    </a>
    <!-- Navigation links (hidden by default) -->
    <div id="myLinks">
      <a href="index.html">Home</a>
      <a href="projects.html">Projects</a>
      <a href="contact.html">Contact</a>
    </div>
    <!-- "Hamburger menu" / "Bar icon" to toggle the navigation links -->
    <a href="javascript:void(0);" class="icon" onclick="myFunction()">
      <i class="fa fa-bars"></i>
    </a>
  </div>


  <div class="container text-center">

    <div class="row">

      <div class="col">

      <h1>Error, page under construction. I apologize $name, please contact me at bvportfoliowebsite@gmail.com. Thank You!</h2>

      </div>

    </div>


  </div>



  <footer>
    <p>Copyright &copy; 2023 Beizeng Vue</p>
  </footer>
  <script src="js/jquery.js"></script>
  <script src="js/nav.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
    crossorigin="anonymous"></script>
</body>

</html>

FORM;

echo $formOUt;

?>