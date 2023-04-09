<?php
$page = isset($_GET["page"]) ? $_GET["page"] : '';
require 'connect.php';
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
		case 'payment':
			$total = isset($_GET["total"]) ? $_GET["total"] : '';
			$detail = isset($_GET["detail"]) ? $_GET["detail"] : '';
			$total = str_replace(",", "", $total);
			echo var_dump($total);
			$insert = "INSERT INTO orders(FULL_NAME, DETAIL) 
					VALUES ('" . $detail . "','" . $total . " บาท')";
			if ($conn->query($insert) === TRUE) {
				echo "<script>alert('Order success!')</script>";
			} else {
				echo "<script>alert('Order fail! " . $detail . " " . $total . " บาท')</script>";
			}
			echo '<script>window.location.href = "/";</script>';
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