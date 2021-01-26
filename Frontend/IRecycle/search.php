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
                        <li><a href="" class="Contact">Category</a></li>
                        <li><a href="" class="About">About</a></li>
                        <li><a href="search.php" class="Search">Search</a></li>
                        <li><a href="login.html" class="Login">Login</a></li>
                    </ul>
                </nav>
            </div>
 
 <div>
 <form action="searchResults.php" method="POST">
  <input type="text" name="search" placeholder = "Search">
  <button type="submit" name="submit-search">Search</button>
</form>
</div>


<div class="article-container">

</div>
</body>
</html>


