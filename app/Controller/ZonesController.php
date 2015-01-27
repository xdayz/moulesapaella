<?php

class ZonesController extends AppController{
	public function index(){
		debug($this->Zone->find('all'));
	}
}