<?php

class ZonesController extends AppController{
	public function index(){
		//Retrouen simplement la vue
	}

	/**
	* Fonction appellé en Ajax seulement
	* @return $zoneList (json)
	**/
	public function getZone(){
		if($this->request->is('ajax')){
			//On récupère la liste des zones
			$zonesList = $this->Zone->find('all');

			//On transmet les données
				$this->autoRender = false;
				$this->layout = false;
				return json_encode($zonesList);
		}else{
			$this->redirect(array("controller" => "zones", "actions" => "index"));
		}
	}
}