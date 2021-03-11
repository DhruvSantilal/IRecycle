<?php
include_once 'dbcon.php';
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
    <!-- fonts type needed for the texts -->
    <title>IRecycle</title>
    <script src="https://kit.fontawesome.com/7523a45f05.js" crossorigin="anonymous"></script>
    <!-- code required for the icons -->
</head>
<body>
    <main>
        <div class="container">
            <!-- contains the whole page -->
            
                <!-- container for navbar -->
                <?php
                include 'nav.php';
                ?>
          
            <section class="landing">
                <!-- main landing which will have big text -->
                
                <h2 class="big-text">IRecycle</h2>
                <h3 class="small-text">Recycle with ease</h3>
                <!-- <div class="search-bar">
                    <form action="searchResults.php" method="POST">
                    <input type="text" name="" class="results-input" placeholder="Search"/>
                    <div class="results-icon">
                    <a type="submit" name="submit-search" href="/"><i class="fas fa-search"></i></a>
                    </form>
                 </div>
                </div> -->
                <div class="search-bar">
                    <form action="searchResults.php" method="POST">
                    <input type="text" class="search-box-input" name="search" placeholder = "Search for item.." maxlength="50" required><!--
                    --><button class="search-box-button" type="submit" name="submit-search">&#128269;</button>
                    </form>
                </div>
            </section>
            
            <section class="frequent-section">
                <div class="frequently-added">
                    <h1 > Frequently added</h1>
                </div>
                 <!-- used for frequently used -->
                <div class="boxes">
                    <div class="box1" >
                        
                         <img class="box1-image" src="hero3.jpg" alt="">
                        
                        <div class="box1-title">
                            <h1>Gcse book</h1>
                        </div>
                        <div class="box1-description">
                            <h2 > Recycling made easy, sustainable, made with blah
                                blah blah dsad dsds dsds dsdsd sdsd.
                            </h2>
                        </div>
                        
                        <button class="box1-button">
                            More details
                        </button>
                        
                    </div>
                    
                    <div class="box2" >
                        
                        <img class="box2-image" src="hero3.jpg" alt="">
                        
                        <div class="box2-title">
                            <h1>Gcse book</h1>
                        </div>
                        <div class="box2-description">
                            <h2 > Recycling made easy, sustainable, made with blah
                                blah blah dsad dsds dsds dsdsd sdsd.
                            </h2>
                        </div>
                        
                        <button class="box2-button">
                            More details
                        </button>
                        
                    </div>
                    <div class="box3" >
                        
                            <img class="box3-image" src="hero3.jpg" alt="">
                        
                        <div class="box3-title">
                            <h1>Gcse book</h1>
                        </div>
                        <div class="box3-description">
                            <h2 > Recycling made easy, sustainable, made with blah
                                blah blah dsad dsds dsds dsdsd sdsd.
                            </h2>
                        </div>
                        
                        <button class="box3-button">
                            More details
                        </button>
                        
                    </div>
                    
                   <!-- picture for the item that is displayed -->
                        
                </div>
                
            </section>
            <!-- <div class="map">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d158857.7281078492!2d-0.2416804375114401!3d51.52877184053824!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47d8a00baf21de75%3A0x52963a5addd52a99!2sLondon!5e0!3m2!1sen!2suk!4v1613559247873!5m2!1sen!2suk" width="6000" height="550" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
            </div> -->
            <?php

include 'footer.php';
?>
            
        </main>
        <!-- <div class="intro">
            <div class="intro-text">
                <h1 class="hide">
                    <span class="text">Sustainable</span>
                </h1>
                <h1 class="hide">
                    <span class="text">Responsible</span>
                </h1>
                <h1 class="hide">
                    <span class="text">Recycle</span>
                </h1>
            </div>
        </div>
        <div class="slider"></div>
    
        
        </div> -->
        
    
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