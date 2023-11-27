<?php 

session_start();

	include("connection.php");
	include("functions.php");


	if($_SERVER['REQUEST_METHOD'] == "POST")
	{
		//something was posted
		$user_name = $_POST['user_name'];
		$nid = $_POST['nid'];
		$password = $_POST['password'];
		

		if(!empty($user_name) && !empty($nid) && !empty($password) && is_numeric($nid) && !is_numeric($user_name))
		{

			//read from database
			$query = "select * from users where user_name = '$user_name' limit 1";
			$result = mysqli_query($con, $query);

			if($result)
			{
				if($result && mysqli_num_rows($result) > 0)
				{

					$user_data = mysqli_fetch_assoc($result);
					
					if($user_data['password'] === $password)
					{
                  $_SESSION['user_name'] = $user_data['user_name'];
                  // Optionally, you can set other user-related information in the session
                  $_SESSION['user_id'] = $user_data['user_id'];
						header("Location: home.php");
						die;
					}
				}
            
			}
      }
		else
		{
			echo "wrong username or password!";
		}
      
	}
  

	?>


<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Login</title>

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

             <li><a href="#">More<i class="fas fa-angle-null"></i></a>
               <ul>
                 
                  <li><a href="about.html">About us</a></i></li>
                  <li><a href="contact.html">Contact us</a></i></li>
                  <li><a href="faq.html">FAQ</a></i></li>
               </ul>
            </li>
         </li>
         <li><a href="#">Account <i class="fas fa-angle-null"></i></a>
            <ul>
               <li><a href="login.php">Login</a></li>
               <li><a href="register.php">Register</a></li>
            </ul>
           
         </li>
              
          
         
         </ul>
      </section>
   </nav>

</header>
</head>
<style>
        

        .home {
            display: flex;
            align-items: left;
            justify-content: center;
            height: 100vh;
        }

        .center {
            text-align: left;
            color: #13e7dd;
            justify-content: center;
            font-size: 1.7rem;
        }

       
        .home.center.form-container p{
         text color: var(--white);
          font-size: 2.7rem;
          padding-top: 1rem;
         }
        .form-container {
            background: rgba(0, 0, 0, 0.5); /* Add a semi-transparent background to improve text readability */
            padding: 10px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.5);
            width: 500px;
            margin-top: 20px; /* Adjust the spacing from the top */
        }

        .box {
            width: 100%;
            padding: 10px;
            margin-bottom: 10px;
            border: none;
            border-radius: 5px;
            box-sizing: border-box;
        }

        .btn {
            background-color: #4CAF50;
            color: var(--white;)
            padding: 10px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

      
     
         </style>
</head>
<body>

    <div class="home">
        <section class="center">
            <div class="form-container">
                <form action="" method="post">
                    <h2>Login!</h2>
                    <input type="text" name="user_name" required maxlength="50" placeholder="Enter your username" class="box">
                    <input type="nid" name="nid" required maxlength="50" placeholder="Enter your National ID number" class="box">
                    <input type="password" name="password" required maxlength="20" placeholder="Enter your password" class="box">            
                    <input type="submit" value="Login Now" name="submit" class="btn">
                </form>
            </div>
        </section>
    </div>


<!-- login section ends -->




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
