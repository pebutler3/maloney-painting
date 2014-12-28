<?php
 
if(isset($_POST['email'])) {
 
     
 
    // EDIT THE 2 LINES BELOW AS REQUIRED
 
    $email_to = "greg@303sitemedics.com";
 
    $email_subject = "Maloney Painting Contact Form";
 
     
 
     
 
    function died($error) {
 
        // your error code can go here
 
        echo "We are very sorry, but there were error(s) found with the form you submitted. ";
 
        echo "These errors appear below.<br /><br />";
 
        echo $error."<br /><br />";
 
        echo "Please go back and fix these errors.<br /><br />";
 
        die();
 
    }
 
     
 
    // validation expected data exists
 
    if(!isset($_POST['name']) ||
 
        !isset($_POST['telephone']) ||
 
        !isset($_POST['email']) ||
 
        !isset($_POST['city']) ||
				
        !isset($_POST['comments'])) {
 
        died('We are sorry, but there appears to be a problem with the form you submitted.');       
 
    }
 
     
 
    $name = $_POST['name']; // required
 
    $telephone = $_POST['telephone']; // required
 
    $email_from = $_POST['email']; // required
 
    $city = $_POST['city']; // not required
		
		$comments = $_POST['comments']; // required
 
     
 
    $error_message = "";
 
    $email_exp = '/^[A-Za-z0-9._%-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/';
 
 
  if(strlen($error_message) > 0) {
 
    died($error_message);
 
  }
 
    $email_message = "Form details below.\n\n";
 
     
 
    function clean_string($string) {
 
      $bad = array("content-type","bcc:","to:","cc:","href");
 
      return str_replace($bad,"",$string);
 
    }
 
     
 
    $email_message .= "Name: ".clean_string($name)."\n";
 
    $email_message .= "Phone: ".clean_string($telephone)."\n";
 
    $email_message .= "Email: ".clean_string($email_from)."\n";

    $email_message .= "City: ".clean_string($city)."\n";

    $email_message .= "Comments: ".clean_string($comments)."\n";
 
     
 
     
 
// create email headers
 
$headers = 'From: '.$email_from."\r\n".
 
'Reply-To: '.$email_from."\r\n" .
 
'X-Mailer: PHP/' . phpversion();
 
@mail($email_to, $email_subject, $email_message, $headers);  
 
?>
 
 
 
 
<!doctype html>
<html class="no-js" lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Contact Maloney Painting & Decorating</title>
	  <link rel="stylesheet" href="css/app.css" />
    <script src="bower_components/modernizr/modernizr.js"></script>
   <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
</head>
<body>

<!--Start Top-bar Navigation-->
<div class="fixed shadow">
<div class="contain-to-grid">
<nav class="top-bar" data-topbar>
<ul class="title-area">
<!-- Title Area -->
<li class="name">
<h1><a href="index.html"></a></h1>
</li>
<li class="toggle-topbar menu-icon"><a href="index.html"><span>menu</span></a></li>
</ul>

<section class="top-bar-section">
<ul class="left">
 <li><a href="index.html">HOME</a></li>
 <li><a href="about.html">ABOUT</a>
 <li><a href="services.html">SERVICES</a></li>
 <li><a href="contact.html">CONTACT US</a></li>
</ul>
<ul class="right">
<li><a href="index.html">Denver, Colorado</a></li>
</ul>

</section>
</nav>
</div>
</div>
<!--End Navigation--> 

<div class="row">
<div class="large-12 columns">
<img class="logo" src="assets/logo/maloneyPainting.svg" alt="Maloney Painting Logo">
</div>
</div>

<div class="panel">
<div class="row">
<div class="large-12 columns">
  <h1>Thank you for contacting Maloney Painting & Decorating!</h1>
  <br>
  <h3>A representative will be contacting you shortly.</h3>
</div>
</div>
</div>

<footer>
<div class="row">
<div class="small-12 medium-6 large-6 columns">
<a href="#"><i class="fa fa-facebook fa-2x"></i></a>
<a href="#"><i class="fa fa-twitter fa-2x"></i></a>
<a href="#"><i class="fa fa-google-plus fa-2x"></i></a>
</div>

<div class="small-12 medium-6 large-6 columns">
<ul class="inline-list right">
<li><a href="index.html">Home</a></li>
<li><a href="about.html">About</a></li>
<li><a href="services.html">Services</a></li>
<li><a href="contact.html">Contact Us</a></li>
</ul>
</div>
</div>

<div class="row">
<div class="small-12 medium-6 large-6 columns">
<p>Maloney Painting | 2014 | All Rights Reserved</p>
</div>
<div class="small-12 medium-6 large-6 columns">
<p class="right"><small><strong>Powered By:</strong><a href="http://pebutler3.com"> P.E. Butler III</a></small></p>
</div>
</div>

<div class="row">
<div class="small-12 columns">
<p class="sitemap" ><small><a href="sitemap.html">Sitemap</a></small></p>
</div>
</div>

</footer>

<!-- scripts -->
<script src="bower_components/jquery/dist/jquery.min.js"></script>
<script src="bower_components/foundation/js/foundation.min.js"></script>
<script src="js/app.js"></script>
</body>
</html>
 
<?php
 
}
 
?>
