<?php

class ZonesController extends AppController{
	/**
	* Retourne la liste des zones avec leurs points GPS
	* @return : $zonesList (array)
	**/
	public function index(){
		//On récupère la liste des zones
		$zonesList = $this->Zone->find('all');


		//On transmet les données
		if($this->request->is('ajax')){
			$this->autoRender = false;
			$this->layout = false;
			return json_encode($zonesList);
		}else{
			//Le premier paramètre correspond a la variable passé à la vue
			//Le second correspond au tableau / variable à envoyer à la vue
			$this->set('zonesList', $zonesList);
		}
	}
}