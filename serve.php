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
   <title>Our Services</title>

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

   <h1 class="heading">Our Services</h1>

   <div class="box-container">

      <div class="box" id="searches"> 
          <div>
            
               <h3>Land Parcel Searches</h3>
               <h3>Requirements</h3>
                 <p>Plot Number: :No. 204</p>
                 <p>National ID:3641**27</p>               
                 <p>KRA Pin:A01463***863R</p>  
                 <h3>Documents to Upload:</h3>
                 <p>1. A scanned copy of National ID</p>
                 <p>2. A scanned Copy of KRA Pin</p>
          </div>
         <div class="thumb">
             
             <img src="images/official land search.jpg" alt="">
         </div>
         <h3 class="name">Search Results</h3>
          <p class="location"><p>Location = P. No. 204- Block 1 - </p>
             <p>Owner = Jason M. Maina</p>
             <p>Size in Ha. = 0.3823 Ha</p>
             <p>Title Deed Status  = Title issued</p>
             <p>Date of Issue = 14/07/2014</p>
         <!--</div>-->
         <a href="search.php" class="btn">Search Now</a>
     </div>
     

      <div class="box" id="t-reg">
         <div>
            <h3>Title Registration</h3>
            <h3>Requirements</h3>
              <p>Plot Number: :No. 204</p>
              <p>National ID:3641**27</p>               
              <p>KRA Pin:A01463***863R</p>  
              <h3>Documents to Upload:</h3>
              <p>1. A scanned copy of National ID</p>
              <p>2. A scanned Copy of KRA Pin</p>
       </div>
      <div class="thumb">
          
          <img src="images/Title Deed.jpg" alt="">
      </div>
      <h3 class="name">Search Results</h3>
       <p class="location"><p>Location = P. No. 204- Block 1 - </p>
          <p>Owner = Jason M. Maina</p>
          <p>Size in Ha. = 0.3823 Ha</p>
          <p>Title Deed Status  = Title issued</p>
          <p>Date of Issue = 14/07/2014</p>
      <!--</div>-->
      <a href="search.php" class="btn">Search Now</a>
      </div>

      <div class="box" id="t-rep">
         <div>
            <h3>Title Replacement</h3>
            <h3>Requirements</h3>
              <p>Plot Number: :No. 204</p>
              <p>National ID:3641**27</p>               
              <p>KRA Pin:A01463***863R</p>  
              <h3>Documents to Upload:</h3>
              <p>1. A scanned copy of National ID</p>
              <p>2. A scanned Copy of KRA Pin</p>
       </div>
      <div class="thumb">
          
          <img src="images/Title Deed.jpg" alt="">
      </div>
      <h3 class="name">Search Results</h3>
       <p class="location"><p>Location = P. No. 204- Block 1 - </p>
          <p>Owner = Jason M. Maina</p>
          <p>Size in Ha. = 0.3823 Ha</p>
          <p>Title Deed Status  = Title issued</p>
          <p>Date of Issue = 14/07/2014</p>
      <!--</div>-->
      <a href="search.php" class="btn">Search Now</a>
      </div>

      <div class="box" id="lease">
         <div>
            <h3>Leases</h3>
            <h3>Requirements</h3>
              <p>Plot Number: :No. 204</p>
              <p>National ID:3641**27</p>               
              <p>KRA Pin:A01463***863R</p>  
              <h3>Documents to Upload:</h3>
              <p>1. A scanned copy of National ID</p>
              <p>2. A scanned Copy of KRA Pin</p>
       </div>
      <div class="thumb">
          
          <img src="images/house-img-1.webp" alt="">
      </div>
      <h3 class="name">Search Results</h3>
       <p class="location"><p>Location = P. No. 204- Block 1 - </p>
          <p>Owner = Jason M. Maina</p>
          <p>Size in Ha. = 0.3823 Ha</p>
          <p>Title Deed Status  = Title issued</p>
          <p>Date of Issue = 14/07/2014</p>
      <!--</div>-->
      <a href="search.php" class="btn">Search Now</a>
      </div>

      <div class="box" id="charges">
         <div>
            <h3>Charges</h3>
            <h3>Requirements</h3>
              <p>Plot Number: :No. 204</p>
              <p>National ID:3641**27</p>               
              <p>KRA Pin:A01463***863R</p>  
              <h3>Documents to Upload:</h3>
              <p>1. A scanned copy of National ID</p>
              <p>2. A scanned Copy of KRA Pin</p>
       </div>
      <div class="thumb">
          
          <img src="images/house-img-1.webp" alt="">
      </div>
      <h3 class="name">Search Results</h3>
       <p class="location"><p>Location = P. No. 204- Block 1 - </p>
          <p>Owner = Jason M. Maina</p>
          <p>Size in Ha. = 0.3823 Ha</p>
          <p>Title Deed Status  = Title issued</p>
          <p>Date of Issue = 14/07/2014</p>
      <!--</div>-->
      <a href="search.php" class="btn">Search Now</a>
      </div>

      <div class="box" id="transfer">
         <div>
            <h3>Transfers</h3>
            <h3>Requirements</h3>
              <p>Plot Number: :No. 204</p>
              <p>National ID:3641**27</p>               
              <p>KRA Pin:A01463***863R</p>  
              <h3>Documents to Upload:</h3>
              <p>1. A scanned copy of National ID</p>
              <p>2. A scanned Copy of KRA Pin</p>
       </div>
      <div class="thumb">
          
          <img src="images/house-img-1.webp" alt="">
      </div>
      <h3 class="name">Search Results</h3>
       <p class="location"><p>Location = P. No. 204- Block 1 - </p>
          <p>Owner = Jason M. Maina</p>
          <p>Size in Ha. = 0.3823 Ha</p>
          <p>Title Deed Status  = Title issued</p>
          <p>Date of Issue = 14/07/2014</p>
      <!--</div>-->
      <a href="search.php" class="btn">Search Now</a>
      </div>
      <div class="box" id="caution">
         <div>
            <h3>Cautions</h3>
            <h3>Requirements</h3>
              <p>Plot Number: :No. 204</p>
              <p>National ID:3641**27</p>               
              <p>KRA Pin:A01463***863R</p>  
              <h3>Documents to Upload:</h3>
              <p>1. A scanned copy of National ID</p>
              <p>2. A scanned Copy of KRA Pin</p>
       </div>
      <div class="thumb">
          
          <img src="images/house-img-1.webp" alt="">
      </div>
      <h3 class="name">Search Results</h3>
       <p class="location"><p>Location = P. No. 204- Block 1 - </p>
          <p>Owner = Jason M. Maina</p>
          <p>Size in Ha. = 0.3823 Ha</p>
          <p>Title Deed Status  = Title issued</p>
          <p>Date of Issue = 14/07/2014</p>
      <!--</div>-->
      <a href="search.php" class="btn">Search Now</a>
      </div>
      <div class="box" id="restriction">
         <div>
            <h3>Restrictions</h3>
            <h3>Requirements</h3>
              <p>Plot Number: :No. 204</p>
              <p>National ID:3641**27</p>               
              <p>KRA Pin:A01463***863R</p>  
              <h3>Documents to Upload:</h3>
              <p>1. A scanned copy of National ID</p>
              <p>2. A scanned Copy of KRA Pin</p>
       </div>
      <div class="thumb">
          
          <img src="images/house-img-1.webp" alt="">
      </div>
      <h3 class="name">Search Results</h3>
       <p class="location"><p>Location = P. No. 204- Block 1 - </p>
          <p>Owner = Jason M. Maina</p>
          <p>Size in Ha. = 0.3823 Ha</p>
          <p>Title Deed Status  = Title issued</p>
          <p>Date of Issue = 14/07/2014</p>
      <!--</div>-->
      <a href="search.php" class="btn">Search Now</a>
      </div>
      <div class="box" id="stamp">
         <div>
            <h3>Stamp Duty</h3>
            <h3>Requirements</h3>
              <p>Plot Number: :No. 204</p>
              <p>National ID:3641**27</p>               
              <p>KRA Pin:A01463***863R</p>  
              <h3>Documents to Upload:</h3>
              <p>1. A scanned copy of National ID</p>
              <p>2. A scanned Copy of KRA Pin</p>
       </div>
      <div class="thumb">
          
          <img src="images/stampduty.png" alt="">
      </div>
      <h3 class="name">Search Results</h3>
       <p class="location"><p>Location = P. No. 204- Block 1 - </p>
          <p>Owner = Jason M. Maina</p>
          <p>Size in Ha. = 0.3823 Ha</p>
          <p>Title Deed Status  = Title issued</p>
          <p>Date of Issue = 14/07/2014</p>
      <!--</div>-->
      <a href="search.php" class="btn">Search Now</a>
      </div>

   </div>

