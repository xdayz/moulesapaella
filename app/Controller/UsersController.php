<?php

class UsersController extends AppController{
	public function login(){
		echo $this->Auth->password('admin');
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

	public function logout(){
		$this->Auth->logout();
		$this->redirect(array("controller" => "users", "action" => "login"));
	}
}