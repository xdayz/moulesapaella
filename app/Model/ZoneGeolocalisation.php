<?php

class ZoneGeolocalisation extends AppModel{
	public $use = "zone_geolocalisations";

	public $belongsTo = array("zone" => array(
		"foreignKey" =>	"zone_id"
	));
}