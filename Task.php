<?php

class roundGrades {

	public static function gradingStudents ($grades) {

	    $roundedGrades = [];

    	for ($i = 0; $i < count($grades); $i++) {

        	if ($grades[$i] % 5 > 2 && $grades[$i] > 37 && $grades[$i] <= 100) {

            	$newGrade = $grades[$i] + (5 - ($grades[$i] % 5));
        	} 	

        	else {

            	$newGrade = $grades[$i];  
        	}

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