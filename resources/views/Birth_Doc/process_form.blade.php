<?php
// Check if the form is submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Retrieve form data
    $childName = $_POST['child_name'];
    $dateOfBirth = $_POST['date_of_birth'];
    $placeOfBirth = $_POST['place_of_birth'];
    $motherName = $_POST['mother_name'];
    $fatherName = $_POST['father_name'];
    $contactNumber = $_POST['contact_number'];

    // Perform any necessary processing here
    // For example, you can save the data to a database or generate the birth certificate

    // Display a success message
    echo "Thank you, $childName's birth certificate application has been submitted successfully!";
} else {
    // Redirect the user back to the form if accessed directly without submitting
    header("Location: birth.blade.php");
    exit;
}
?>