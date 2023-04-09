<?php
require '../connect.php';

$username = $_POST['username'];
$password = $_POST['password'];
$hashPassword = md5($password);
$sql = "SELECT * FROM account WHERE username = '$username' AND password = '$hashPassword'";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    session_start();
    $_SESSION['login'] = "admin";
    header('Location: ../admin/');
} else {
    header('Location: ../?page=login');
}
