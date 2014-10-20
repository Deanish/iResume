<?php

class PersonalsController extends AppController {

	public function add() {

		AuthComponent::user('id');

		$this->layout = 'candidate';

		$users = $this->Personal->User->find('list');

		$this->set('nationalityOptions', array(
			'Null' => ' - Select Nationality - ', 
			'India' => 'India', 
			'Others' => 'Others'
			));
		$this->set('locationOptions', array(
			'Null' => ' - Select Current Location - ', 
			'Bangalore' => 'Bangalore', 
			'Delhi' => 'Delhi', 
			'Mumbai' => 'Mumbai', 
			'Kolkata' => 'Kolkata', 
			'Chennai' => 'Chennai', 
			'Others' => 'Others'
			));
		$this->set('genderOptions', array(
			'Null' => ' - Select Gender - ',
			'male' => 'Male', 
			'female' => 'Female'
			));

		if($this->request->is('post') || $this->request->is('put')) {

			$this->Personal->save( $this->request->data );
			$this->redirect(array(
					'controller' => 'educations',
					'action' => 'add'
				));

		}

		$this->set('users', $users);
	}

}

?>