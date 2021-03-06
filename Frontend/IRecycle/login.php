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
    <title>Slide Animation</title>
</head>
<body>
    <main>
            
        <section class="landing">
        <?php
                include 'nav.php';
                ?>
            <!-- <h2 class="big-text">IRecycle</h2>  -->
            <!-- < <div class="bottom-text">
                <h3 class="sustainable">Sustainable</h3>
                <h3 class="responsible">Responsible</h3>
                <h3 class="climate-action">Climate Action</h3>
            </div>  -->
            
        </section>
        
    </main>
    <form class="contact-form" action="" method="post">
    <div class="username">
    <label for="uname"><b>Username</b></label>
    <input type="text" placeholder="Enter Username" name="uname" maxlength="25" required>
</div>
<div class="password">
    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="psw" maxlength="25" required>
</div>
<div class="submit">
    <button type="submit">Login</button>
    <label>
      <input type="checkbox" checked="checked" name="remember"> Remember me
    </label>
</div>
</form>
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
    <div class="slider"></div> -->

    <!-- <div class="search">
        <input type="text" name="" class="search" placeholder="Search"/>
        <a class="search-btn"><i class="search-i"></i></a>
     
    </div> -->
    <?php
                include 'footer.php';
                ?>
    <script
      src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.5.1/gsap.min.js"
      integrity="sha512-IQLehpLoVS4fNzl7IfH8Iowfm5+RiMGtHykgZJl9AWMgqx0AmJ6cRWcB+GaGVtIsnC4voMfm8f2vwtY+6oPjpQ=="
      crossorigin="anonymous"
    ></script>
    <script src="app.js"></script>

</body>

</html>