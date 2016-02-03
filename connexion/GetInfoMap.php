<?php
/**
 * Created by PhpStorm.
 * User: Micka
 * Date: 19/01/2016
 * Time: 12:49
 */

include("connexion_req.class.php");
try
{
    $maCo = new connexion();
    //print_r($_POST);
    print_r($maCo->GetInfoMaps($_POST['req']));

}
catch(Exception $e)
{
    print_r($e->getMessage());
}
?>