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





<?php

include 'footer.php';
?>


</body>


</html>



