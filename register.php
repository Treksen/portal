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
      $c_password = $_POST['c_password'];
		

		if(!empty($user_name) && !empty($password) && !empty($c_password)  && !empty($nid) && is_numeric($nid) && !is_numeric($user_name))
		{

			//save to database
			$user_id = random_num(20);
			$query = "insert into users (user_id,user_name,nid,password,c_password) values ('$user_id','$user_name','$nid','$password','$c_password')";

			mysqli_query($con, $query);

			header("Location: login.php");
			die;
		}else
		{
			echo "Please enter some valid information!";
		}
	}
?>
<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Register</title>

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

<!-- header section ends -->
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
         color: #13e7dd;
          font-size: 2.7rem;
          padding-top: 1rem;
         }
        .form-container {
            background: rgba(1, 0, 0, 0.5); /* Add a semi-transparent background to improve text readability */
            padding: 5px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.5);
            width: 500px;
            margin-top: 20px; /* Adjust the spacing from the top */
            
        }
        .filters form #close-filter{
          text-align: right;
          padding-bottom: 2rem;
          display: flex;
          background: rgba(1, 0, 0, 0.5);
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
            color: var(--white;)
            padding: 10px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
       
        .popup {
   position: absolute;
   top: 50%;
   left: 50%;
   transform: translate(-50%, -50%);
   background: #fff;
   width: 400px;
   text-align: center;
   padding: 0 30px 30px;
   color: #333;
}

.popup img {
   width: 100px;
   margin-top: 50px;
   padding: 20px;
   border-radius: 50%;
   box-shadow: 0 2px 5px rgba(0, 0, 0, 0.2) ;
}

.popup img {
   position: absolute;
   margin: 30px 0 10px;
   font-size: 38px;
   font-weight: 500;
}
   .popup button {
      width: 100px;
      margin-top: 50px;
      padding: 10px 0;
      font-size: 18px;
      background: #6fd649;
      color: #fff;
      border: 0;
      outline: none;
      border-radius: 4px;
      cursor: pointer;
      box-shadow: 0 5px 5px rgba(0, 0, 0, 0.2);
   }
     
         </style>
</head>
<body>

    <div class="home">
      
        <section class="center">
         
            <div class="form-container">
            <form action="" method="post">
       <h2>Create a New Account!</h2>
      <input type="text" name="user_name" required maxlength="50" placeholder="Enter your username" class="box">
      <input type="nid" name="nid" required maxlength="50" placeholder="Enter your National ID number" class="box">
      <input type="password" name="password" required maxlength="20" placeholder="Create New password" class="box">
      <input type="password" name="c_password" required maxlength="20" placeholder="Confirm New password" class="box">
      <input type="submit" value="Submit" name="submit" class="btn" onclick="openpopup()">

      <p><a href= "login.php">I have an account.</a></p>
      
       </form>
       
            </div>
        </section>
        
        
</div>

<!-- register section starts  -->

<!-- register section ends -->




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
         <a href="https://www.facebook.com/login/"><span>Facebook</span><i class="fab fa-facebook"></i></a>
         <a href="https://twitter.com/i/flow/login/"><span>Twitter</span><i class="fab fa-twitter"></i></a>
         <a href="https://lands.go.ke/"><span>Linkedin</span><i class="fab fa-linkedin"></i></a>
         <a href="https://www.instagram.com/accounts/login/"><span>Instagram</span><i class="fab fa-instagram"></i></a>

      </div>

   </section>

   <div class="credit">&copy; copyright@2023 | Collins K. Towett| <span>Treks Entertainment</span> | All rights reserved!</div>

</footer>

<!-- footer section ends -->


<!-- custom js file link  -->
<script src="js/script.js"></script>

</body>
</html>