</section>

<!-- services section ends -->

<!-- FAQs section starts  -->

<section class="faq" id="faq">

   <h1 class="heading">FAQs</h1>

   <div class="box-container">

      <div class="box active">
         <h3><span>What is the importance of land registration?</span><i class="fas fa-angle-down"></i></h3>
         <p> Land registration is crucial as it provides legal evidence of ownership, protects property rights, 
            and establishes the authenticity of land titles. 
            It ensures security against disputes and enables smooth property transactions.</p>
      </div>

      <div class="box active">
         <h3><span>How long does the land registration process take?</span><i class="fas fa-angle-down"></i></h3>
         <p>The time for land registration varies based on factors like the complexity of the transaction and the efficiency of the registry. 
            Typically, it can take several weeks to a few months to complete the process.</p>
      </div>

      <div class="box">
         <h3><span>What documents are required for land registration?</span><i class="fas fa-angle-down"></i></h3>
         <p>The necessary documents often include the sale agreement, land title deed, identification documents of the buyer and seller, 
            land survey records, and any other pertinent legal documents. Requirements may vary by location.</p>
      </div>

      <div class="box">
         <h3><span>Can I verify the authenticity of a land title online?</span><i class="fas fa-angle-down"></i></h3>
         <p>Yes, in many cases, land registries offer online services where you can verify the authenticity of land titles. 
            This allows individuals to confirm ownership and details related to a particular property.</p>
      </div>

      <div class="box">
         <h3><span>What is a land title deed and why is it important?</span><i class="fas fa-angle-down"></i></h3>
         <p>A land title deed is a legal document that proves ownership of a specific piece of land. 
            It contains details about the property, such as its boundaries, size, and ownership history. 
            It is crucial as it serves as evidence of ownership.</p>
      </div>

      <div class="box">
         <h3><span>What are encumbrances on a property?</span><i class="fas fa-angle-down"></i></h3>
         <p>Encumbrances are legal claims or restrictions on a property, such as mortgages, liens, or easements. 
            They can impact land transactions by affecting the property's value, 
            limiting certain actions, or creating obligations for the owner.</p>
      </div>

   </div>

</section>

<!-- FAQs section ends -->




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