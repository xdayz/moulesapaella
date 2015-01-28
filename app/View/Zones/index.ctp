<div class="col-xs-12">
	<?php //echo $this->Session->flash(); ?>

	<div class="row">
		<div class="col-xs-8">
			<div class="panel panel-primary">
			<div class="panel-heading">Créer une nouvelle zone</div>
				<div class="panel-body full-height">
					<div id="map-canvas">
						
					</div>
				</div>
			</div>
		</div>
		<div class="col-xs-4">
			<div class="panel panel-primary">
			<div class="panel-heading">Liste des zones existantes</div>
				
			<ul class="list-group" id="zonesList">
				
			</ul>
		</div>
	</div>
</div>


<script type="text/javascript">
	$(document).ready(function(){
		var zonesList;

		function getZone(){
			//Au chargement, on récupère la liste des zones
			$.get("zones/getZone", function(data){
				//On convertie tout ça en tableau
				zonesList = jQuery.parseJSON(data);

				//On vide la liste des zones a droite
				$("#zonesList").html();
				//Pour chaque zone
				$.each(zonesList, function(key, value){
					//On affiche le nom et le nombre de points
					$("#zonesList").append('<li class="list-group-item zone"><span class="badge">' + value['Points'].length + ' points</span>' + value['Zone']['name'] + '</li>');
				});

				//On initialise maintenant la map
				initialize();
			});
		}

		function initialize(){
			//Configuration de base de la map
			var map = new google.maps.Map(document.getElementById("map-canvas"), {
				zoom: 3,
				center: new google.maps.LatLng(0, -180),
    			mapTypeId: google.maps.MapTypeId.TERRAIN
			});

			//Pour chaque zone
			$.each(zonesList, function(key, zone){
				var laZone = [];
				//On place les points dans un tableau
				$.each(zone['Points'], function(key, coord){
					laZone.push(new google.maps.LatLng(coord['latitude'], coord['longitude']));
				});

				//On en fait un nouveau polygon
				var zonePath = new google.maps.Polyline({
					path: laZone,
					geodesic: true,
					strokeColor: '#FF0000',
					strokeOpacity: 1.0,
					strokeWeight: 2
				});

				//On affecte le polygon à la carte
				zonePath.setMap(map);
			});

			//On ajoute l'option de dessiner des polygones
			var drawingManager = new google.maps.drawing.DrawingManager({
			    drawingMode: google.maps.drawing.OverlayType.MARKER,
			    drawingControl: true,
			    drawingControlOptions: {
			      position: google.maps.ControlPosition.TOP_CENTER,
			      drawingModes: [
			        google.maps.drawing.OverlayType.POLYGON
			      ]
			    },
			    //Définition des couleurs, tailles ... Du polygon
			    circleOptions: {
			      fillColor: '#ffff00',
			      fillOpacity: 1,
			      strokeWeight: 5,
			      clickable: false,
			      editable: true,
			      zIndex: 1
			    }
			});

			//on affecte la gestion de dessin sur la mp
			drawingManager.setMap(map);
			
			//Evenement lancé dès qu'un polygon est fini
			google.maps.event.addListener(drawingManager,'polygoncomplete',function(polygon) {
				//TODO
				//Afficher la popup + requete ajax (getZone)
				console.log(polygon.getPath());
			});
		}

		//On balance la requete pour tout initialiser
		getZone();
	});
	
</script>
