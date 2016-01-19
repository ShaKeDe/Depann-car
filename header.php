<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>

<header id="menu">
<div class="navbar navbar-inverse navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" <?php echo ($page == "Index" ? "active" : "")?>"<a href="http://127.0.0.1:3232/Depann'Car">Depann'Car</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
            <ul class="nav navbar-nav">
                <li class="<?php echo ($page == "Index" ? "active" : "")?>"><a href=http://127.0.0.1:3232/Depann'Car>Accueil</a></li>
                <li class="<?php echo ($page == "Inscription" ? "active" : "")?>"><a href="http://127.0.0.1:3232/Depann'Car/Inscription.php">Inscription</a></li>
                <li class="<?php echo ($page == "Connexion" ? "active" : "")?>"><a href="http://127.0.0.1:3232/Depann'Car/Connexion.php">Connexion</a></li>
                <li class="<?php echo ($page == "Profil" ? "active" : "")?>"><a href="http://127.0.0.1:3232/Depann'Car/Profil.php">Profil</a></li>
                <li class="<?php echo ($page == "Contact" ? "active" : "")?>"><a href="http://127.0.0.1:3232/Depann'Car/Contact.php">Contact</a></li>
            </ul>
        </div><!--/.nav-collapse -->
    </div>
</div>
</header>
