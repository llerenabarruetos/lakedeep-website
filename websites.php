<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="shortcut icon" href="images/LakeDeepIcon.png" type="image/x-icon"/>
        <title>The LakeDeep Company | Websites</title>
        <link rel="stylesheet" href="bootstrap-4.1.3-dist/css/bootstrap.min.css">
        <link rel = "stylesheet" href = "styles/index.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
        <script src="https://use.fontawesome.com/releases/v5.5.0/js/all.js"></script>
        </head>
        <body>
            <div>
                <!--- Header Start -->
                    <?php require "includes/header.php"?>
                <!--- End Header -->

                <!--- Start Landing Banner -->
                <div class="landing">
                    <div class="home-wrap">
                        <div class="home-inner ourWebsitesBanner">
                                
                        </div>
                    </div>
                </div>

                <div class="text-center ourWebsitesTitle">
                    <h1>Our Websites & Services</h1>
                </div>
                <!--- End Landing Banner -->

                <!--- Start About Banner -->
                <div id="AboutCard" class="col-12 narrow text-center aboutCard gamesIntroContainer">
                    <h1>What We Offer</h1>
                    <p class="lead">To help connect people, practice our web development abilities, and aid others with their web presence, here are the websites we've made and the services we offer.</p>
                </div>
                <!--- End About Banner -->

                </br style="border: white">
                <div class="text-center gamesContainer">
                    <div class="row">
                        <div class="col-sm gamebg websitebg-Lifescoin">
                            <div class="names appName">LifesCoin</div>
                            <img class="appLogo" src="images/LCLogo.png">
                            <img class="gamePic" src="images/LifesCoin.png">
                            <p class="introParagraph">Create/join groups, create your profile, and post to earn coins. Posts last 24 hours and are ranked using their coin number to keep the best, new content at the top. Join now to connect with friends and seize the spotlight!</p>
                            <a class="btn btn-dark btn-lg" href="http://www.lifescoin.com/" target="_blank">Join</a>
                        </div>
                        <div class="col-sm gamebg" style="background: black">
                            <div class="names appName">LakeDevs</div>
                            <img class="gamePic" src="images/LakeDevs.png">
                            <p class="introParagraph">Have a need for a website? Contact us to make your professional website today! Text/email us for a quote.</p>
                            <strong class="boldSubHeadings">Text:</strong>
                            <p class="introParagraph">(561) - 410 - 4532</p>
                            <a class="btn btn-dark btn-lg" href="https://www.lakedevs.com/" target="_blank">Join</a>
                        </div>
                    </div>
                </div>

                <!--- Start Footer -->
                <?php require "includes/footer.php"?>
                <!--- End Footer -->
                
            </div>
</body>
<script>
    var headerCurrentBtn = document.getElementById("websitesBtn");
    headerCurrentBtn.classList.add("active");

    var contentBegin = document.getElementById("AboutCard").offsetTop;
    var headerContainer = document.getElementById("headerContainer");
    window.onscroll = function() {
        if (window.pageYOffset > (contentBegin/2)) {
            var opacity = (window.pageYOffset / contentBegin)-0.15;       
            headerContainer.style.background = "rgba(17, 17, 17, " + opacity + ")";
        }
        else {
            headerContainer.style.background = "rgba(17, 17, 17, 0)";
        }
    }
</script>
</html>