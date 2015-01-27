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
				
			<ul class="list-group">
				<?php foreach($zonesList as $zone){ ?>
					<li class="list-group-item zone">
						<span class="badge"><?= count($zone['Points']); ?> points</span>
						<?= $zone['Zone']['name']; ?>
					</li>
				<?php } ?>
			</ul>
		</div>
	</div>
</div>


<script type="text/javascript">
	$(document).ready(function(){
		var premiereZone = [];

		$.get("zones/index", function(data){
			premiereZone = jQuery.parseJSON(data)[0]['Points'];

			$.each(premiereZone, function(key, value){
				console.log(value);
			});
		});

		function initialize(){
			var map = new google.maps.Map(document.getElementById("map-canvas"), {
				zoom: 3,
				center: new google.maps.LatLng(0, -180),
    			mapTypeId: google.maps.MapTypeId.TERRAIN
			});

			var flightPlanCoordinates = [
				new google.maps.LatLng(37.7723, -122.215),
				new google.maps.LatLng(21.292, -157.822),
				new google.maps.LatLng(-18.1426, 178.431),
				new google.maps.LatLng(-27.46758, 153.027892)
			];
			var flightPath = new google.maps.Polyline({
				path: flightPlanCoordinates,
				geodesic: true,
				strokeColor: '#FF0000',
				strokeOpacity: 1.0,
				strokeWeight: 2
			});
			flightPath.setMap(map);
			
		}
		
		google.maps.event.addDomListener(window, 'load', initialize);
	});
	
</script>
