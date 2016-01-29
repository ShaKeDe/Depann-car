/**
 * Created by Micka on 26/01/2016.
 */

$(document).ready(function(){
    $("#validation").click(function() {

       // document.getElementById('text_latlng').innerHTML = $("#star").val()+ "  "+ $("#champ_de_text").val()+ "  "+ $("#champ_de_text").val();
        var l = document.getElementById('garage');
        var p = l.innerText || l.textContent;
        var num = p.lastIndexOf(':');
        var nom = p.substring((num+2), p.length);
        var req = "INSERT INTO note (note_client ,commentaire, id_client) VALUES (:note,:text,(SELECT id_client FROM garage WHERE nom_garage = :nom ))";
        var note = $("#star").val();
        var text = $("#champ_de_text").val();
        document.getElementById('text_latlng').innerHTML =req;
        $.post('/projetTechnique/connexion/InsertNotation.php',{req:req,note:note,text:text,nom:nom},function(data){


            document.getElementById('text_latlng').innerHTML = data;

        });
    });
});

$(document).ready(function(){
    $('#submit').click(function(){

       var note =  $("#star").val();
        var client = $("#client").val();
        var req = "SELECT date_reparation.date_debut,date_reparation.date_fin,date_reparation.libelle,garage.nom_garage " +
            "FROM date_reparation " +
            "LEFT JOIN depanncar.client ON date_reparation.id_client = client.id_lient " +
            "LEFT JOIN depanncar.garage ON date_reparation.id_garage = garage.id_garage " +
            "WHERE client.id_lient= "+client+"";
        $.post('/projetTechnique/connexion/GetNotation.php',{req:req},function(data){

            for (index = 0; index < data.length; index++) {

                document.getElementById('date').innerHTML = '<b>'+"Date de l'intervention : "+'</B>'+data[index].date_debut +" au "+data[index].date_fin;
                document.getElementById('garage').innerHTML = '<b>'+"Garage d'intervention : "+'</B>'+data[index].nom_garage ;
                document.getElementById('libelle').innerHTML = '<b>'+"Libelle de l'intervention : "+'</B>'+data[index].libelle;

            }


        });

    });
});