/**
 * Created by Micka on 13/01/2016.
 */
var geocoder;
var map;
var panel;
var direction;
var bounds;
var infowindow;
var gmarker = [];
// Each marker is labeled with a single alphabetical character.
var labels = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
var labelIndex = 0;
var adresse ;
var codepostal ;
var ville ;
var Cercle;
var position;
var diametre;

$(document).ready(function(){
// With JQuery
    $("#km").slider().on("slide", function (slideEvt) {
        $("#SliderVal").text(slideEvt.value);
    });

    //var val = $("#km").data('slider').getValue();
    //document.getElementById('text_latlng').innerHTML = val ;
});

// initialisation de la carte Google Map de d�part
function initialiserCarte() {
    geocoder = new google.maps.Geocoder();
    // Ici j'ai mis la latitude et longitude du centre de la france pour centrer la carte de d�part
    var latlng = new google.maps.LatLng(46.52863469527167,2.43896484375);
    var mapOptions = {
        zoom      : 5,
        center    : latlng,
        mapTypeId : google.maps.MapTypeId.ROADMAP
    }
     map = new google.maps.Map(document.getElementById('map-canvas'), mapOptions);
     panel    = document.getElementById('panel');
     bounds = new google.maps.LatLngBounds();
     infowindow = new google.maps.InfoWindow();
     Cercle = new google.maps.Circle();

}



function TrouverAdresse() {
    // R�cup�ration de l'adresse tap�e dans le formulaire
     adresse = document.getElementById('adresse').value;
     codepostal = document.getElementById('codepostal').value;
     ville = document.getElementById('ville').value;
    geocoder.geocode( { 'address': adresse+codepostal+ville}, function(results, status) {
        if (status == google.maps.GeocoderStatus.OK) {
            map.setCenter(results[0].geometry.location);
            // R�cup�ration des coordonn�es GPS du lieu tap� dans le formulaire
           // var strposition = results[0].geometry.location+"";
           // strposition=strposition.replace('(', '');
            //strposition=strposition.replace(')', '');
            // Affichage des coordonn�es dans le <span>
            // Cr�ation du marqueur du lieu (�pingle)
            document.getElementById('panel').innerHTML = "";

               position = new google.maps.Marker({
                map: map,
                position: results[0].geometry.location,
                 title:'Vous étes ici'
            });
            // Push your newly created marker into the array:
            gmarker.push(position);
            map.setZoom(13);

            if(Cercle){
                removeCircle();
            }
            diametre = $("#km").data('slider').getValue() * 1000;
            //document.getElementById('text_latlng').innerHTML = diametre ;
            Cercle.setMap( map );
            Cercle.setCenter(results[0].geometry.location);
            Cercle.setRadius( diametre );
            Cercle.setVisible(false);
            Cercle.bindTo(position);

            //addCercle();
        } else {
            alert('Adresse introuvable: ' + status);
        }
    });
}
function removeCircle(){
    Cercle.setMap(null);
}

function removeDirection(){
    direction.setMap(null);
}
function removeMarkers(){
    for(i=0; i< gmarker.length; i++){
        gmarker[i].setMap(null);
    }
}

function calculate(coordonnee){
    removeMarkers();
    direction = new google.maps.DirectionsRenderer({
        map   : map,
        panel : panel
    });
    origin      =  adresse+codepostal+ville ; // Le point d�part
    destination = coordonnee; // Le point d'arriv�
    if(origin && destination){
        var request = {
            origin      : origin,
            destination : destination,
            travelMode  : google.maps.DirectionsTravelMode.DRIVING // Type de transport
        }
        var directionsService = new google.maps.DirectionsService(); // Service de calcul d'itin�raire
        directionsService.route(request, function(response, status){ // Envoie de la requ�te pour calculer le parcours
            if(status == google.maps.DirectionsStatus.OK){
                direction.setDirections(response); // Trace l'itin�raire sur la carte et les diff�rentes �tapes du parcours
            }
        });
    }
}

$(document).ready(function(){
        $("#rechercheForm").submit(function() {
            if(gmarker.length > 0 ){
                //document.getElementById('text_latlng').innerHTML = $("#km").slider();
                removeMarkers();
                if(direction){
                    removeDirection();
                    //document.getElementById('text_latlng').innerHTML = "direction ok";
                }
            }

            TrouverAdresse();


            var req = "SELECT lat,lng,nom_garage,libelle_garage,adresse_garage,libelle_competence,libelle_equipement,certification FROM garage";

            $.post('/projetTechnique/connexion/GetInfoMap.php', {req: req}, function (data) {

                for (index = 0; index < data.length; index++) {
                    //alert(data[index].nom_garage);

                    var  latlng = new google.maps.LatLng(data[index].lat, data[index].lng);
                    bounds.extend(latlng);
                    //document.getElementById('text_latlng').innerHTML = "bounds ok";

                    //document.getElementById('text_latlng').innerHTML = data[index].libelle_garage;


                    var contentString ='<div id="content">'
                        +'<h4>'+ data[index].nom_garage+ '</h4>'
                        +'<p><b>'+"Libelle : "+'</B>'+data[index].libelle_garage + '<br/>'
                        +'<b>'+"Adresse : "+'</B>'+data[index].adresse_garage+'<br/>'
                        +'<b>'+"Competence : "+'</B>'+data[index].libelle_competence+'</B><br/>'
                        +'<b>'+"Équipement : "+'</B>'+data[index].libelle_equipement+'<br/>'
                        +'<b>'+"Certification : "+'</B>'+data[index].certification
                        +'<p>'
                        +'<p><i>'+"Click droit sur le marker pour calculer l'itinéraire"+'</i><p>'
                        + '</div>';

                        // document.getElementById('value').value(latlng[index]);
                        var marker = new google.maps.Marker({
                             position: latlng,
                             label: labels[labelIndex++ % labels.length],
                             map: map,
                             draggable: true,
                             title: data[index].nom_garage,
                             content: contentString
                        });

                    // Push your newly created marker into the array:
                    gmarker.push(marker);

                    var center = position.getPosition();
                    var markerLatLng = marker.getPosition();
                    var distance = google.maps.geometry.spherical.computeDistanceBetween(center, markerLatLng);
                     if(distance >  diametre){
                        marker.setVisible(false);
                     }
                    google.maps.event.addListener(marker,'rightclick', function(event) {
                        /*code qui doit s'executer lors de l'evenement*/
                        removeCircle();
                        calculate(this.position);
                       // document.getElementById('panel').innerHTML = this.position;
                    });
                        google.maps.event.addListener(marker, 'click', function() {
                            infowindow.setContent(this.content);
                            infowindow.open(map, this);
                        });
                }


            });
            labelIndex=0;
            return false;
        });
    });


// Lancement de la construction de la carte google map
google.maps.event.addDomListener(window, 'load', initialiserCarte);
