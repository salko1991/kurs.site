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
    </style>
</head>
<body>
<?php
//Задача 1
echo '<h3>Задача 1</h3>';
echo '<table>';
for($i = 0; $i < 10; $i++){
	echo '<tr>';
	for($j = 0; $j < 10; $j++){
		if(($i +$j) % 2 == 1){
			echo '<td class="tdBlack"></td>';
		}else{
			echo '<td></td>';	
		}
	}
	echo '</tr>';
}
echo '</table>';
echo '<br />';
//Задача 1

//Задача 2
echo '<h3>Задача 2</h3>';
$taskTwo_arr = array();
$taskTwoSumThree_int = 0;
for ($i=0; $i < 10; $i++) { 
	$taskTwo_arr[$i] = rand(1, 10);
	if(($i +1) % 3 == 0){
		$taskTwoSumThree_int += $taskTwo_arr[$i];
	}
}
echo '<br />Итоговый массив: ';
print_r($taskTwo_arr);
echo '<br />';
echo 'Сумма каждого 3 элемента в массиве: '.$taskTwoSumThree_int;
echo '<br />';
//Задача 2

//Задача 3
echo '<h3>Задача 3</h3>';
$taskThree_arr = array();
$temp_int;
for ($i=0; $i < 10; $i++) { 
	$temp_int = rand(1, 10);
	if(in_array($temp_int, $taskThree_arr)){
		echo 'число '.$temp_int.' находиться в массиве '.print_r($taskThree_arr, true).'<br />';
	}
	$taskThree_arr[$i] = $temp_int;
}
echo '<br />Итоговый массив: ';
print_r($taskThree_arr);
echo '<br />';
//Задача 3

//Задача 4
echo '<h3>Задача 4</h3>';
$taskFour_arr = array();
$taskFive_arr = array();
$taskSixDiff_arr = array();
for ($i=0; $i < 20; $i++) {
	$taskFour_arr[] = rand(1, 20);
	$taskFive_arr[] = rand(1, 20);
}
$taskSixDiff_arr = array_diff($taskFour_arr, $taskFive_arr);
echo '<br />';
echo 'Массив1: ';
print_r($taskFour_arr);
echo '<br />';
echo 'Массив2: ';
print_r($taskFive_arr);
echo '<br />';
echo 'Массив из элементов массива1, которых нет в массиве2: ';
print_r($taskSixDiff_arr);
echo '<br />';
//Задача 4

//Задача 5
echo '<h3>Задача 5</h3>';
require_once 'pagesArray.php';
//Задача 5
?>
<ul>
	<?php foreach($dataPages_arr as $page) { ?>
		<?php if((int)$page->visible == 1 && (int)$page->menu_id == 1){ ?>
			<li><a href="<?php echo $page->url; ?>"><?php echo $page->name; ?></a></li>
		<?php } ?>
	<?php } ?>
</ul>
<?php
//Задача 6
require_once 'productsArray.php';
//print_r($dataProducts_arr);
//Задача 6
?>
<h3><a href="task_six.php">Задача 6</a></h3>
<!--<div class="container-fluid">

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
					<li><a href="<?php echo $page->url; ?>"><?php echo $page->name; ?></a></li>
				<?php } ?>
			<?php } ?>
          </ul>
        </div>
      </div>
    </nav>


	<div class="row-fluid">
		<div style="text-align: right; position: relative; right: 20px;">
			<span class="glyphicon glyphicon-shopping-cart" style="font-size: 40px; color: #FFD700; "></span>
			<div style="display: inline-block; text-align: left;">
				<div><strong>Корзина</strong></div>
				<div>Корзина пуста</div>
			</div>
		</div>
	</div>

	<div class="row-fluid">
		<div class="col-sm-2 col-md-2 col-lg-2 hidden-xs">
			<div class="btn-group" style="width: 100%;">
			  <button type="button" class="btn btn-info dropdown-toggle" data-toggle="dropdown" style="width: 100%; border-radius: 0px;">Категории <span class="caret"></span></button>
			  <ul class="dropdown-menu" role="menu">
			    <li><a href="#">Категория1</a></li>
			    <li><a href="#">Категория2</a></li>
			    <li><a href="#">Категория3</a></li>
			    <li><a href="#">Категория4</a></li>
			  </ul>
			</div>
			<div style="height: 200px; border: 2px solid black; margin: 10px 0px;"></div>
			<div style="color: #5F9EA0;">
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
					  <div class="col-xs-6 col-sm-6 col-md-4" style="min-width: 200px;">
					    <div class="thumbnail" style="min-height: 340px;">
					   	  <div style="position: absolute; right: 20px;"><?= date_create($product->created)->Format('d.m.Y'); ?></div>
					      <img src="generator.png" data-src="holder.js/300x200" alt="<?= $product->name; ?>">
					      <div class="caption">
					        <h5 style="text-align: center;"><a href="<?= $product->url; ?>"><?= $product->name; ?></a></h5>
					        <h4 style="text-align: center;"><?= $product->variants[0]->price; ?> грн.</h4>
					        <p style="text-align: center;">На складе <?= $product->variants[0]->stock; ?> штук</p>
					        <p style="display: none;"><a href="#" class="btn btn-primary" role="button">Кнопка</a> <a href="#" class="btn btn-default" role="button">Кнопка</a></p>
					      </div>
					    </div>
					  </div>
					<?php } ?>
				<?php } ?>
			</div>
		</div>
	</div>
</div>
-->
<?php
require_once 'DZ4.php';
?>
<div style="width: 300px; height: 500px;"></div>
</body>
</html>