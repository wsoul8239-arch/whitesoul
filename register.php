<?php include "db.php"; ?>
<form method="POST">
    <input name="name" placeholder="Name" required><br>
    <input name="email" placeholder="Email" required><br>
    <input name="password" type="password" placeholder="Password" required><br>

    <select name="role">
        <option value="student">Student</option>
        <option value="lecturer">Lecturer</option>
    </select><br>

    <button name="register">Register</button>
</form>

<?php
if(isset($_POST['register'])){
    $sql = "INSERT INTO users (name,email,password,role)
            VALUES ('$_POST[name]','$_POST[email]','$_POST[password]','$_POST[role]')";
    $conn->query($sql);
    echo "Registered successfully!";
}
?>
