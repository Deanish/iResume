<?php

class CompaniesController extends AppController {

	public function add() {

		$this->layout = 'recruiter';

		if($this->request->is('post') || $this->request->is('put')) {

			$this->Company->save( $this->request->data );
			$this->redirect(array(
					'controller' => 'posts',
					'action' => 'add'
				));

		}
	}

}

?>