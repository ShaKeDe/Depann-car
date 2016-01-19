<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="Site web application projet technique STJO Boulogne sur mer, équipe Depann'Car. 2015" content="">
    <meta name="Depann'Car STJO content="">
    <link rel="icon" href="../../favicon.ico">

    <title>Starter Template for Bootstrap</title>

    <!-- Bootstrap core CSS -->
    <link href="bootstrap-3.3.6/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="style.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <link rel="stylesheet" href="https://code.jquery.com/ui/1.11.1/themes/ui-lightness/jquery-ui.css" />
    <script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
    <script src="http://code.jquery.com/ui/1.11.1/jquery-ui.min.js"></script>

</head>

<script>
    $('.carousel').carousel({
        interval: 3000
    })
</script>

<body>




<div class="container">

    <div class="starter-template">
        <?php include("header.php"); ?>


        <div id="myCarousel" class="carousel slide" data-interval="3000" data-ride="carousel">
            <!-- Carousel indicators -->
            <ol class="carousel-indicators">
                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                <li data-target="#myCarousel" data-slide-to="1"></li>
                <li data-target="#myCarousel" data-slide-to="2"></li>
            </ol>
            <!-- Carousel items -->
            <div class="carousel-inner">
                <div class="item active">
                    <img src="img/1.jpg" alt="First Slide">
                    <div class="carousel-caption">
                        <h3>First slide label</h3>
                        <p>Lorem ipsum dolor sit amet...</p>
                    </div>
                </div>
                <div class="item">
                    <img src="img/2.jpg" alt="Second Slide">
                    <div class="carousel-caption">
                        <h3>Second slide label</h3>
                        <p>Aliquam sit amet gravida nibh, facilisis...</p>
                    </div>
                </div>
                <div class="item">
                    <img src="img/3.jpg" alt="Third Slide">
                    <div class="carousel-caption">
                        <h3>Third slide label</h3>
                        <p>Praesent commodo cursus magna vel...</p>
                    </div>
                </div>
            </div>
            <!-- Carousel nav -->
            <a class="carousel-control left" href="#myCarousel" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left"></span>
            </a>
            <a class="carousel-control right" href="#myCarousel" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right"></span>
            </a>
        </div>








        <?php include("footer.php"); ?>
        <h1>Bienvenue sur le site Depann'Car</h1>
        <p class="lead">Depann'Car est la nouvelle solution pour vos réparation automobiles.</p>


</div><!-- /.container -->


<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<link rel="stylesheet" href="file://C:/Program Files (x86)/EasyPHP-DevServer-14.1VC11/data/localweb/Depann'car/bootstrap-3.3.6/dist/css/bootstrap.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
<link rel="stylesheet" href="file://C:/Program Files (x86)/EasyPHP-DevServer-14.1VC11/data/localweb/Depann'car/bootstrap-3.3.6/dist/js/bootstrap.js">


</body>
</html>