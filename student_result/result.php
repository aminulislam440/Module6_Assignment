<?php
// Function to validate marks
function validateMarks($marks) {
    return $marks >= 0 && $marks <= 100;
}

// Function to calculate the grade based on average marks
function calculateGrade($average) {
    switch (true) {
        case ($average >= 80):
            return "A+";
        case ($average >= 70):
            return "A";
        case ($average >= 60):
            return "A-";
        case ($average >= 50):
            return "B";
        case ($average >= 40):
            return "C";
        case ($average >= 33):
            return "D";
        default:
            return "F";
    }
}

// Function to calculate the result
function calculateResult($math, $physics, $chemistry, $biology, $english) {
    // Validate each subject mark
    if (!validateMarks($math) || !validateMarks($physics) || !validateMarks($chemistry) || 
        !validateMarks($biology) || !validateMarks($english)) {
        return "Mark range is invalid.";
    }

    // Check for failure in any subject
    if ($math < 33 || $physics < 33 || $chemistry < 33 || $biology < 33 || $english < 33) {
        return "Failed.";
    }

    // Calculate total and average marks if all marks valid and above 33
    $totalMarks = $math + $physics + $chemistry + $biology + $english;
    $averageMarks = $totalMarks / 5;
    $grade = calculateGrade($averageMarks);

    return "Total Marks: $totalMarks\nAverage Marks: $averageMarks\nGrade: $grade";
}

// Example marks obtained in five subjects
$math = 45;      
$physics = 50;
$chemistry = 40;
$biology = 55;
$english = 42;

// Calculate result
$result = calculateResult($math, $physics, $chemistry, $biology, $english);

// Output result
echo $result;
?>
