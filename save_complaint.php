<?php
include "db.php";

$conn->query("INSERT INTO complaints (complaint_text)
              VALUES ('$_POST[complaint_text]')");

echo "<script>alert('Complaint sent'); window.location='Complaints.php';</script>";
?>