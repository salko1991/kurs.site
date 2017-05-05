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
		    #product_img {
		    	text-align: center;
		    }
		    #product_img img {
		    	border: 1px solid #ddd;
		    }
	    </style>
</head>
<body>
<?php
$product_id = $_GET['product_id'];
require_once '../productsArray.php';
foreach ($dataProducts_arr as $key => $product1) {
	if (reset($product1->variants)->product_id == $product_id) {
		$product = $product1;
		break;
	}
}
?>
<div class="container-fluid">
	<?php require_once '../page/menu.php'; ?>
	<div class="row-fluid" style="margin-top: 15px;">
		<?php require_once '../page/block_left.php'; ?>
		<div class="col-xs-12 col-sm-10 col-md-10 col-lg-10" style="border: 0px solid black; box-shadow: inset 0px 0px 3px rgba(10,10,10,0.25); padding-top: 15px;">
			<div class="container-fluid">
				<div class="row-fluid">
					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12" style="border: 0px solid black;">
						<h3><?php echo $product->name; ?></h3>
					</div>
					<div id="product_img" class="col-xs-12 col-sm-5 col-md-4 col-lg-4" style="border: 0px solid black;">
						<img src="../generator.png">
					</div>
					<div class="col-xs-12 col-sm-5 col-md-4 col-lg-4" style="border: 0px solid black;">
						<p>Цена: <?php echo reset($product1->variants)->price; ?> Грн.</p>
						<p>Код продукта: <?php echo reset($product1->variants)->product_id; ?> Грн.</p>
						<p> И прочая инфа </p>
					</div>
					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12" style="border: 0px solid black;">
						<h3>Описание:</h3>
						<?php echo $product->description; ?>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
</body>
</html>