<?php

class Company extends AppModel {

	public $validate = array(
		'name' => array(
			'rule' => 'notEmpty',
			'message' => 'Please fill in Company Name '
		),
		'profile' => array(
			'rule' => 'notEmpty',
			'message' => 'Please fill in Company Profile '
		),
		'url' => array(
			'rule' => 'notEmpty',
			'message' => 'Please fill in Company Website URL'
		),
		'person' => array(
			'rule' => 'notEmpty',
			'message' => 'Please fill in Contact Person'
		),
		'contact' => array(
			'rule' => 'notEmpty',
			'message' => 'Please fill in Contact Number'
		)
	);
}

?>