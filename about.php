<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="shortcut icon" href="images/LakeDeepIcon.png" type="image/x-icon"/>
        <title>The LakeDeep Company | About</title>
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
                        <div class="home-inner aboutBanner">
                                
                        </div>
                    </div>
                </div>
                <!--- End Landing Banner -->

                <!--- Start About Banner -->
                <div id="AboutCard" class="col-12 narrow text-center aboutCard aboutUsContainer">
                    <h1>About Us</h1>
                    <p class="lead">LakeDeep LLC is a video game publisher and website creator that works towards making exciting, impactful, and overall fun applications of the highest grade possible to us.</p>
                    <p class="lead">We are two college undergraduates looking to build products that connect people.</p>
                </div>
                <!--- End About Banner -->

                <div class="text-center introductionsContainer">
                    <h1>The Team</h1>
                    <div class="row">
                        <div class="col-sm">
                            <div class="names">Danny Silvestre</div>
                            <img class="profilePic" src="images/DankyProfile.png">
                            <p class="introParagraph">I am a college student, 21 years old from FAU. I am currently a junior studying Computer Engineering and Computer Science. I enjoy creating RPG style video games, playing them, and working out in the gym.</p>
                            <a href="mailto: goodjobpepe@gmail.com" target="_blank" title="goodjobpepe@gmail.com">
                                <i class="fas fa-envelope-square mailLogo"></i>
                            </a>
                        </div>
                        <div class="col-sm">
                            <div class="names">Sebastian Llerena</div>
                            <img class="profilePic" src="images/OatsProfile.png">
                            <p class="introParagraph">I am a college undergraduate at the University of Florida on my third year studying Computer Science. I like outdoor running, working on old-school games (both 2D and 3D), and creating music by playing guitar.</p>
                            <a href="https://www.sebastianllerena.com/" target="_blank" title="Personal Website">
                                <i class="fas fa-user mailLogo" style="margin-right: 2rem;"></i>
                            </a>
                            <a href="mailto: shebasquine@gmail.com" target="_blank" title="shebasquine@gmail.com">
                                <i class="fas fa-envelope-square mailLogo"></i>
                            </a>
                        </div>
                    </div>
                </div>

                <!--- Start Footer -->
                <?php require "includes/footer.php"?>
                <!--- End Footer -->
                
            </div>
</body>
<script>
    var headerCurrentBtn = document.getElementById("aboutBtn");
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