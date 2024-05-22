<?php
// Get data from POST request
$name = $_POST['name'] ?? '';
$age = $_POST['age'] ?? '';
$address = $_POST['address'] ?? '';
$cgpa = $_POST['cgpa'] ?? '';

// Check if all required fields are provided
if (empty($name) || empty($age) || empty($address) || empty($cgpa)) {
    echo json_encode(["error" => "All fields are required."]);
    exit;
}

// Read existing students data
$students_json = file_get_contents('students.json');
$students_array = json_decode($students_json, true);

// Generate new student ID (assuming sequential IDs)
$new_sid = count($students_array) + 1;

// Create new student object
$new_student = array(
    'sid' => $new_sid,
    'name' => $name,
    'age' => $age,
    'address' => $address,
    'cgpa' => $cgpa
);

// Add new student to array
$students_array[] = $new_student;

// Encode array back to JSON
$new_students_json = json_encode($students_array, JSON_PRETTY_PRINT);

// Write JSON back to file
if (file_put_contents('students.json', $new_students_json)) {
    // Echo the newly added student record
    echo json_encode($new_student);
} else {
    echo json_encode(["error" => "Failed to write data to file. Check file permissions or path."]);
}
?>


