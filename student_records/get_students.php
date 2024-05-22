<?php
// Read JSON file
$students_json = file_get_contents('students.json');
$students_array = json_decode($students_json, true);

// If a specific student ID is requested
if (isset($_GET['sid'])) {
    $sid = $_GET['sid'];
    $found_student = null;
    // Find the student record with the given ID
    foreach ($students_array as $student) {
        if ($student['sid'] == $sid) {
            // Store the specific student record
            $found_student = $student;
            break;
        }
    }
    // Echo the specific student record as JSON
    echo json_encode($found_student);
} else {
    // Echo all student records as JSON
    echo json_encode($students_array);
}
?>

