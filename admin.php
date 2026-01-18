<?php
include "db.php";
if($_SESSION['role'] != 'admin') die("Access denied");
?>

<h2>ADMIN PANEL</h2>

<h3>Feedback</h3>
<table border="1">
<tr><th>Student</th><th>Lecturer</th><th>Message</th><th>Date</th></tr>
<?php
$res = $conn->query("SELECT * FROM feedback");
while($row = $res->fetch_assoc()){
    echo "<tr>
        <td>$row[student_name]</td>
        <td>$row[lecturer_name]</td>
        <td>$row[message]</td>
        <td>$row[created_at]</td>
    </tr>";
}
?>
</table>

<h3>Complaints</h3>
<table border="1">
<tr><th>Complaint</th><th>Date</th></tr>
<?php
$res = $conn->query("SELECT * FROM complaints");
while($row = $res->fetch_assoc()){
    echo "<tr>
        <td>$row[complaint_text]</td>
        <td>$row[created_at]</td>
    </tr>";
}
?>
</table>