<?php

class ZonesController extends AppController{
	public $uses = array("Zone", "ZoneGeolocalisation");

	public function beforeFilter(){
		$this->Auth->allow();
	}

	public function index(){
		//Retourne simplement la vue
	}

	/**
	* Fonction appellé en Ajax seulement
	* @return $zoneList (json)
	**/
	public function getZones(){
		//On récupère la liste des zones
		$this->autoRender = false;
		$this->layout = false;

		$this->Zone->contain(array(
			"Points" => array(
				"order" => "iteration ASC"
			)
		));

		$zonesList = $this->Zone->find('all');

		//On transmet les données
		return json_encode($zonesList);
	}

	/**
	* Fonction qui ajoute une zone passé en param (only in ajax)
	* @param : pointsList (array)
	* @param : zoneName (string)
	* @return : $response (jSon)
	**/
	public function addZone(){
		$this->autoRender = false;
		$this->layout = false;
		
		//on stock le nom du la zone
		$zoneName['Zone']['name'] = $this->request->data['nameZone'];
		//On save le model (donc une nouvelle entrée)
		$this->Zone->save($zoneName);

		//On stock l'id rentré
		$idZone = $this->Zone->id;

		$iteration = 0;

		//Pour tout les points du tableau, on insert
		foreach(json_decode($this->request->data['points']) as $value) {
			$points = array();

			$points['ZoneGeolocalisation']['zone_id'] = $idZone;
			$points['ZoneGeolocalisation']['longitude'] = $value->D;
			$points['ZoneGeolocalisation']['latitude'] = $value->k;
			$points['ZoneGeolocalisation']['iteration'] = $iteration;

			$request = $this->ZoneGeolocalisation->save($points);
			$iteration++;
		}

		//On ajoute les derniers points = premiers pour fermer le polygon
		$lastPoints = array();
		$lastPoints['ZoneGeolocalisation']['zone_id'] = $idZone;
		$lastPoints['ZoneGeolocalisation']['longitude'] = json_decode($this->request->data['points'])[0]->D;
		$lastPoints['ZoneGeolocalisation']['latitude'] = json_decode($this->request->data['points'])[0]->k;
		$lastPoints['ZoneGeolocalisation']['iteration'] = $iteration;
		$this->ZoneGeolocalisation->save($lastPoints);

		return json_encode(array(true));
	}
}