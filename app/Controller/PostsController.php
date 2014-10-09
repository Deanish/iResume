<?php

class PostsController extends AppController {

	public function add() {

		$this->layout = 'recruiter';

		$posts = $this->Post->find('all');
		// pr($posts);	

		$this->set('experienceOptions', array(
			'Null' => ' - Select Experience Required - ', 
			'0-2 Years' => '0-2 Years', 
			'2-5 Years' => '2-5 Years', 
			'5-10Years' => '5-10Years', 
			'> 10 Years' => '> 10 Years'
			));
		$this->set('locationOptions', array(
			'Null' => ' - Select Job Location - ', 
			'Bangalore' => 'Bangalore', 
			'Delhi' => 'Delhi', 
			'Mumbai' => 'Mumbai', 
			'Kolkata' => 'Kolkata', 
			'Chennai' => 'Chennai', 
			'Others' => 'Others'
			));
		$this->set('industryOptions', array(
			'Null' => ' - Select Industry Type - ', 
			'Accounts Jobs' => 'Accounts Jobs', 
			'Bank Jobs' => 'Bank Jobs', 
			'BPO Jobs' => 'BPO Jobs', 
			'HR Jobs' => 'HR Jobs', 
			'IT Jobs' => 'IT Jobs', 
			'Others' => 'Others'
			));

		if($this->request->is('post') || $this->request->is('put')) {

			$this->Post->save( $this->request->data );
			$this->redirect(array(
					'controller' => 'companies',
					'action' => 'add'
				));

		}
	}

}

?>