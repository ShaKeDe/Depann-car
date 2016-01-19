
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>


<?php
session_start();//on d�marre la session
// $errors = [];
$errors = array(); // on cr�e une v�rif de champs
if(!array_key_exists('name', $_POST) || $_POST['name'] == '') {// on verifie l'existence du champ et d'un contenu
    $errors ['name'] = "vous n'avez pas renseign� votre nom";
}
if(!array_key_exists('email', $_POST) || $_POST['email'] == '' || !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {// on verifie existence de la cl�
    $errors ['mail'] = "vous n'avez pas renseign� votre email";
}
if(!array_key_exists('message', $_POST) || $_POST['message'] == '') {
    $errors ['message'] = "vous n'avez pas renseign� votre message";
}
if(array_key_exists('antispam', $_POST)) {// on place un petit filet anti robots spammers
    $errors ['antispam'] = "Vous �tes un robots spammer";
}
//On check les infos transmises lors de la validation
if(!empty($errors)){ // si erreur on renvoie vers la page pr�c�dente
    $_SESSION['errors'] = $errors;//on stocke les erreurs
    $_SESSION['inputs'] = $_POST;
    header('Location: contact.php');
}else{
    $_SESSION['success'] = 1;
    $headers  = 'MIME-Version: 1.0' . "\r\n";
    $headers .= 'Content-type: text/html; charset=utf-8' . "\r\n";
    $headers .= 'FROM:' . htmlspecialchars($_POST['email']);
    $to = 'Debienne.alexandre@gmail.com'; // Ins�rer votre adresse email ICI
    $subject = 'Message envoy� par ' . htmlspecialchars($_POST['name']) .' - <i>' . htmlspecialchars($_POST['email']) .'</i>';
    $message_content = '
  <table>
  <tr>
  <td><b>Emetteur du message:</b></td>
  </tr>
  <tr>
  <td>'. $subject . '</td>
  </tr>
  <tr>
  <td><b>Contenu du message:</b></td>
  </tr>
  <tr>
  <td>'. htmlspecialchars($_POST['message']) .'</td>
  </tr>
  </table>
  ';
    mail($to, $subject, $message_content, $headers);
    header('Location: contact.php');
}


