<!doctype html>
<html lang="FR">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet"  href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/star_rating/css/star-rating.css" media="all" rel="stylesheet" type="text/css"/>
    <link rel="stylesheet" type="text/css" href="css/notation_style.css">
    <title>Notation</title>
</head>
<body>

<!-- <form role="search" id="form" method="post" action="#"> </form> -->
    <!-- Div affichant le tableau une fois le button cliqué -->

    <div id="affichage_notation" class="col-xs-4">
        <div id="date" name="date"></div>
        <div id="garage" name="garage"></div>
        <div id="libelle" name="libelle"></div>

        <TEXTAREA id="champ_de_text" name="champ_de_text" class="form-control" rows="5" placeholder="Commentaire sur la prestation..."></TEXTAREA>
        <input id="star" class="rating" min="0" max="5" step="0.5" data-size="sm" data-symbol="&#xf005;" data-glyphicon="false" data-rating-class="rating-fa">
        <button type="button" id="validation" class="btn btn-success">Valider</button>
    </div>


        <input type="text" id="client" name="client" placeholder="Client">
        <input type="submit" id="submit" class="btn btn-success">

    <span id="text_latlng"></span>

<script src="//code.jquery.com/jquery-1.11.3.min.js"></script>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script src="assets/star_rating/js/star-rating.js" type="text/javascript"></script>
<script src="js/notation_js.js" type="text/javascript"></script>

</body>
</html>