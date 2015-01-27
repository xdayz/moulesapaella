<?php

class Zone extends AppModel{
	public $hasMany = array(
		"Points" => array(
			"className" => "ZoneGeolocalisation"
		)
	);
}