<?php

class Post extends AppModel {

	public $validate = array(
		'title' => array(
			'rule' => 'notEmpty',
			'message' => 'Please fill in Job Title / Designation '
		),
		'skills' => array(
			'rule' => 'notEmpty',
			'message' => 'Please fill in Skills Required '
		),
		'qualification' => array(
			'rule' => 'notEmpty',
			'message' => 'Please fill in Required Qualification'
		),
		'vacancies' => array(
			'rule' => 'notEmpty',
			'message' => 'Please fill in Number of vacancies'
		),
		'description' => array(
			'rule' => 'notEmpty',
			'message' => 'Please fill in Job Description'
		),
	);
} 

?>