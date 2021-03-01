<?php
include_once 'dbcon.php';
include 'sendEmail.php';
?>


<!DOCTYPE html>
<html>
<head>
  <title>Document</title>
  <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="./style.css" />
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@500&family=Lobster+Two:ital,wght@1,700&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
</head>
<body>

<?php
include 'nav.php';
?>

<div class="search-box-wrapper">
<form action="searchResults.php" method="POST">
<input type="text" class="search-box-input" name="search" placeholder = "Search..."><!--
--><button class="search-box-button" type="submit" name="submit-search">&#128269;</button>
</form>
</div>






<footer class="footer">
                <div class="help">
                    <div class="left-help">
                        <div class="address">
                            <i class="far fa-address-card"></i>
                            <h1>Address</h1>
                            <p>100 Placeholder Avenue <br>                           
                                RN9 10RB
                            </p>
                        </div>
                        <div class="phone">
                            <i class="fas fa-phone"></i>
                            <h1>Number</h1>
                            <p>0200 1212 1212</p>
                        </div>
                        <div class="email">
                            <i class="fas fa-envelope-square"></i>
                            <h1>Email</h1>
                            <p>irecycleldn@gmail.com</p>
                        </div>
                    </div>

                    <div class="right-help">
                      <form class="contact-form" action="" method="post">

                    <legend><h3>Contact Us</legend><br>


                      <label for="name">Name</label>   
                      <input type="text" name="name" maxlength="30" required><br>

                      <label for="email">E-mail</label> 
                      <input type="email" name="email" maxlength="75" required ><br>

                      <label for="subject">Subject</label> 
                      <input type="text" name="subject" maxlength="25" required><br>

                      <label for="message">Your message</label> 
                      <textarea name="message" maxlength="1000" placeholder = "Max length 1000" required></textarea><br>

                      <button type="submit" name= "submit">Send Mail</button>
                      </form>

                </div>
                <h1 class="copyright">Copyright © by IRecycle</h1>
            </footer>
</body>
</html>



