<?php 
session_start();

	include("connection.php");
	include("functions.php");

	$user_data = check_login($con);

?>
<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Saved Parcels</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>
   
<!-- header section starts  -->

<header class="header">

   <nav class="navbar nav-1">
      <section class="flex">
         <a href="home.php" class="logo"><i class="fas fa-house"></i>Kericho Land Registry Portal</a>
         <ul>
            <li><a href="Home.php">Home<i class="fas fa-angle-null"></i></a></li>
            <li><a href="search.php">Search<i class="fas fa-angle-null"></i></a></li>
            <li><a href="#">Resources<i class="fas fa-angle-null"></i></a>
            <ul>
               <li><a href="forms.php">LRA Forms</a></li>
               <li><a href="cla.php">CLA Forms</a></li>
               <li><a href="sect.php">Sectional Property Forms</a></li>
             </ul>
            </li>
            
            <li><a href="https://geoportal.landportal.org/?map=655da17db15f8d0019192546">View Parcels </a></li>
             <li><a href="#">More<i class="fas fa-angle-null"></i></a>
               <ul>
                  <li><a href="services.php">Other Services</a></i></li>
                  <li><a href="about.html">About us</a></i></li>
                  <li><a href="contact.html">Contact us</a></i></li>
                  <li><a href="faq.html">FAQ</a></i></li>
               </ul>
            </li>
         </li>
         <li><a href="#">My Account <i class="fas fa-angle-null"></i></a>
			 <ul>
				 <li><a href="parcels.php">Saved Parcels</a></li>
				 <li><a href="logout.php">logout</a></li>
             </ul>
                                         
          </li>
              
          
         
         </ul>
      </section>
   </nav>

</header>

<!-- header section ends -->

<!-- parcels section starts  -->

<section class="parcels">

   <div class="details">
      <div class="thumb">
         <div class="big-image">
            <img src="images/ker-7.PNG" alt="">
         </div>
         <div class="small-images">
            <img src="images 2/ker-1.jpeg" alt="">
            <img src="images 2/ker-2.jpeg" alt="">
            <img src="images 2/ker-3.jpeg" alt="">
            <img src="images 2/ker-4.jpeg" alt="">
         </div>
      </div>
      <h3 class="name">Parcel Number 128</h3>
      <p class="location"><i class="fas fa-map-marker-alt"></i><span>Block 2, Kericho Municipality, Kenya - 400104</span></p>
      <div class="info">
         <p><i class="fas fa-tag"></i><span>Plot no: 128</span></p>
         <p><i class="fas fa-user"></i><span>Owner - Raphael Letyo</span></p>
         <p><i class="fas fa-phone"></i><a href="tel:+254723790846">0723 790 846</a></p>
         <p><i class="fas fa-house"></i><span>Tenure: Leasehold</span></p>
         <p><i class="fas fa-calendar"></i><span>10-11-2012</span></p>
      </div>
      <h3 class="title">Details</h3>
      <div class="flex">
         <div class="box">
            <p><i>Area:</i><span>0.450 Hectares</span></p>
            <p><i>Title Deed:</i><span>Issued</span></p>
            <p><i>Date of Issue:</i><span>06/04/2014</span></p>
            <p><i>Encumbrances:</i><span>None</span></p>
            <p><i>Landuse:</i><span>Residential</span></p>
         </div>
        
      </div>
      <h3 class="title">Amenities</h3>
      <!--<div class="flex">
         <div class="box">
            <p><i class="fas fa-check"></i><span>Lifts</span></p>
            <p><i class="fas fa-check"></i><span>Security guards</span></p>
            <p><i class="fas fa-times"></i><span>Play ground</span></p>
            <p><i class="fas fa-check"></i><span>Gardens</span></p>
            <p><i class="fas fa-check"></i><span>Water supply</span></p>
            <p><i class="fas fa-check"></i><span>power backup</span></p>
         </div>
         <div class="box">
            <p><i class="fas fa-check"></i><span>parking area</span></p>
            <p><i class="fas fa-times"></i><span>gym</span></p>
            <p><i class="fas fa-check"></i><span>shopping mall</span></p>
            <p><i class="fas fa-check"></i><span>hospital</span></p>
            <p><i class="fas fa-check"></i><span>schools</span></p>
            <p><i class="fas fa-check"></i><span>market area</span></p>
         </div>
      </div>-->
      <h3 class="title">Description</h3>
      <p class="description">The details provided above are for the parcel indicated by the Plot number Respectively.</p>
      <form action="" method="post">
         <input type="submit" value="save property" name="save" class="inline-btn">
      </form>
   </div>

</section>

<!-- parcels section ends -->












<!-- footer section starts  -->

<footer class="footer">

   <section class="flex">

      <div class="box">
         <a href="tel:0723790846"><i class="fas fa-phone"></i><span>0723 790 846</span></a>
         <a href="tel:0750630368"><i class="fas fa-phone"></i><span>0750 630 368</span></a>
         <a href="mailto:colltreks3@gmail.com"><i class="fas fa-envelope"></i><span>colltreks3@gmail.com</span></a>
         <a href="https://maps.app.goo.gl/h52BbXRSdXWFZvSr7"><i class="fas fa-map-marker-alt"></i><span>Huduma Centre, Kericho - 2nd Floor</span></a>
      </div>

      <div class="box">
         <a href="home.php"><span>Home</span></a>
         <a href="about.php"><span>About</span></a>
         <a href="contact.php"><span>Contact</span></a>
         <!--<a href="services.php"><span>all services</span></a>-->
        
      </div>

      <div class="box">
         <a href="https://www.facebook.com/login/"><span>Facebook</span><i class="fab fa-facebook-f"></i></a>
         <a href="https://twitter.com/i/flow/login/"><span>Twitter</span><i class="fab fa-twitter"></i></a>
         <a href="https://lands.go.ke/"><span>Linkedin</span><i class="fab fa-linkedin"></i></a>
         <a href="https://www.instagram.com/accounts/login/"><span>Instagram</span><i class="fab fa-instagram"></i></a>

      </div>

   </section>

   <div class="Credits">&copy; copyright@2023 | Collins K. Towett | <span>Treks Entertainment</span> | All rights reserved!</div>

</footer>

<!-- footer section ends -->


<!-- custom js file link  -->
<script src="js/script.js"></script>

</body>
</html>