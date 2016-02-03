<?php
/**
 * Created by PhpStorm.
 * User: Micka
 * Date: 27/01/2016
 * Time: 14:18
 */

include("connexion_req.class.php");
try
{
    $maCo = new connexion();
    //print_r($_POST);
    print_r($maCo->GetNotation($_POST['req']));

}
catch(Exception $e)
{
    print_r($e->getMessage());
}
?>