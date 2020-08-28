<!DOCTYPE html>    <!-- guess.php -->
<html>
  <head>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

    <title>The Gambling Game</title>
  </head>
  <body>
  <div class="container inner">

<main class="px-3">
  <h1>Gambling Game</h1>
<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
   $randNum = rand(1, 99);
        $cashBet = $_POST['cashBet'];
        $cashUpdate = $_POST['cash'];
        if ($cashBet > $cashUpdate)
        {
            echo '<p>You bet more than what you currently have.</p>';
        }
        else{
   if (0 == $_POST["num"]) {
      echo "<p>You chose over 50!</p>";

      if ($randNum > 50 )
      {
          echo '<p>Correct!</p>';
          if($cashBet<10)
          {
              echo'<img src ="images/lowbetmeme.jpg">';
          }
          $cashUpdate = $cashUpdate + $cashBet;
      }
      else if ($randNum == 50 )
      {
          echo 'The number was 50, re roll. Nothing lost or gained.';
          
      }
      else {
        $cashUpdate = $cashUpdate - $cashBet ;
          echo '<p>Wrong!</p>
          <img src = "images/losememe.gif">';
      }
     
   }
   else {
      echo "<p>You chose Under 50!</p>";
      if ($randNum < 50 )
      {
          echo '<p>Correct!</p>';
          if($cashBet<10)
          {
              echo'<img src ="images/lowbetmeme.jpg">';
          }
          $cashUpdate = $cashUpdate + $cashBet;
      }
      else if ($randNum == 50 )
      {
          echo 'The number was 50, re roll. Nothing lost or gained.';
          
      }
      else {
        $cashUpdate = $cashUpdate - $cashBet ;
          echo '<p>Wrong!</p>
          <img src = "images/losememe.gif">';
      }
      

   }        
   echo '<p class = "randomNumber">The Number was '. $randNum .'!</p>';
}
}
else{
    $cashUpdate = 1000;
}
?>

<?php
if ($cashUpdate >0){
echo"
<h3 class = 'lead'>Current Cash: $cashUpdate</h3>";
?>





<p class="lead">

  <a href="index.php" class="btn btn-lg btn-secondary font-weight-bold border-white bg-white">Reset</a>

</p>


  <form method="post" action="GamblingGame.php">
    <p>Bet an amount on whether the number will be (1-49) or (51-99). If you roll 50 re-roll. See how much you can win.</p>
    <p>Your guess? <select name = "num">
    <option value="0">Over 50</option>
    <option value="1">Under 50</option>
    </select>
    <p>
    <label for = "cashBet">Bet Cash:</label>
    <input type = "number" name = "cashBet">
    </p>
    <?php
    echo '
    <input type = "hidden" name = "cash" value = "'.$cashUpdate.'">
    ';
    ?>
    <input type="submit" value="Guess">
  </form>
  <?php
}
else{
    echo '<h1>YOU LOST </h1>
    <img src = "images/completelose.jpg">';
    echo '<a href = "index.php" style = "background-color:lightgreen;border:2px solid gold; width:50px;">TRY AGAIN </a>';
}
?>
</div>
</main>
</body>
<style>
                  /*
 * Globals
 */

/* Links */
a,
a:focus,
a:hover {
  color: #fff;
}

/* Custom default button */
.btn-default,
.btn-default:hover,
.btn-default:focus {
  color: #333;
  text-shadow: none; /* Prevent inheritence from `body` */
  background-color: #fff;
  border: 1px solid #fff;
}


/*
 * Base structure
 */

html,
body {
  height: 100%;
  background-color: lightskyblue;
}
body {
  color: black;
  text-align: center;
  text-shadow: 0 1px 3px rgba(0,0,0,.5);
}

/* Extra markup and styles for table-esque vertical and horizontal centering */
.site-wrapper {
  display: table;
  width: 100%;
  height: 600px;
  background-color: #333;
  /*height: 100%; */
  /*min-height: 100%;*/
}
.site-wrapper-inner {
  display: table-cell;
  vertical-align: top;
}
.cover-container {
  margin-right: auto;
  margin-left: auto;
}

/* Padding for spacing */
.inner {
  padding: 30px;
}


/*
 * Header
 */
.masthead-brand {
  margin-top: 10px;
  margin-bottom: 10px;
}

.masthead-nav > li {
  display: inline-block;
}
.masthead-nav > li + li {
  margin-left: 20px;
}
.masthead-nav > li > a {
  padding-right: 0;
  padding-left: 0;
  font-size: 16px;
  font-weight: bold;
  color: #fff; /* IE8 proofing */
  color: rgba(255,255,255,.75);
  border-bottom: 2px solid transparent;
}
.masthead-nav > li > a:hover,
.masthead-nav > li > a:focus {
  background-color: transparent;
  border-bottom-color: #a9a9a9;
  border-bottom-color: rgba(255,255,255,.25);
}
.masthead-nav > .active > a,
.masthead-nav > .active > a:hover,
.masthead-nav > .active > a:focus {
  color: #fff;
  border-bottom-color: #fff;
}

@media (min-width: 768px) {
  .masthead-brand {
    float: left;
  }
  .masthead-nav {
    float: right;
  }
}


/*
 * Cover
 */

.cover {
  padding: 0 20px;
}
.cover .btn-lg {
  padding: 10px 20px;
  font-weight: bold;
}

/*
 * Affix and center
 */

@media (min-width: 768px) {
  /* Pull out the header and footer */
  .masthead {
    position: fixed;
    top: 0;
  }
  /* Start the vertical centering */
  .site-wrapper-inner {
    vertical-align: middle;
  }

}
    
</style>
</html>
