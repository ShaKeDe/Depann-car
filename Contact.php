<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Contact</title>

    <!-- Bootstrap core CSS -->
    <link href="bootstrap-3.3.6/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="style.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>
<body>
<div class="container">

    <div class="starter-template">
        <?php include("header.php"); ?>

        <?php include("footer.php"); ?>
        <?php include("header.php"); ?>

        <?php
        session_start();
        ?>
        <!doctype html>
        <html>
        <head>
            <meta charset="utf-8">
            <title>Formulaire de contact - Version minimale</title>
            <!-- call bootstrap -->
            <link href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css" rel="stylesheet">

        </head>
        <body style="padding:100px 0 200px 0">
        <div style="padding-bottom:100px" class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1>Contactez-nous !</h1>
                </div>
            </div>
        </div>
        <!-- CONTENT -->
        <div class="container">
            <?php if(array_key_exists('errors',$_SESSION)): ?>
                <div class="alert alert-danger">
                    <?= implode('<br>', $_SESSION['errors']); ?>
                </div>
            <?php endif; ?>
            <?php if(array_key_exists('success',$_SESSION)): ?>
                <div class="alert alert-success">
                    Votre email à bien été transmis !
                </div>
            <?php endif; ?>
            <form action="send_form.php" method="post">
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="inputname">Votre nom</label>
                            <input required type="text" name="name" class="form-control" id="inputname" value="<?php echo isset($_SESSION['inputs']['name'])? $_SESSION['inputs']['name'] : ''; ?>">
                        </div><!--/*.form-group-->
                    </div><!--/*.col-md-6-->
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="inputemail">Votre email</label>
                            <input required type="email" name="email" class="form-control" id="inputemail" value="<?php echo isset($_SESSION['inputs']['email'])? $_SESSION['inputs']['email'] : ''; ?>">
                        </div><!--/*.form-group-->
                    </div><!--/*.col-md-6-->
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="inputmessage">Votre message</label>
                            <textarea required id="inputmessage" name="message" class="form-control"><?php echo isset($_SESSION['inputs']['message'])? $_SESSION['inputs']['message'] : ''; ?></textarea>
                        </div><!--/*.form-group-->
                    </div><!--/*.col-md-12-->
                    <div class="col-md-12">
                        <div class="checkbox">
                            <label for="checkspam">
                                <input type="checkbox" name="antispam" id="checkspam">Je suis un robot.
                            </label>
                        </div>
                    </div><!--/*.col-md-12-->
                    <div class="col-md-12">
                        <button type='submit' class='btn btn-primary'>Envoyer</button>
                    </div><!--/*.col-md-12-->
                </div><!--/*.row-->
            </form>
        </div><!--/*.container-->
        <!-- END CONTENT -->
        <?php
        unset($_SESSION['inputs']); // on nettoie les données précédentes
        unset($_SESSION['success']);
        unset($_SESSION['errors']); ?>


    </div>

</div><!-- /.container -->

</body>
</html>



<?php include("footer.php"); ?>


<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js">

</body>
</html>