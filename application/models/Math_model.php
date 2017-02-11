<?php
	/**
	* Math model
	*
	*/

	class Math_model extends CI_Model {

		private $units;

		public function __construct() {
			parent::__construct();
			$this->units = array(
				'mol'			=> 'moles',
				'g'			=>	'grams',
				'l'			=>	'liters',
				'molecules'	=>	'molecules',
				'atoms'		=>	'atoms',
			);
		}

		public function get_units() {
			return $this->units;
		}

		public function convert($parameters=array()) {

			/*
				Determine what type of conversion we're doing. Initially, it's one-step, but we could expand to two step later.

				We will need the following parameters
				- Substance
				- Number (amount of the substance)
				- Start unit
				- End unit

				With the start and end units, we will route to the corresponding helper method to calculate the ending number

				Algorithm
				1. Do we have all the appropriate parameters
				2. Determine which conversion we're doing
				3. Each conversion will do its own work (getting constants and such)
			*/

			// Verify parameters
				// Does the start and end units make sense


			$route = $parameters['start_unit'] . '-' . $parameters['end_unit'];


			// Route to the appropriate methods
			switch (TRUE) {
				case 'g-mol':
					$result = $this->grams_to_moles($parameters);
					break;
				default:
					break;
			}

			// Significant digit filter

			return $result;
		}

		// Convert grams to moles
		private function grams_to_moles($parameters) {
			/*
				Algorithm
				Substance



			*/

			$result = NULL;
			extract($parameters);

			$result = $number * (1/27);
			return $result;
		}

		// Format the output to the correct number of significant digits
		public function signficant_digit_filter($input, $output) {






		}

		public function get_significant_digits($number) {





			return NULL;
		}


	}

/* End of file math_model.php */
/* Location: ./models/math_model.php */