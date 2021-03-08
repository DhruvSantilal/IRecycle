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
            <section class="app">
                <!-- app -->
                <h1 class="title">IRecycle</h1>
                <h2 class="description">An application centered around recycling unwanted items around London</h2>
                
            </section>
            <!-- split up sections for different sdgs -->
            <div class="sdg-title"><img src="SDG.png"></div>
            <section class="sdg11">
                <!-- section for sdgs -->
                <img src="sdg11gif.gif">
                <!-- img tag -->
                <div class="text"><h1>Sustainable Cities and Communitites</h1>
                    <h2>Reduces urban waste</h2>
                   <h2>To make cities inclusive,safe, resilient and sustainable</h2>
                </div>
                    
                
            </section>
            <section class="sdg12">
                <div class="text">
                    <h1>Responsible Consumption and Production</h1>
                    <h2>Increases amount of items recycled <br>

                        Reduces amount of newly manufactured items <br>

                        Promotes a more sustainable use of natural resources
                    </h2>
                    <h2>Ensure sustainable consumption
                        and production patterns</h2>
                </div>
                <img src="sdg12gif.gif">
                <!-- img for the sdg -->
                    
                
            </section>
            <section class="sdg13">
                <img src="sdg13gif.gif">
                <div class="text"><h1>Climate Action</h1>
                    <h2>Reduces greenhouse gas emissions</h2>
                    <h2>Take urgent action to combat
                        climate change and its impacts
                        </h2>
                </div>
                    
                
            </section>
            <section class="scope">
                <h1>Scope</h1>
                  <div class="map-wrap">
                <iframe class ="map"src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d158857.7281078492!2d-0.2416804375114401!3d51.52877184053824!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47d8a00baf21de75%3A0x52963a5addd52a99!2sLondon!5e0!3m2!1sen!2suk!4v1613559247873!5m2!1sen!2suk" width="6000" height="550" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                    </div>
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