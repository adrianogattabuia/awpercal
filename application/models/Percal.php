<?php
class PerCal extends CI_Model {
	
	 function model_calcA($A1, $A2) {

	 	$A1 = $this->input->post('valueA1');
	 	$A2 = $this->input->post('valueA2');

	 	if ( (is_numeric($A1)) AND (is_numeric($A2)) ) {

	 	$resultA = ($A1 / 100) * $A2;

	 	return $resultA;	
	 	
	 	} else {

	 		$resultA = "Not a number";
	 		return $resultA;

	 	}

	 	

	}

	 function model_calcB($B1, $B2) {

	 	$B1 = $this->input->post('valueB1');
	 	$B2 = $this->input->post('valueB2');

	 	if ( (is_numeric($B1)) AND (is_numeric($B2)) AND $B2 != 0) {

	 	$resultB = ($B1 / $B2) * 100;

	 	return $resultB;
		 		

	 	
	 	} else {

	 		$resultB = "Not a number";
	 		return $resultB;


	 	}
	}

	function model_nameC($resultC) {

		$resultC = $this->input->post('resultC');
		return $resultC;


	}


}