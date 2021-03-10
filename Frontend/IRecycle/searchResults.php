<?php
include_once 'dbcon.php';
include 'sendEmail.php';
?>

<head>
  <title>".$queryResult." results!" "Found</title>
  <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="./style.css" />
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@500&family=Lobster+Two:ital,wght@1,700&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
</head>

<?php
include 'nav.php';
?>

<h1 class="big-text2">Results page</h1>

<div class="search-bar">
                    <form action="searchResults.php" method="POST">
                    <input type="text" class="search-box-input" name="search" placeholder = "Search for item.."><!--
                    --><button class="search-box-button" type="submit" name="submit-search">&#128269;</button>
                    </form>
                </div>

<div class="article-container">
<?php
    if(isset($_POST['submit-search'])){
        $search = mysqli_real_escape_string($conn, $_POST['search']);
        $sql = "SELECT * FROM listing WHERE description LIKE '%$search%' OR title LIKE '%$search%'";
        $result = mysqli_query($conn, $sql);
        $queryResult = mysqli_num_rows($result);

        echo "There are ".$queryResult." results!";


        if($queryResult > 0){
            while ($row = mysqli_fetch_assoc($result)){
                echo "<div class='article-box'>
                <h3>".$row['title']."</h3>
                <h3>".$row['description']."</h3>
                
                
                </div>"; 
            }
        } else {
            echo "No results found";
        }
    }
?>



</div>

<?php

include 'footer.php';
?>