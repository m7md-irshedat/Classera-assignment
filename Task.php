<?php


class roundGrade {

	public $Grade;

	public static function gradingStudents ($g) {

		$this->Grade = $g;




	} 

}

$Grade = array(4, 73, 67, 38, 33);
echo roundGrade::gradingStudents($Grade); 


?>