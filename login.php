<?php
include "db.php";
if(!isset($_SESSION['role'])) {
    header("Location: login.php");
}
?>

<?php include "db.php"; ?>

<form method="POST">
    <input name="email" placeholder="Email"><br>
    <input name="password" type="password" placeholder="Password"><br>
    <button name="login">Login</button>
</form>

<?php
if(isset($_POST['login'])){
    $res = $conn->query("SELECT * FROM users WHERE email='$_POST[email]' AND password='$_POST[password]'");

    if($res->num_rows > 0){
        $user = $res->fetch_assoc();
        $_SESSION['role'] = $user['role'];
        $_SESSION['name'] = $user['name'];

        if($user['role'] == 'admin') header("Location: admin.php");
        else header("Location: Home.php");
    } else {
        echo "Invalid login!";
    }
}
?>
