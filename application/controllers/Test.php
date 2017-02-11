<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Test extends CI_Controller {

	public function __construct() {
		parent::__construct();
		$this->load->model('math_model');
	}

	// Generic test
	public function index() {
		$parameters = array(
			'number'			=>	'113',
			'substance'		=>	'Al',
			'start_unit'	=>	'g',
			'end_unit'		=>	'mol',
		);
		$result = $this->math_model->convert($parameters);
		echo $result . ' ' . $parameters['end_unit'];
	}

	// Incomplete parameters
	public function incomplete_params() {

	}

	// Same start and end unit
	public function same_start_end_unit() {
	}

	// Significant digit test
	public function significant_digits() {
		/*
		$input = '113';
		$output = '4.1851851851852';

		$result = $this->math_model->signficant_digit_filter($input, $output);
		echo '<pre>';
		var_dump($result);
		echo '</pre>';

		*/

		$tests = array(
			'113'			=>	3,
			'0.001234'	=>	4,
			'12034'		=>	5,
			'123400'		=>	4,
		);

		foreach ($tests as $number=>$sf) {
			$result = $this->math_model->get_significant_digits($number);
			echo '<pre>';
			var_dump(
				$number,
				$result,
				$sf,
				($result == $sf)
			);
			echo '</pre>';

		}

		$result = $this->math_model->get_significant_digits($test);
		echo '<pre>';
		var_dump(
			$test,
			$result
		);
		echo '</pre>';
	}


	// Problem 1
	public function problem() {

	}





}
