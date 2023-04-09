<?php
session_start();
if (!isset($_SESSION['login'])) {
    header('Location: ../?page=login');
}
require '../connect.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <?php include 'components/head.php'; ?>
</head>

<body class="hold-transition sidebar-mini">
    <?php include 'components/table.php'; ?>
    <?php include 'components/script.php'; ?>
</body>

</html>