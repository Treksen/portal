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
   <title>Other Services</title>

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

<!-- Services section starts  -->

<section class="services">

   <h1 class="heading">Departmental Services</h1>

   <div class="box-container">

      <div class="box" id="survey">
         
         <div class="thumb">
            <div class="admin">
            </form>
            <img src="images 2/surv.jpg" alt="">
         </div>
         </div>
         <h3 class="name">Survey and Mapping Services</h3>
         <p class="location"><i class="fas fa-map-marker-alt"></i><span>Huduma Centre, Kericho - 3rd Floor</span></p>
         
         <a href="other.php" class="btn">Get Services Now</a>
      </div>

      <div class="box" id="admin">
       
         <div class="thumb">
            
            <img src="images 2/Land Admin.png" alt="">
         </div>
         <h3 class="name">Land Administration Services</h3>
         <p class="location"><i class="fas fa-map-marker-alt"></i><span>Huduma Centre, Kericho - 2nd Floor</span></p>
        
         <a href="other.php" class="btn">Get Services Now</a>
      </div>

      <div class="box" id="valuation">
        
         <div class="thumb">
            
            <img src="images 2/val.jpg" alt="">
         </div>
         <h3 class="name">Land Valuation Services</h3>
         <p class="location"><i class="fas fa-map-marker-alt"></i><span>Huduma Centre, Kericho - 2nd Floor</span></p>
      
         <a href="other.php" class="btn">Get Services Now</a>
      </div>

      <div class="box" id="nlc">
         
         <div class="thumb">
            
            <img src="images 2/NLC.jpg" alt="">
         </div>
         <h3 class="name">National Land Commission Services</h3>
         <p class="location"><i class="fas fa-map-marker-alt"></i><span>Huduma Centre, Kericho - 3rd Floor</span></p>
         
         <a href="other.php" class="btn">Get Services Now</a>
      </div>

      <div class="box" id="adj">
         
         
         <div class="thumb">
           
            <img src="images 2/Adjudi.jpg" alt="">
         </div>
         <h3 class="name">Adjudication and Settlement Services</h3>
         <p class="location"><i class="fas fa-map-marker-alt"></i><span>Huduma Centre, Kericho - 3rd Floor</span></p>
         
         <a href="other.php" class="btn">Get Services Now</a>
      </div>

      <div class="box" id="plan">
         
         <div class="thumb">
            
            <img src="images 2/plan.png" alt="">
         </div>
         <h3 class="name">Land Physical Planning Services</h3>
         <p class="location"><i class="fas fa-map-marker-alt"></i><span>Huduma Centre, Kericho - 3rd Floor</span></p>
        
         <a href="other.php" class="btn">Get Services Now</a>
      </div>
      
   </div>

</section>

<!-- services section ends -->





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

   <div class="credit">&copy; copyright@2023 | Collins K. Towett | <span>Treks Entertainment</span> | All rights reserved!</div>

</footer>

<!-- footer section ends -->


<!-- custom js file link  -->
<script src="js/script.js"></script>

</body>
</html>