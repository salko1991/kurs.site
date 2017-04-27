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
<?php
//Задача 6
//echo '<h3>Задача 6</h3>';
require_once 'pagesArray.php';
require_once 'productsArray.php';
//Задача 6
?>
<div class="container-fluid">
<!--menu-->
    <nav class="navbar navbar-default navbar-static-top" role="navigation">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-7">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
        </div>

        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-7">
          <ul class="nav navbar-nav">
            <?php foreach($dataPages_arr as $page) { ?>
				<?php if((int)$page->visible == 1 && (int)$page->menu_id == 1){ ?>
					<li><a href="<?php echo ($page->url)?$page->url:'index.php'; ?>"><?php echo $page->name; ?></a></li>
				<?php } ?>
			<?php } ?>
          </ul>
        </div>
      </div>
    </nav>
<!--menu-->

	<div class="row-fluid">
		<div class="allCart">
			<span class="glyphicon glyphicon-shopping-cart cartImage"></span>
			<div class="cartText">
				<div><strong>Корзина</strong></div>
				<div>Корзина пуста</div>
			</div>
		</div>
	</div>

	<div class="row-fluid">
		<div class="col-sm-2 col-md-2 col-lg-2 hidden-xs">
			<div class="btn-group categoriesGroupButon">
			  <button type="button" class="btn btn-info dropdown-toggle categoriesButton" data-toggle="dropdown">Категории <span class="caret"></span></button>
			  <ul class="dropdown-menu" role="menu">
			    <li><a href="#">Категория1</a></li>
			    <li><a href="#">Категория2</a></li>
			    <li><a href="#">Категория3</a></li>
			    <li><a href="#">Категория4</a></li>
			  </ul>
			</div>
			<div class="emptyBlock"></div>
			<div class="filterColor">
				<input type="checkbox" id="all" name="all" checked="checked" class="marginLeft"><label for="all">Все</label><br />
				<input type="checkbox" id="connect" name="connect" class="marginLeft"><label for="connect">Connect</label>
			</div>
		</div>
		<div class="col-xs-12 col-sm-10 col-md-10 col-lg-10">
			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
				<a href="">Главная ></a> Детские товары<br />
				<h3>Детские товары</h3>
			</div>

			<div class="row-fluid">
				<?php foreach($dataProducts_arr as $product) { ?>
					<?php if((int)$product->visible == 1){ ?>
					  <div class="col-xs-6 col-sm-6 col-md-4 productMinWidth">
					    <div class="thumbnail productMinHeight">
					   	  <div class="productDate"><?= date_create($product->created)->Format('d.m.Y'); ?></div>
					      <img src="generator.png" data-src="holder.js/300x200" alt="<?= $product->name; ?>">
					      <div class="caption">
					        <h5 class="productTextCenter"><a href="<?= $product->url; ?>"><?= $product->name; ?></a></h5>
					        <h4 class="productTextCenter"><?= $product->variants[0]->price; ?> грн.</h4>
					        <p class="productTextCenter">На складе <?= $product->variants[0]->stock; ?> штук</p>
					        <p class="notShow"><a href="#" class="btn btn-primary" role="button">Кнопка</a> <a href="#" class="btn btn-default" role="button">Кнопка</a></p>
					      </div>
					    </div>
					  </div>
					<?php } ?>
				<?php } ?>
			</div>
		</div>
	</div>
</div>
</body>
</html>