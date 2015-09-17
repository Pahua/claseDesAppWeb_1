<?php 
    $person1 = $_GET["person1"];
    $person2 = $_GET["person2"];
    $animal = $_GET["animal"];
    $exclamation = $_GET["exclamation"];
    $verb = $_GET["verb"];
    $noun = $_GET["noun"];
?>

<!DOCTYPE HTML>
<html class="no-js" lang="">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>Welcome! | Pahua's MadLibs </title>
        <meta name="description" content="Mad Libs" author="Paulina Cruz y Corro Pérez">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/bootstrap-theme.min.css">
        <link rel="stylesheet" href="css/main.css">
       <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">

    </head>


    <body data-spy="scroll" data-target="#scrollspy">



        <nav id="scrollspy" class="navbar navbar-default navbar-fixed-top navbar-inverse">
        <div class="container">
          <!-- Brand and toggle get grouped for better mobile display -->
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-navbar-collapse" aria-expanded="false">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">Pahua's MadLibs</a>
          </div>

          <div class="collapse navbar-collapse" id="bs-navbar-collapse">
              <!--SCROLLSPY -->
            <ul class="nav navbar-nav">
              <li><a href="#Jumbotron">Welcome!</a></li>
              <li><a href="#MainContainer"> What is Mad Libs?</a></li>
              <li><a href="#LittlePractice">Practice</a></li>
              <li><a href="#Reviews">Reviews</a></li>
               <li><a href="#Contributors">Top Contributors</a></li>
            </ul>
            <!--SCROLLSPY -->
            <ul class="nav navbar-nav navbar-right">
              <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Menu <span class="caret"></span></a>
                <ul class="dropdown-menu">
                  <li><a href="#Jumbotron">Welcome!</a></li>
                  <li><a href="#MainContainer"> What is Mad Libs?</a></li>
                  <li><a href="#LittlePractice">Practice</a></li>
                  <li><a href="#Reviews">Reviews</a></li>
                  <li><a href="#Contributors">Top Contributors</a></li>
                  <li role="separator" class="divider"></li>
                  <li><a href="http://www.madlibs.com/">Official Mad Libs Webpage</a></li>
                </ul>
              </li>
            </ul>
          </div>
        </div>
      </nav>

    <h1>A fantastical adventure</h1>
    <p>One day, <?php echo $person1 ?> and <?php echo $person2 ?> were walking through the woods, when suddenly a giant <?php echo $animal ?> appeared. </p>
    <p>"<?php echo $exclamation ?>", <?php echo $person1 ?> cried. </p>
    <p>The two of them <?php echo $verb ?> as quickly possible, and when they were safe, <?php echo $person1 ?> and <?php echo $person2 ?> gave each other a giant <?php echo $noun ?>.</p>




   <div class="container" id="footer">
          <hr>
              <div class="text-center center-block">
                  <br />
                    <a href="https://twitter.com/Pahua"><i id="social-tw" class="fa fa-twitter-square fa-3x social"></i></a>
                    <a href="https://plus.google.com/u/0/114477624237480563130"><i id="social-gp" class="fa fa-google-plus-square fa-3x social"></i></a>
                    <a href="mailto:pahua13@gmail.com"><i id="social-em" class="fa fa-envelope-square fa-3x social"></i></a>
                    <p class="txt-railway">-  Copyright &copy; PAULINA CRUZ Y CORRO PÉREZ 2015 -</p>
              </div>
       </div>

        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.11.2.min.js"><\/script>')</script>

        <script src="js/vendor/bootstrap.min.js"></script>
        <script src="js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>


         <script type="text/javascript" src="http://cdnjs.cloudflare.com/ajax/libs/jquery.bootstrapvalidator/0.5.3/js/bootstrapValidator.min.js"> </script>


        <script src="js/main.js"></script>


    </body>
</html>