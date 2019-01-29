<?php

/**
 * Class Round grades for each student's
 *
 * @author   Mohammed Irshedat
 */

class roundGrades {

    /**
    * grading students It should return an integer array consisting of rounded grades
    *
    * @param  int[] $grades Array have students grades
    * @source 30 1  Check that ensures counting
    * @source 32 1  Round the grade according to the rules
    * @source 37 1  The grade is out of rules
    * @return int[] The rounded grades of students 
    */	

	public static function gradingStudents ($grades) {

		/**
        * @var int[] $newGrade array temporary hold the new grade
        * @var int[] $roundedGrades array have the new grade
        */

	    $roundedGrades = [];

    	for ($i = 0; $i < count($grades); $i++) {

        	if ($grades[$i] % 5 > 2 && $grades[$i] > 37 && $grades[$i] <= 100) {

            	$newGrade = $grades[$i] + (5 - ($grades[$i] % 5));
        	} 	

        	else {

            	$newGrade = $grades[$i];  
        	}

        	//Push the element of $newGrade to $roundedGrades
        	array_push($roundedGrades, $newGrade);
    	}

    	return $roundedGrades;
    }     
}

$grades = array(73, 67, 38, 33); 
$newGrades = roundGrades::gradingStudents($grades); 

for ($i= 0; $i < count($grades); $i++) {

    echo "Your grade is: " .$grades[$i]. " After the round it will be: " .$newGrades[$i]. "<br>";
}

?>