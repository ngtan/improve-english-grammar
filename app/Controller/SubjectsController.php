<?php
	App::uses('AppController', 'Controller');
	class SubjectsController extends AppController {
		public $helpers = array('Html', 'Form');
		public $uses = array('Subject', 'Level', 'Question');

		public function index() {
			$this->set('subjects', $this->Subject->find('all'));
		}

		public function selection() {
			$this->set('subjects', $this->Subject->find('all'));
			$this->set('questions', $this->Question->find('all'));
			$this->set('levels', $this->Level->find('all'));

			if ($this->request->is('post')) {
				pr($this->request->data);
			}
		}
	}
