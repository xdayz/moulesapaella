<?php

class UsersController extends AppController{
	/**
	* Connecte l'utilisateur
	* @return : redirect with message
	**/
	public function login(){
		if(!empty($this->request->data)){
			if($this->Auth->login()){
				$this->Session->setFlash('Content de vous voir ' . $this->Session->read('Auth.User.username') . ' !', 'flash_success', array('escape' => false));
				//return $this->redirect('/');
			}else{
				$this->Session->setFlash('Pseudo ou mot de passe invalide.', 'flash_error');
			}
		}else if($this->Auth->loggedIn()){
			$this->Session->setFlash('Vous êtes déjà connecté.', 'flash_error');
			//$this->redirect('/');
		}
	}

	/**
	* Déconnecte l'utilisateur
	* @return : Redirect
	**/
	public function logout(){
		$this->Auth->logout();
		$this->redirect(array("controller" => "users", "action" => "login"));
	}
}