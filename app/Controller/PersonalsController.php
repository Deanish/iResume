<?php

class PersonalsController extends AppController {

	public function add() {

		$this->layout = 'candidate';

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
	}

}

?>