<?php

class Zone extends AppModel{
	public $actsAs = array('Containable');
	
	//On précise qu'une zone à plusieurs geolocalisation
	public $hasMany = array(
		//L'entrée du tableau retourné par la requete qui contient les coordonnées s'appellera "Points"
		"Points" => array(
			//Mais je précise quand même quel model utiliser
			"className" => "ZoneGeolocalisation"
		)
	);
}