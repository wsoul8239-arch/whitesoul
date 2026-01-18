<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);
include "db.php";

if($_SERVER['REQUEST_METHOD'] == 'POST'){

    $student  = $conn->real_escape_string($_POST['student_id']); 
    $lecturer = $conn->real_escape_string($_POST['lecturer_name']);
    $category = $conn->real_escape_string($_POST['category']);
    $rating   = $conn->real_escape_string($_POST['rating']);
    $message  = $conn->real_escape_string($_POST['feedback_message']);

    $sql = "INSERT INTO feedback (student_name, lecturer_name, category, rating, message)
            VALUES ('$student', '$lecturer', '$category', '$rating', '$message')";

    if($conn->query($sql)){
        echo "<script>alert('Feedback sent successfully!'); window.location='feedback.html';</script>";
    } else {
        echo "Error: " . $conn->error;
    }
}
?>
