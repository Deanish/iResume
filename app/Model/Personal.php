<?php

class Personal extends AppModel {

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