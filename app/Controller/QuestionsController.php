<?php
	App::uses('AppController', 'Controller');
	class QuestionsController extends AppController {
		public $helpers = array('Html', 'Form');

		public function index() {
			$this->set('questions', $this->Question->find('all'));
		}
	}
