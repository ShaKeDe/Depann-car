<?php
/**
 * Created by PhpStorm.
 * User: Micka
 * Date: 18/01/2016
 * Time: 12:38
 */
class connexion
{
    //Variable qui accueille la connexion

    public $bdh;

    //Constructeur de la classe
    public function __construct()
    {
        $host = "127.0.0.1";
        $user = "root";
        $pass = "";
        $db = "depanncar";
        try
        {
            $pdo = new PDO('mysql:host='.$host.';dbname='.$db.'', $user, $pass);
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $pdo->exec("SET CHARACTER SET utf8");
            $this->dbh=$pdo;

        } catch (PDOException $e)
        {
            print "Erreur !: " . $e->getMessage() . "<br/>";
            die();
        }
    }

    function GetInfoMaps($req)
    {
        $result = $this->dbh->query($req)->fetchAll(PDO::FETCH_ASSOC);

        //Or if you need to edit/manipulate the result before output
        $return = array();
        foreach ($result as $row){

            $return[]=array('lat'=>$row['lat'],
                'lng'=>$row['lng'],
                'nom_garage'=>$row['nom_garage'],
                'libelle_garage'=>$row['libelle_garage'],
                'adresse_garage'=>$row['adresse_garage'],
                'libelle_competence'=>$row['libelle_competence'],
                'libelle_equipement'=>$row['libelle_equipement'],
                'certification'=>$row['certification']);

        }
        header('Content-type: application/json');
        echo json_encode($return);
    }

    function GetNotation($req)
    {
        $result = $this->dbh->query($req)->fetchAll(PDO::FETCH_ASSOC);

        //Or if you need to edit/manipulate the result before output
        $return = array();
        foreach ($result as $row){

            $return[]=array('date_debut'=>$row['date_debut'],
                'date_fin'=>$row['date_fin'],
                'libelle'=>$row['libelle'],
                'nom_garage'=>$row['nom_garage']);

        }
        header('Content-type: application/json');
        echo json_encode($return);
    }

    function InsertNotation($req,$note,$text,$nom)
    {
        $req = $this->dbh->prepare($req);
        $req ->bindParam('note', $note);
        $req ->bindParam('text', $text);
        $req ->bindParam('nom', $nom);

        $req->execute();

      echo ("ok");
    }
}
?>