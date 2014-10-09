<?php

App::uses('Security', 'Utility');

class User extends AppModel {

	public $displayField = 'firstname';

	public $hasMany = array(
		'Product'
	);

	public $validate = array(
		'firstname' => array(
			'rule' => 'notEmpty',
			'message' => 'Please fill in First name '
		),
		'lastname' => array(
			'rule' => 'notEmpty',
			'message' => 'Please fill in Last name '
		),
		'email' => array(			'rule' => 'email',
			'message' => 'Please fill in valid Email address  '
		),
		'password' => array(
			'rule' => array('between', 4, 20),
			'message' => 'Password must be between 4 to 20 characters long '
		)
	);

	public function beforeSave( $options = array()) {

		$this->data['User']['password'] = Security::hash( $this->data['User']['password'], 'sha1', true );
		return true;

	}

}

?>