<?php

App::uses('Security', 'Utility');

class RecruitersController extends AppController {

	public function index() {

		$this->layout = 'recruiter';

	}


	public function managejobs() {

		$this->layout = 'recruiter';

	}

	public function settings() {

		$this->layout = 'recruiter';

	}

	public function company() {

		$this->layout = 'recruiter';

	}

	public function add() {

		if($this->request->is('post') || $this->request->is('put')) {
			
			$this->Recruiter->save( $this->request->data );
			$this->redirect(array(
					'controller' => 'recruiters',
					'action' => 'login'
				));

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
			$recruiter = $this->Recruiter->findByEmailAndPassword($this->request->data('Recruiter.email'), $this->request->data('Recruiter.password'));
			
			if( $recruiter ) {
				$this->redirect(array(
					'controller' => 'recruiters',
					'action' => 'index'
				));
			}

			$this->Session->setFlash('Invalid Email or Password');

		}

	}



}

?>