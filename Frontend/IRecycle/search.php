<?php
include_once 'dbcon.php';
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



<div class="navbar">
                <nav>
                    <h1 id="logo">IRecycle</h1>
                    <ul class="nav-links">
                        <li><a href="index.html" class="Home">Home</a></li>
                        <li><a href="results.html" class="Contact">Category</a></li>
                        <li><a href="about.html" class="About">About</a></li>
                        <li><a href="search.php" class="Search">Search</a></li>
                        <li><a href="login.html" class="login">Login</a></li>
                    </ul>
                </nav>
            </div>


<div class="search-box-wrapper">
<form action="searchResults.php" method="POST">
<input type="text" class="search-box-input" name="search" placeholder = "Search..."><!--
--><button class="search-box-button" type="submit" name="submit-search">&#128269;</button>
</form>
</div>







<footer class="footer">
                <div class="help">
                    <div class="left-help">
                        <div class="adress">
                            <i class="far fa-address-card"></i>
                            <h1>Adress</h1>
                            <p>100 imaginaery <br>
                                special avenue <br>
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
                            <p>imaginaery@linkedin.com</p>
                        </div>
                    </div>
                    <div class="right-help">
                        <h1>How can we help?</h1>
                        
                        <label class="fullname-label" for="fullname">Full name</label>
                        <input class="fullname-input" type="text" id="fullname" name="fullname" ><br>
                        
                        
                        <label class="email-label" for="email">Email</label>
                        <input class="email-input" type="text" id="email" name="email" ><br><br>
                        
                        

                        <input class="empty" type="text" id="empty" name="empty" placeholder="Additional description"><br>

                        <button class="button" type="button">Send</button>
                    </div>
                    
                </div>
                <h1 class="copyright">Copyright © by IRecycle</h1>
            </footer>
</body>
</html>


