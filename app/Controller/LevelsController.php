<?php
	App::uses('AppController', 'Controller');
	class LevelsController extends AppController {
		public $helpers = array('Html', 'Form');

		public function index() {
			$this->set('levels', $this->Level->find('all'));
		}
	}
