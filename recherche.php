<!DOCTYPE html>
<html lang="FR-fr">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="css/map_style.css">
    <link rel="stylesheet" type="text/css" href="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css" media="all" />
    <script src="http://ajax.aspnetcdn.com/ajax/jQuery/jquery-1.9.1.js" type="text/javascript"></script>
    <script src="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
    <script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.9.2/jquery-ui.min.js"></script>

    <link rel="stylesheet" type="text/css" href="assets/slider/css/slider.css" media="all" />
    <script src="assets/slider/js/bootstrap-slider.js"></script>

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>

    <link rel="stylesheet" type="text/css" href="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css" media="all" />

    <link rel="stylesheet" type="text/css" href="assets/slider/css/slider.css" media="all" />
    <title></title>

</head>
<section>
    <header>
<h1>dfsgfdsg</h1>
    </header>
<body onload="initialiserCarte()">

    <div class="row">
      <form class="navbar-form navbar-left col-lg-2" role="search" id="rechercheForm" method="post" action="#">
          <div class="form-group">
                <br/>
              <h3>Entrez votre adresse :</h3>
              <input type="text" id="adresse" placeholder="Adresse"/>
                <br/><br/>
              <input type="text" id="codepostal" placeholder="Code Postal"/>
                <br/><br/>
              <input type="text" id="ville" placeholder="Ville"/>
                <br/><br/>
              <input id="km" type="text" data-slider-min="0" data-slider-max="20" data-slider-step="1" data-slider-value="3"/&t
              <span id="SliderValLabel"> Km &cong; <span id="SliderVal">3</span></span>
              <br/><br/>
              <button type="submit" class="btn btn-default">Localiser sur Google Map</button>
          </div>
      </form>
        <div class="col-md-6">
            <div  id="map-canvas" ></div>
        </div>
        <div class="col-md-3">
            <div id="panel"></div>
        </div>
    <!-- <span id="text_latlng"></span> -->

    </div>



    <script type="text/javascript" src="http://maps.google.com/maps/api/js?language=fr"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
    <script src="https://code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
    <script src="//code.jquery.com/jquery-1.12.0.min.js"></script>
    <script src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
    <script src="js/map_js.js"></script>
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
    <script src="assets/slider/js/bootstrap-slider.js"></script>

</body>
    <footer>
<h2>dsfgdf</h2>
    </footer>
</section>
</html>