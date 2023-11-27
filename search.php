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
   <title>Search Page</title>

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

    <style>
        
        .home {
           display: flex;
           align-items: center;
           justify-content: center;
           height: 100vh;
       }

       .center {
           text-align: center;
           color: #fff;
           justify-content: center;
           font-size: 1.7rem;
       }
       .form-container {
           background: rgba(1, 0, 0, 0);
       }
       
       .box {
            width: 50%;
            padding: 3px;
            margin-bottom: 3px;
            border: none;
            border-radius: 5px;
            box-sizing: border-box;
        }
       

       .btn {
           background-color: #4CAF50;
           color: var(--white);
           padding: 10px;
           border: none;
           border-radius: 5px;
           cursor: pointer;
       }
       .search-results { 
         width: 400px;
         background: rgba(1, 0, 0, 0);
        /* Add a semi-transparent background to improve text readability */
         padding: 5px;
         border-radius: 5px;
         margin-top: 20px; /* Adjust the spacing from the top */
      }
     
      .search-results ul {
        margin-bottom: 5px;
        background: rgba(1, 0, 0, 0.5);
        color: var(--white);
        padding: 1px;
        border: none;
        border-radius: 5px;
      }

      .search-results li {
         margin-bottom: 10px;
         background-color:var(--white);
         color: #303030;
           padding: 10px;
           border: none;
           border-radius: 5px;
           text-align: left;
         list-style-type: none;
           
      }
      .search-results .btn {
           background-color: #4CAF50;
           color: var(--white);
           padding: 10px;
           border: none;
           border-radius: 5px;
           cursor: pointer;
       }
      .search-results h4 {
         color: #fff;
           border: none;
           font-size: 2.7rem;
      }
      .search-results p {
         background-color: #fff;
           border: none;
           font-size: 2.7rem;
           padding: 10px;
      }
      .search-results .no-list-style {
        list-style-type: none;
        margin: 0;
        padding: 0;

      }
      .search-results strong {
           color: #303030;
           border: none;
           font-size: 1.7rem;
           
      }
      .search-results button{
           background-color: #af8f0c;
           color: var(--white);
           padding: 10px;
           border: none;
           border-radius: 5px;
           cursor: pointer;
      }
       </style>
</head>
<body>

<div class="home" id="sch">
        <section class="center">
        <div class="form-container">
            <form action="" method="post">

           <?php
                // Check if the form is submitted
                if ($_SERVER["REQUEST_METHOD"] == "POST") {
                    // Retrieve the search term from the form
                    $parcelNumber = isset($_POST["pid"]) ? $_POST["pid"] : '';


                    // Perform the database query (replace with your actual database connection code)
                    $servername = "localhost";
                    $username = "root";
                    $password = "";
                    $dbname = "data_db";
                    // Create connection
                    $conn = new mysqli($servername, $username, $password, $dbname);

                    // Check connection
                    if ($conn->connect_error) {
                        die("Connection failed: " . $conn->connect_error);
                    }

                    // Perform the search query (replace 'column_name' with the actual column name in your table)
                    $sql = "SELECT * FROM p_data2 WHERE pid = '$parcelNumber'";
                    $result = $conn->query($sql);

                    // Display search results
                    if ($result->num_rows > 0) {
                        $row = $result->fetch_assoc();
                        echo '<div class="search-results">';
                        echo '<h4>RESULTS</h4>';
                        echo '<ul>';
                        echo '<li><strong>Parcel Number:</strong> ' . $row["pid"] . '</li>';
                        echo '<li><strong>Owner Name:</strong> ' . $row["owner_name"] . '</li>';
                        echo '<li><strong>National ID:</strong> ' . $row["owner_id"] . '</li>';
                        echo '<li><strong>KRA Pin Number:</strong> ' . $row["kra_pin"] . '</li>';
                        echo '<li><strong>Area in Acres:</strong> ' . $row["area(acres)"] . '</li>';
                        echo '<li><strong>Area in Hectares:</strong> ' . $row["area(ha)"] . '</li>';
                        echo '<li><strong>Date of Registration:</strong> ' . $row["date_reg"] . '</li>';
                        echo '<li><strong>Landuse:</strong> ' . $row["landuse"] . '</li>';
                        echo '<li><strong>Land Tenure:</strong> ' . $row["tenure"] . '</li>';
                        echo '</ul>'; // Add other fields as needed
                        echo '<form method="post" action="search.php">';
                        echo '<input type="submit" value="OK" name="ok-button" class="btn">';
                        echo '</form>';
                     echo '</div>';
                     }
                     else if (isset($_POST["ok-button"])) {
                        // "OK" button is clicked, display the search form
                        echo '<form action="" method="post">';
                        echo '<h4>Land Parcel Search</h4>';
                        echo '<input type="pid" name="pid" required maxlength="50" placeholder="Enter Parcel Number number" class="box">';
                        echo '<input type="submit" value="Search now" name="submit" class="btn">';
                        echo '</form>';
                     }
                     else{
                        echo '<div class="search-results">';
                        echo '<h4>RESULTS</h4>';
                        echo '<ul>';
                        echo '<p>No results for Parcel Number: ' . $parcelNumber . '</p>' ;
                        echo '</ul>'; // Add other fields as needed
                        echo '<form method="post" action="search.php">';
                        echo '<input type="submit" value="OK" name="ok-button" class="btn">';
                        echo '</form>';
                        echo '</div>';
                    }
                    

                    // Close the database connection
                    $conn->close();
                }
            
             else{
                echo '<form action="" method="post">';
                echo '<h4>Land Parcel Search</h4>';
                echo '<input type="pid" name="pid" required maxlength="50" placeholder="Enter Parcel Number number" class="box">';
                echo '<input type="submit" value="Search now" name="submit" class="btn">';
                echo '</form>';
                
             }
                ?>
   
          </form>
          </div>
        </section>
    </div>
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
         <!--<a href="services.php"><span>All services</span></a>-->
        
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
<script>
      document.addEventListener('DOMContentLoaded', function () {
         // Get the search results container
         var searchResultsContainer = document.querySelector('.search-results');

         // Check if the search results container exists
         if (searchResultsContainer) {
            // Display the search results container if search results exist
            searchResultsContainer.style.display = 'block';

            // Add a listener to the OK button
            var okButton = document.querySelector('.button');
            if (okButton) {
               okButton.addEventListener('click', function () {
                  // Navigate back to the search page when OK is clicked
                  window.location.href = 'srch.php'; // Change 'search.php' to your actual search page URL
               });
            }
         }
      });
   </script>
</body>
</html>
