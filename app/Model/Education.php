<?php

class Education extends AppModel {

		public $validate = array(
		'institute' => array(
			'rule' => 'notEmpty',
			'message' => 'Please fill in Institute Name '
		),
		'university' => array(
			'rule' => 'notEmpty',
			'message' => 'Please fill in University '
		),
		'marks' => array(
			'rule' => 'notEmpty',
			'message' => 'Grade / Marks '
		),
		'yop' => array(
			'rule' => 'notEmpty',
			'message' => 'Year of passout '
		)
	);
}

?>