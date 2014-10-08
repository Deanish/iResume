<?php

class CandidatesController extends AppController {

/*	public function beforeFilter() {
		parent::beforeFilter();

		if( $this->request->action != 'login' && !$this->Session->check('User') ) {
			$this->Session->setFlash('Please Login');
			$this->redirect(array(
				'controller' => 'users',
				'action' => 'login'
			));
		}
	}*/

	public function index() {

		$this->layout = 'candidate';

	}

	public function shortlisted() {

		$this->layout = 'candidate';

	}

	public function settings() {

		$this->layout = 'candidate';

	}

	public function personal() {

		$this->layout = 'candidate';

	}

	public function educational() {

		$this->layout = 'candidate';

	}

	public function professional() {

		$this->layout = 'candidate';

	}

	public function desired() {

		$this->layout = 'candidate';

	}

	public function applied() {

		$this->layout = 'candidate';

	}

	public function view() {

		$this->layout = 'candidate';

	}

}

?>