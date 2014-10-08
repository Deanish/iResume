<?php

class ProductsController extends AppController {

	public function add() {

		$users = $this->Product->User->find('list');

		if($this->request->is('post') || $this->request->is('put')) {

			$this->Product->save( $this->request->data );

		}

		$this->set('users', $users);

	}

}

?>