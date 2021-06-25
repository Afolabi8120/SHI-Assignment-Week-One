<?php
	//Name: Afolabi Temidayo Timothy
	//Intern ID: SH-IT-48472
	//Stack: Web Development(Backend)
	//Program: Side Hustle Internship 3.0

	function myRange($start,$end){
		for($start = $start; $start <= $end; $start++){
			echo $start;
		}
	}
	 
	function mySum(){
		$myarray = array(1,2,3,4,5,6);

		$sum = 0;
		foreach ($myarray as $newarray) {
			$sum += $newarray;
		}

		return $sum;
	}

	echo myRange(1, 10);
	echo "</br>";
	echo "Sum of arrays of numbers = " . mySum();
?>