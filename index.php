<!-- Version 2.1 | July 8, 2020-->
<!-- Website made by Sebastian L. and Danny S. -->
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="shortcut icon" href="images/LakeDeepIcon.png" type="image/x-icon"/>
        <title>The LakeDeep Company | We Make Apps</title>
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
                        <div class="home-inner">
                                
                        </div>
                    </div>
                </div>

                <div class="caption text-center">
                    <h1>This is LakeDeep</h1>
                    <h3>Two College Programmers Making Games</h3>
                    <a class="btn btn-outline-light btn-lg" href="http://www.lakedeep.org/games">Our Games</a>
                </div>
                <!--- End Landing Banner -->

                <!--- Start About Banner -->
                <div id="AboutCard" class="col-12 narrow text-center aboutCard">
                    <h1>We Make Games</h1>
                    <p class="lead">...And websites, and social medias. Two college students working to make something fun, enjoyable, and social.</p>
                    <a class="btn btn-secondary btn-md" href="http://www.lakedeep.org/about">About Us</a>
                </div>
                <!--- End About Banner -->

                <!--- Start Latest Release -->
                <a href="https://lakedeep.itch.io/duck-wars-friday-the-duckteenth" target="_blank" class="col-12 narrow text-center latestReleaseBanner">
                    <h1>Our Latest Release:</h1>
                </a>
                <!--- End Latest Release -->

                <!--- Start Footer -->
                <?php require "includes/footer.php"?>
                <!--- End Footer -->
                
            </div>
</body>
<script>
    var headerHomeBtn = document.getElementById("homeBtn");
    headerHomeBtn.classList.add("active");

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