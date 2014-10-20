<?php

class ProfessionalsController extends AppController {

	public function add() {

		$this->layout = 'candidate';

		$this->set('statusOptions',array(
			'Null' => ' - Employee Current Status - ',
			'Fresher' => 'Fresher',
			'Experienced' => 'Experienced'
			));

		$this->set('yearsOptions',array(
			'Null' => ' - Years - ',
			'0' => '0',
			'1' => '1',
			'2' => '2',
			'3' => '3',
			'4' => '4',
			'5' => '5',
			'6' => '6',
			'7' => '7',
			'8' => '8',
			'9' => '9',
			'10' => '10',
			'> 10' => '> 10'
			));

		$this->set('monthsOptions',array(
			'Null' => ' - Months - ',
			'0' => '0',
			'1' => '1',
			'2' => '2',
			'3' => '3',
			'4' => '4',
			'5' => '5',
			'6' => '6',
			'7' => '7',
			'8' => '8',
			'9' => '9',
			'10' => '10',
			'11' => '11',
			'12' => '12'
			));

		if($this->request->is('post') || $this->request->is('put')) {

			$this->Professional->save( $this->request->data );
			$this->redirect(array(
					'controller' => 'desires',
					'action' => 'add'
				));

		}
	}
}

?>