<?php
include_once 'dbcon.php';
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

<div class="navbar">
                <nav>
                    <h1 id="logo">IRecycle</h1>
                    <ul class="nav-links">
                        <li><a href="index.php" class="Home">Home</a></li>
                        <li><a href="" class="Contact">Category</a></li>
                        <li><a href="" class="About">About</a></li>
                        <li><a href="search.php" class="Contact">Search</a></li>
                        <li><a href="login.html" class="Login">Login</a></li>
                    </ul>
                </nav>
            </div>
<h1>Search page</h1>

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