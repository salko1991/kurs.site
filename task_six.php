<?php
setcookie('HTTP_REFERER', isset($_SERVER['HTTP_REFERER'])?$_SERVER['HTTP_REFERER']:'Прямой переход!', time() + 3600, '/');
setcookie('REQUEST_TIME', date('Y.m.d H:i:s', $_SERVER['REQUEST_TIME']), time() + 3600, '/');
if (isset($_COOKIE['cart'])) {
	$cart = unserialize($_COOKIE['cart']);
} else {
	$cart = array();
}
if ($_SERVER["REQUEST_METHOD"] == "POST") {
	if (isset($_POST['product_id']) && isset($_POST['quantity'])) {
		$product_id = $_POST['product_id'];
		$quantity = (int)$_POST['quantity'];
		if ($quantity < 1) $quantity = 1;
		if (!empty($cart) && array_key_exists($product_id, $cart)) {
			$cart[$product_id] += $quantity;
		} else {
			$cart[$product_id] = $quantity;
		}
		setcookie('cart', serialize($cart), time() + 3600, '/');
	}
}
if (!empty($cart)) {
	$count = 0;
	foreach ($cart as $key => $value) {
		$count += $value;
	}
} else {
	$count = 0;
}
?>
<!DOCTYPE HTML>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <title>Курсы</title>
    <script src="//ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">

	<!-- Optional theme -->
	<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap-theme.min.css">

	<!-- Latest compiled and minified JavaScript -->
	<script src="//netdna.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <style type="text/css">
    	table {
    		border-collapse: collapse; /* Убираем двойные линии между ячейками */
   		}
	    td, th {
	    	padding: 3px; /* Поля вокруг содержимого таблицы */
	    	border: 1px solid black; /* Параметры рамки */
	    	text-align: center;
	    	width: 20px;
	    	height: 20px;
	    }
	    .tdBlack {
	    	background-color: #000000;
	    }
	    label {
	    	cursor: pointer;
	    }
	    .marginLeft {
	    	margin-left: 10px!important;
	    }
	    .allCart {
	    	text-align: right; position: relative; right: 20px;
	    }
	    .cartText {
	    	display: inline-block; text-align: left;
	    }
	    .cartImage {
	    	font-size: 40px; color: #FFD700;
	    }
	    .categoriesGroupButon {
	    	width: 100%;
	    }
	    .categoriesButton {
	    	width: 100%; border-radius: 0px;
	    }
	    .emptyBlock {
	    	height: 200px; border: 2px solid black; margin: 10px 0px;
	    }
	    .filterColor {
	    	color: #5F9EA0;
	    }
	    .productMinWidth {
	    	min-width: 200px;
	    }
	    .productMinHeight {
	    	min-height: 340px;
	    }
	    .productDate {
	    	position: absolute; right: 20px;
	    }
	    .productTextCenter {
	    	text-align: center;
	    }
	    .notShow {
	    	display: none;
	    }
    </style>
</head>
<body>
<div class="container-fluid">
	<?php require_once 'page/menu.php'; ?>
	<div class="row-fluid">
		<?php require_once 'page/block_left.php'; ?>
		<?php require_once 'page/content.php'; ?>
	</div>
</div>
<?php
echo 'Предыдущая страница: '.(isset($_SERVER['HTTP_REFERER'])?$_SERVER['HTTP_REFERER']:'Прямой переход!').'<br />';
echo 'Дата посещения: '.date('Y.m.d H:i:s', $_SERVER['REQUEST_TIME']);
?>
</body>
</html>