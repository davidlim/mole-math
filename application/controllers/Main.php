<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends CI_Controller {

	public function __construct() {
		parent::__construct();
		$this->load->model('math_model');
	}

	public function index() {
		$this->load->view('header');
		$this->load->view('intro');
		$this->load->view('footer');
	}

	public function question() {

		$units = $this->math_model->get_units();

		$question = array(
			'problem'		=>	'The number you were given is the mass in grams of aluminum metal you are planning to use for a chemical reaction. How many moles of aluminum is this?',
			'number'			=>	'123.4',
			'start_unit'	=>	'g',
			'units'			=>	$units,
			'student'		=>	'John',
		);

		$this->load->view('header');
		$this->load->view('question', $question);
		$this->load->view('footer');
	}

	public function answer() {
		if (is_null($this->input->post('submit'))) {
			redirect(base_url() . 'index.php/main/question/');
			exit();
		}

		/*
			Determine if student answer the question correctly


		*/



		$answer = array(
			'problem'		=>	$this->input->post('problem'),
			'number'			=>	$this->input->post('number'),
			'student'		=>	$this->input->post('student'),
			'start_unit'	=>	$this->input->post('start-unit'),
			'post'			=> $this->input->post(),
		);

		$this->load->view('header');
		$this->load->view('answer', $answer);
		$this->load->view('footer');

	}
}
