<?php

App::uses('Security', 'Utility');

class UsersController extends AppController {

	public function index() {

		$users = $this->User->find('all');
		// pr($users);

		$this->set('users', $users);

	}

	public function add() {

		if($this->request->is('post') || $this->request->is('put')) {
			
			$this->User->save( $this->request->data );
			$this->redirect('/users');

		}

	}

	public function login() {

		if($this->request->is('post') || $this->request->is('put')) {

			// 1
			/*$user = $this->User->find('first', array(
				'conditions' => array(
					'email' => $this->request->data('User.email'),
					'password' => $this->request->data('User.password'),

				)
			));*/

			// 2
			$this->data['User']['password'] = Security::hash( $this->data['User']['password'], 'sha1', true );
			$user = $this->User->findByEmailAndPassword($this->request->data('User.email'), $this->request->data('User.password'));
			if( $user ) {
				$this->Session->write('User', $user);
				$this->redirect(array(
					'controller' => 'candidates',
					'action' => 'index'
				));
			}

			$this->Session->setFlash('Invalid Email or Password');
			

		}

	}

}

?>