<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="shortcut icon" href="images/LakeDeepIcon.png" type="image/x-icon"/>
        <title>The LakeDeep Company | Games</title>
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
                        <div class="home-inner gamesBanner">
                                
                        </div>
                    </div>
                </div>
                <!--- End Landing Banner -->

                <!--- Start About Banner -->
                <div id="AboutCard" class="col-12 narrow text-center aboutCard gamesIntroContainer">
                    <h1>Our Games</h1>
                    <p class="lead">From games to play during your commute to complex, bottomless worlds, we are two independent game developers who want to make every second within our products worthwhile.</p>
                </div>
                <!--- End About Banner -->

                <div class="text-center gamesContainer">
                    <div class="row">
                        <div class="col-sm gamebg" style="background: rgb(255, 153, 0)">
                            <div class="names">Duck Wars - Friday The Duckteenth</div>
                            <img class="gamePic" src="images/Duckteenth.png">
                            <p class="introParagraph">On Halloween’s stormy night, the lake needs a hero. A flock of geese is set to invade it at midnight and only you can defeat them (through trick-or-treating)!</p>
                            <a class="btn btn-secondary btn-lg" href="https://lakedeep.itch.io/duck-wars-friday-the-duckteenth" target="_blank">Download</a>
                        </div>
                        <div class="col-sm gamebg" style="background: black">
                            <div class="names">Universe's Hardest Game</div>
                            <img class="gamePic" src="images/UHG.png">
                            <p class="introParagraph">Up for a challenge? Look no further - you won’t find a harder game anywhere in the universe. Avoid following enemy balls and make them fall down as they chase you.</p>
                            <a class="btn btn-secondary btn-lg" href="https://lakedeep.itch.io/the-universes-hardest-game" target="_blank">Download</a>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm gamebg" style="background: #D4AF37">
                            <div class="names">BlippyTown</div>
                            <img class="gamePic" src="images/Blippytown.png">
                            <p class="introParagraph">Help the last of the free humans guard the orbs, aid Blippy (the wizard alien), and save the Earth from the alien invasion playing as Helga or Napolyin in BlippyTown.</p>
                            <a class="btn btn-secondary btn-lg" href="https://lakedeep.itch.io/blippytown" target="_blank">Download</a>
                        </div>
                        <div class="col-sm gamebg" style="background: rgb(0, 180, 0)">
                            <div class="names">Duck Wars</div>
                            <img class="gamePic" src="images/DW.png">
                            <p class="introParagraph">A thrilling yet peaceful 1v1 battle where the ducks Danky & Oats fight for survival in the lake. Play with a friend on a retro lake with acoustic guitar music.</p>
                            <a class="btn btn-secondary btn-lg" href="https://lakedeep.itch.io/duck-wars" target="_blank">Download</a>
                        </div>
                    </div>
                      <div class="row">
                        <div class="col-sm gamebg" style="background: #D4AF37">
                            <div class="names">The Gambling Game</div>
                            <img class="gamePic" src="images/GamblingIMG.png">
                            <p class="introParagraph">Our First in browser game, see how much money you can make starting off with $1000.</p>
                            <a class="btn btn-secondary btn-lg" href="https://lakedeep.org/GamblingGame.php" target="_blank">Play in browser</a>
                        </div>
                        
                    </div>
                </div>

                <!--- Start Footer -->
                <?php require "includes/footer.php"?>
                <!--- End Footer -->
                
            </div>
</body>

<script>
    var headerCurrentBtn = document.getElementById("gamesBtn");
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