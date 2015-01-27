<?php

class ZoneGeolocalisation extends AppModel{
	//On précise l'utlisation de la table "zone_geolocalisation" comme on ne suit pas les conventions de Cake
	public $use = "zone_geolocalisations";

	//On précise qu'une géoloc à forcément UNE zone au dessus
	public $belongsTo = array("zone" => array(
		//On précise quelle colonne est la clé étrangère qui fait référence à la zone
		"foreignKey" =>	"zone_id"
	));
}