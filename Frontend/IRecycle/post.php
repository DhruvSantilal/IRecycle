<?php
include 'sendEmail.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="./style.css" />
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@500&family=Lobster+Two:ital,wght@1,700&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/7523a45f05.js" crossorigin="anonymous"></script>
    <title>IRecycle</title>
</head>
<body>
    <main>
        <div class="container">
        <?php
                include 'nav.php';
                ?>
     
            <section class="post-section">
                <form id="formPost" method="GET">
                <h1>Post an ad</h1>
                <div class="category">
                    <h1>Category</h1>
                    
                    <input class="category-input" type="text" id="category" placeholder="Car, Books, etc" name="fullname" >
                    <div id="error-category"></div>
                </div>
                <div class="location">
                    <h1>Location</h1>
                    <input class="location-input" type="text" id="location" placeholder="Postcode HA0 5TW" name="fullname" >
                    <div id="error-location"></div>
                </div>
                <div class="post-title">
                    <h1>Ad title</h1>
                    <input class="post-title-input" type="text" id="postTitle" placeholder="Gcse books" name="fullname" >
                    <div id="error-post-title"></div>
                </div>
                <div class="post-image">
                    <h1>Image</h1>
                    <input class="post-image-input" type="file" name="fileToUpload" id="postImage">
                    <div id="error-post-image"></div>
                </div>
                <div class="ad-description">
                    <h1>Description</h1>
                    <input class="ad-description-input" type="text" id="adDescription" placeholder="addition information" name="fullname" >
                    <div id="error-ad-description"></div>
                </div>

                <button class="post-button" type="submit">Post Ad</button>
            </form>
               
            </section>

            <?php
                include 'footer.php';
                ?>
        </main>


    <script
    src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.5.1/gsap.min.js"
    integrity="sha512-IQLehpLoVS4fNzl7IfH8Iowfm5+RiMGtHykgZJl9AWMgqx0AmJ6cRWcB+GaGVtIsnC4voMfm8f2vwtY+6oPjpQ=="
    crossorigin="anonymous"
      ></script>
      <!-- uses the gsap animation library -->
      <script defer src="app.js"></script>
      <!-- links the file to js to create animations -->
  
    
</body>

</html>