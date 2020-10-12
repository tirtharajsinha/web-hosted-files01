

<?php
$insert = false;
if(isset($_POST['name'])){
    // Set connection variables
    $server = "localhost";
    $username = "root";
    $password = "";

    // Create a database connection
    $con = mysqli_connect($server, $username, $password);

    // Check for connection success
    if(!$con){
        die("connection to this database failed due to" . mysqli_connect_error());
    }
    // echo "Success connecting to the db";

    // Collect post variables
    $name=$_POST["name"];
    $email=$_POST["email"];
    $phone=$_POST["phone"];
    $feedback=$_POST["feedback"];


    $sql="INSERT INTO  `databasse2`.`tab2` (`name`, `email`, `phone`, `feedback`, `dt`) VALUES ('$name', '$email', '$phone','$feedback' ,current_timestamp());";



    if($con->query($sql) == true){
         echo "Thank you for giving feedback";

        // Flag for successful insertion
        $insert = true;
    }
    else{
        echo "I am Sorry :server is now  under maintenance";
    }

    // Close the database connection
    $con->close();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>tsidealONEidentity_main_page_feedback_form</title>
    <link href="https://fonts.googleapis.com/css?family=Roboto|Sriracha&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <script src='https://kit.fontawesome.com/a076d05399.js'></script>
    <script src="index.js" type="text/javascript">


    </script>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
  <h1 class="about-set black"><b>visitors feedback form</b></h1>
  <p class="about-set black">.....Your are one step to go to make a good bonding.....</p><br><br><br>

<div class="my-form">
  <br><br><br><br><br>
  <div class=database>
  <form  action="contact01.php" method="post">
    <input type="text" name="name" id="name" placeholder="Enter your name:">
    <input type="email" name="email" id="email" placeholder="Enter your email Id:">
    <input type="phone" name="phone" id="phone" placeholder="Enter your phone:">
    <textarea id="feedback" name="feedback" placeholder="leave your comments on this sitefor a better representation"></textarea>
     <button class="btn">Submit</button>


  </form>


</div>
<p class="but-on opc"> <a href="main.html">back to home page</a> </p>
<p class="but-on opc"> <a href="index.html">back to index page</a> </p>
<br><br>
<div class="footer">

   <br><br>
    <p class="about-des1">This is a personal website run by Tirtharaj Sinha only for a self interest.
     While using this site,you agree to have read and accepted my <span class="ref-link">terms of use</span> and
     <span class="ref-link"> <a href="#">privacy policy</a> </span>. <span class="ref-link"> <a href="#">Copyright 1999-2020</a> </span> by Refsnes Data. All Rights Reserved.</p>
<br><br>
<div class="footer-icon">
  |<a href="https://github.com/tsidealONEidentity"><i class="fa fa-github"></i></a>
  <a href="https://www.instagram.com/tirtharaj_sinha/"><i class="fa fa-instagram"></i></a>
  <a href="https://twitter.com/sinha_tirtharaj"><i class="fa fa-twitter"></i></a>
  <a href="https://www.linkedin.com/in/tirtharaj-sinha-89a9541aa/"><i class="fa fa-linkedin"></i></a>
  <a href="mailto:tsidealoneidentity@gmail.com"><i class="fa fa-google"></i></a>|

</div>
<br><br>
<p class="about-des1 branding">@tsidealONEidentity powered by Tirtharaj Sinha</p>
<br>

</div>

</body>
</html>
