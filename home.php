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
   <title>Home</title>

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
            
            <li><a href="https://geoportal.landportal.org/?map=655da17db15f8d0019192546">View Parcels <i class="fas fa-paper-plane"></i></a></li>
             <li><a href="#">More<i class="fas fa-angle-null"></i></a>
               <ul>
                  <li><a href="services.php">Other Services</a></i></li>
                  <li><a href="about.html">About us</a></i></li>
                  <li><a href="contact.html">Contact us</a></i></li>
                  <li><a href="faq.html">FAQ</a></i></li>
               </ul>
            </li>
         </li>
         <li><a href="#">My Account<i class="fas fa-user"></i> </a>
            <ul>
            
            <?php
        // Check if the user is logged in and if the user_name key is set
        if (isset($_SESSION['user_name'])) {
            $user_name = $_SESSION['user_name'];
            echo '<li><a href="parcels.php">Saved Parcels</a></li>';
            echo '<li><a href="#">' . $user_name . '<i class="fas fa-user"></i></a></li>';
            echo '<li><a href="logout.php">Logout</a></li>';
        } else {
            // Display login link or handle accordingly
            echo '<li><a href="login.php">Login</a></li>';
        }
        ?>
    </ul>
</li>

            </ul>
           
         </li>
              
          
         
         </ul>
      </section>
   </nav>
</header>

<!-- header section ends -->

<!-- home section starts  -->
<div class="home">

    <section class="center">
      <form action="" method="post">
      <h3>KERICHO LAND REGISTRY PORTAL</h3>
      <div class="flex">
       <h4>'Empowering Property Ownership, One Click at a Time!'</h4>
     </div>
    </form>
</section>
</div>

<!-- home section ends -->

<!-- services section starts  -->

<section class="services">

   <h1 class="heading">Land Registration Services</h1>

   <div class="box-container">

      <div class="box">
         <img src="images/official land search.jpg" alt="">
         <h3>Searches</h3>
         <p>Conduct thorough land searches 
            to provide accurate and detailed information on land ownership, boundaries, and any encumbrances for decision-making.</p>
           <!-- <form action="doc.php" method="post" enctype="multipart/form-data">
               <input type="file" name="document" class="btn" required onchange="showUploadLink(this.value)">
               <input type="submit" value="Upload Form" name="send" class="btn">
           </form>-->
           
           
         </div>

      <div class="box">
         <img src="images/icon-2.png" alt="">
         <h3>Caution</h3>
         <p>Initiate and manage cautionary measures to alert potential buyers or interested 
            parties of pending or ongoing land transactions or disputes within the registry.</p>
            <!-- <form action="doc.php" method="post" enctype="multipart/form-data">
               <input type="file" name="document" class="btn" required onchange="showUploadLink(this.value)">
               <input type="submit" value="Upload Form" name="send" class="btn">
           </form>-->
         </div>

      <div class="box">
         <img src="images/ker-9.png" alt="">
         <h3>Transfer</h3>
         <p>Support the legal process of transferring land ownership, ensuring accurate documentation 
            and compliance with regulations.</p>
           <!-- <form action="doc.php" method="post" enctype="multipart/form-data">
               <input type="file" name="document" class="btn" required onchange="showUploadLink(this.value)">
               <input type="submit" value="Upload Form" name="send" class="btn">
           </form>-->
         </div>

      <div class="box">
         <img src="images/Title Deed.jpeg" alt="">
         <h3>Registration of Titles</h3>
         <p>Facilitate the legal process of registering land titles, and Title related services thus ensuring security and 
            authenticity while documenting ownership.</p>
            <!-- <form action="doc.php" method="post" enctype="multipart/form-data">
               <input type="file" name="document" class="btn" required onchange="showUploadLink(this.value)">
               <input type="submit" value="Upload Form" name="send" class="btn">
           </form>-->
         </div>

      <div class="box">
         <img src="images/title deed.jpg" alt="">
         <h3>Replacement of Titles</h3>
         <p>Assist in the issuance of new land titles or documents in case of loss, damage, 
            or other reasons necessitating the replacement of existing tites..</p>
            <!-- <form action="doc.php" method="post" enctype="multipart/form-data">
               <input type="file" name="document" class="btn" required onchange="showUploadLink(this.value)">
               <input type="submit" value="Upload Form" name="send" class="btn">
           </form>-->
         </div>

      <div class="box">
         <img src="images/icon-2.png" alt="">
         <h3>Lease</h3>
         <p>Manage and document land lease agreements, establishing the terms, conditions, 
            and rights involved in leasing property.</p>
            <!-- <form action="doc.php" method="post" enctype="multipart/form-data">
               <input type="file" name="document" class="btn" required onchange="showUploadLink(this.value)">
               <input type="submit" value="Upload Form" name="send" class="btn">
           </form>-->
         </div>
      <div class="box">
         <img src="images/icon-6.png" alt="">
         <h3>Restriction</h3>
         <p>Implement legal restrictions on land, serving to govern or limit specific actions or 
            changes concerning the property, as authorized by the Kericho Land Registry.</p>
            <!-- <form action="doc.php" method="post" enctype="multipart/form-data">
               <input type="file" name="document" class="btn" required onchange="showUploadLink(this.value)">
               <input type="submit" value="Upload Form" name="send" class="btn">
           </form>-->
         </div>
      <div class="box">
         <img src="images/stampduty.png" alt="">
         <h3>Stamp Duty</h3>
         <p>Provide the necessary certification and validation of documents 
            ensuring compliance with tax and duty payments essential for legal land transactions</p>
            <!-- <form action="doc.php" method="post" enctype="multipart/form-data">
               <input type="file" name="document" class="btn" required onchange="showUploadLink(this.value)">
               <input type="submit" value="Upload Form" name="send" class="btn">
           </form>-->
         </div>
      <div class="box">
         <img src="images/ker-7.png" alt="">
         <h3>Charge</h3>
         <p>Oversee and formalize legal charges against properties, 
            securing financial obligations, mortgages, or other liabilities against land.</p>
            <!-- <form action="doc.php" method="post" enctype="multipart/form-data">
               <input type="file" name="document" class="btn" required onchange="showUploadLink(this.value)">
               <input type="submit" value="Upload Form" name="send" class="btn">
           </form>-->
         </div>

   </div>

</section>


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
</html>>
