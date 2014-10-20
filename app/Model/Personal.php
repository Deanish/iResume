<?php

class Personal extends AppModel {

	public $belongsTo = array(
		'User'
	);


	public $validate = array(
		'mobile' => array(
			'rule' => 'notEmpty',
			'message' => 'Please fill in Contact Number '
		),
		'dob' => array(
			'rule' => 'notEmpty',
			'message' => 'Please fill in Date of Birth '
		)
	);
}

?>