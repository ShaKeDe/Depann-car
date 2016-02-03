<?php
/**
 * Created by PhpStorm.
 * User: Micka
 * Date: 27/01/2016
 * Time: 15:35
 */

include("connexion_req.class.php");
try
{
    $maCo = new connexion();
    print_r($maCo->InsertNotation($_POST['req'],$_POST['note'],$_POST['text'],$_POST['nom']));

}
catch(Exception $e)
{
    print_r($e->getMessage());
}
?>