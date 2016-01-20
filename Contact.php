<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Contact</title>

    <link href="css/style.css" rel="stylesheet">

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="bootstrap-3.3.6/dist/css/bootstrap.min.css">

    <!-- Optional theme -->
    <link rel="stylesheet" href="bootstrap-3.3.6/dist/css/bootstrap-theme.min.css">

</head>
<body>

<?php $page = "Contact"; ?>

<div class="container">

    <div class="starter-template">

        <?php include("header.php"); ?>

        <?php include("footer.php"); ?>


        <?php
        session_start();
        ?>

        <head>
            <meta charset="utf-8">
            <title>Formulaire de contact - Version minimale</title>
            <!-- call bootstrap -->
            <link href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css" rel="stylesheet">

        </head>
        <h2>Contactez nous !</h2>
        <body style="padding:100px 0 200px 0">
        <div style="padding-bottom:100px" class="container">
            <div class="row">
                <div class="col-md-12">
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
                            <textarea required id="inputmessage" name="message" rows="10" cols="50" class="form-control"><?php echo isset($_SESSION['inputs']['message'])? $_SESSION['inputs']['message'] : ''; ?></textarea>
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




<?php include("footer.php"); ?>


<script type="text/javascript" src="js/jquery-2.2.0.min.js"></script>

<!-- Latest compiled and minified JavaScript -->
<script src="bootstrap-3.3.6/dist/js/bootstrap.min.js"</script>
<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->


</body>
</html>