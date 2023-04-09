<?php
$page = isset($_GET["page"]) ? $_GET["page"] : '';

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <?php include 'components/head.php'; ?>
</head>

<body class="animsition">

    <?php
	include 'components/menu.php';
	switch ($page) {
		case 'cart':
			include 'pages/cart.php';
			break;
		case 'login':
			include 'pages/login.php';
			break;
		default:
			include 'components/banner.php';
			break;
	}
	?>

    <div class="btn-back-to-top bg0-hov" id="myBtn">
        <span class="symbol-btn-back-to-top">
            <i class="fa fa-angle-double-up" aria-hidden="true"></i>
        </span>
    </div>
    <div id="dropDownSelect1"></div>
    <?php include 'components/script.php'; ?>
</body>

</html>