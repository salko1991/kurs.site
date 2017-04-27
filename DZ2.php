<!DOCTYPE HTML>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <title>Курсы</title>
    <style type="text/css">
    	#currencyExchange p:before, #priseTalk p:before, #inchTranslation p:before {
    		content: " - "
    	}
    	table {
    		border-collapse: collapse; /* Убираем двойные линии между ячейками */
   		}
	    td, th {
	    	padding: 3px; /* Поля вокруг содержимого таблицы */
	    	border: 1px solid black; /* Параметры рамки */
	     } 
	    #menu li {
	    	display: block;
		    float: left;
		    border-right: 1px solid #5d5d5d;
		    border-left: 1px solid #929292;
		    width: 105px;
		    height: 34px;
		    border-bottom: 1px solid #575757;
		    border-top: 1px solid #797979;
		    background-image: -webkit-gradient(linear, left bottom, left top, color-stop(0, #787878), color-stop(0.5, #5E5E5E), color-stop(0.51, #707070), color-stop(1, #838383));
		    background-image: -moz-linear-gradient(center bottom, #787878 0%, #5E5E5E 50%, #707070 51%, #838383 100%);
		    background-color: #5f5f5f;
	    }
	    #menu li:first-child {
		    border-radius: 4px 0 0 4px;
		    border-left: none;
		}
		#menu li:last-child {
		    border-radius: 0 4px 4px 0;
		    border-right: none;
		}
		#menu li:hover {
		    background-image: -webkit-gradient(linear, left bottom, left top, color-stop(0, #3F3F3F), color-stop(0.5, #383838), color-stop(0.51, #434343), color-stop(1, #555555));
		    background-image: -moz-linear-gradient(center bottom, #3F3F3F 0%, #383838 50%, #434343 51%, #555555 100% );
		    background-color: #383838;
		    -moz-box-shadow: inset 0 0 5px 5px #535353;
		    -webkit-box-shadow: inset 0 0 5px 5px #535353;
		    box-shadow: inset 0 0 5px 5px #535353;
		}
	    #menu li a {
	    	color: white;
		    text-decoration: none;
		    text-align: center;
		    display: block;
		    line-height: 34px;
		    outline: none;
	    }
    </style>
</head>
<body>
<?php
echo '<h3>DZ2</h3>';
// Задача1
$hour_int = (int)strftime('%H');
$welcome = '';

if(($hour_int>0) && ($hour_int<6)){
	$welcome = 'Доброй ночи';
}elseif(($hour_int>6) && ($hour_int<12)){
	$welcome = 'Доброе утро';
}elseif(($hour_int>12) && ($hour_int<18)){
	$welcome = 'Добрый день';
}elseif(($hour_int>18) && ($hour_int<23)){
	$welcome = 'Добрый вечер';
}else{
	$welcome = 'Доброй ночи';
}
// Задача1

// Задача2
$leftMenu = array(
'home'=>'index.php', 
'about'=>'about.php', 
'contacts'=>'contact.php',
'table'=>'table.php',
'calc'=>'calc.php'
);
// Задача2
?>
<h3>Задача 1</h3>
<h1><?php echo $welcome; ?>, Гость!</h1>
<h3>Задача 2</h3>
<ul id="menu">
	<li><a href='<?= $leftMenu['home']; ?>' title="Домой">Домой</a></li>
	<li><a href='<?= $leftMenu['about']; ?>' title="О нас">О нас</a></li>
	<li><a href='<?= $leftMenu['contacts']; ?>' title="Контакты">Контакты</a></li>
	<li><a href='<?= $leftMenu['table']; ?>' title="Таблица">Таблица</a></li>
	<li><a href='<?= $leftMenu['calc']; ?>' title="Калькулятор">Калькулятор</a></li>
</ul>
<br />
<br />
<br />
<?php
// Задача3
$date_int = rand(1, 7);
$whatDay_str = '';
switch($date_int) {
	case $date_int>=1 && $date_int<=5:
		$whatDay_str = 'это рабочий день';
		break;
	default:
		$whatDay_str = 'это выходной день';
		break;
}
// Задача3
?>
<h3>Задача 3</h3>
<p><?= $whatDay_str; ?></p>
<?php
// Задача4
$x_int = rand(1, 1000);
$y_int = rand(1, 1000);
$xMod3_int = $x_int % 3;
$xMod5_int = $x_int % 5;
$yMod3_int = $y_int % 3;
$yMod5_int = $y_int % 5;

$z_int = rand(1, 1000);
$zInc03_int = $z_int * 1.3;
$zInc12_int = $z_int * 2.2;

$i_int = rand(1, 1000);
$j_int = rand(1, 1000);
$sumI40J84_int = $i_int * 0.4 + $j_int * 0.84;
// Задача4
?>
<h3>Задача 4</h3>
<p>Даны натуральные числа: <?= $x_int; ?>, <?= $y_int; ?></p>
<p>Остаток от деления <?= $x_int; ?> на 3 = <?= $xMod3_int; ?></p>
<p>Остаток от деления <?= $x_int; ?> на 5 = <?= $xMod5_int; ?></p>
<p>Остаток от деления <?= $y_int; ?> на 3 = <?= $yMod3_int; ?></p>
<p>Остаток от деления <?= $y_int; ?> на 5 = <?= $yMod5_int; ?></p>
<p>Дано число: <?= $z_int; ?></p>
<p>Увеличеное число <?= $z_int; ?> на 30% = <?= $zInc03_int; ?>, а на 120% = <?= $zInc12_int; ?></p>
<p>Даны числа: <?= $i_int; ?>, <?= $j_int; ?></p>
<p>Сумма 40% * <?= $i_int; ?> и 84% * <?= $j_int; ?> = <?= $sumI40J84_int; ?></p> 
<?php
// Задача5
$a_int = rand(1, 50);
if($a_int > 10){
	$aAns_int = $a_int + 100;
}else{
	$aAns_int = $a_int - 30;
}
$b_int = rand(1, 1000);
if($b_int % 2 == 0){
	$bAns_int = $b_int / 2;
}else{
	$bAns_int = $b_int * 3;
}
$c_int = rand(1, 100);
if($c_int > 50){
	$cAns_int = pow($c_int, 2);
}elseif($c_int > 10 && $c_int < 30){
	$cAns_int = 0;
}else{
	unset($cAns_int);
	$cAns_str = 'Ошибка';
}
$d_int = rand(1, 100);
$e_int = rand(1, 100);
$deAns = max($d_int, $e_int);
$f_int = rand(1, 100);
$g_int = rand(1, 100);
if(abs($f_int - $g_int) == 100){
	$fgAns_str = 'Да';
}else{
	$fgAns_str = 'Нет';
}
$h_int = rand(1, 100);
$i_int = rand(1, 100);
if(abs($h_int - $i_int) < 20){
	$hiAns_str = 'Да';
}else{
	$hiAns_str = 'Нет';
}
$month_int = rand(1, 15);
switch ($month_int) {
	case in_array($month_int, [12, 1, 2]):
		$monthName = 'Зима';
		break;
	case in_array($month_int, [3, 4, 5]):
		$monthName = 'Весна';
		break;
	case in_array($month_int, [6, 7, 8]):
		$monthName = 'Лето';
		break;
	case in_array($month_int, [9, 10, 11]):
		$monthName = 'Осень';
		break;
	default:
		$monthName = 'Ошибка';
		break;
}
// Задача5
?>
<h3>Задача 5</h3>
<p>Дано число: <?= $a_int; ?>. Если оно больше 10, то увеличьте его на 100, иначе уменьшите на 30. Итог: <?= $aAns_int; ?>.</p>
<p>Дано число: <?= $b_int; ?>. Если оно четное, то уменьшите его в 2 раза, иначе увеличьте в 3 раза. Итог: <?= $bAns_int; ?>.</p>
<p>Дано число: <?= $c_int; ?>. Если оно не меньше 50, то выведите квадрат этого числа, если же это число больше 10 и меньше 30, то выведите ноль, в остальных случаях выведите слово "Ошибка". Итог: <?= (isset($cAns_int) ? $cAns_int : $cAns_str)?>.</p>
<p>Дано два числа: <?= $d_int?> и <?= $e_int?>. Наибольшее из них: <?= $deAns?>.</p>
<p>Дано два числа: <?= $f_int?> и <?= $g_int?>. 'Да', если они отличаются на 100, иначе 'Нет'. Итог: <?= $fgAns_str?></p>
<p>Дано два числа: <?= $h_int?> и <?= $i_int?>. 'Да', если они отличаются не более чем на 20, иначе 'Нет'. Итог: <?= $fgAns_str?></p>
<p>Дан номер месяца: <?= $month_int?>. Итог: <?= $monthName?>.</p>
<?php
// Задача6
// Задача6
?>
<h3>Задача 6</h3>
<table
	<tr>
		<th>Выражение</th>
		<th>gettype()</th>
		<th>empty()</th>
		<th>isset()</th>
		<th>boolean : if($x)</th>
	</tr>
	<tr>
		<td>$x = "";<?php $x = ""; ?></td>
		<td><?php echo gettype($x); ?></td>
		<td><?php echo (empty($x)?'true':'false'); ?></td>
		<td><?php echo (isset($x)?'true':'false'); ?></td>
		<td><?php echo $x?'true':'false'; ?></td>
	</tr>
	<tr>
		<td>$x = null;<?php $x = null; ?></td>
		<td><?php echo gettype($x); ?></td>
		<td><?php echo (empty($x)?'true':'false'); ?></td>
		<td><?php echo (isset($x)?'true':'false'); ?></td>
		<td><?php echo $x?'true':'false'; ?></td>
	</tr>
	<tr>
		<td>unset($x);<?php unset($x); ?></td>
		<td><?php echo gettype($x); ?></td>
		<td><?php echo (empty($x)?'true':'false'); ?></td>
		<td><?php echo (isset($x)?'true':'false'); ?></td>
		<td><?php echo $x?'true':'false'; ?></td>
	</tr>
	<tr>
		<td>$x = array();<?php $x = array(); ?></td>
		<td><?php echo gettype($x); ?></td>
		<td><?php echo (empty($x)?'true':'false'); ?></td>
		<td><?php echo (isset($x)?'true':'false'); ?></td>
		<td><?php echo $x?'true':'false'; ?></td>
	</tr>
	<tr>
		<td>$x = false;<?php $x = false; ?></td>
		<td><?php echo gettype($x); ?></td>
		<td><?php echo (empty($x)?'true':'false'); ?></td>
		<td><?php echo (isset($x)?'true':'false'); ?></td>
		<td><?php echo $x?'true':'false'; ?></td>
	</tr>
	<tr>
		<td>$x = true;<?php $x = true; ?></td>
		<td><?php echo gettype($x); ?></td>
		<td><?php echo (empty($x)?'true':'false'); ?></td>
		<td><?php echo (isset($x)?'true':'false'); ?></td>
		<td><?php echo $x?'true':'false'; ?></td>
	</tr>
	<tr>
		<td>$x = 1;<?php $x = 1; ?></td>
		<td><?php echo gettype($x); ?></td>
		<td><?php echo (empty($x)?'true':'false'); ?></td>
		<td><?php echo (isset($x)?'true':'false'); ?></td>
		<td><?php echo $x?'true':'false'; ?></td>
	</tr>
	<tr>
		<td>$x = 42;<?php $x = 42; ?></td>
		<td><?php echo gettype($x); ?></td>
		<td><?php echo (empty($x)?'true':'false'); ?></td>
		<td><?php echo (isset($x)?'true':'false'); ?></td>
		<td><?php echo $x?'true':'false'; ?></td>
	</tr>
	<tr>
		<td>$x = 0;<?php $x = 0; ?></td>
		<td><?php echo gettype($x); ?></td>
		<td><?php echo (empty($x)?'true':'false'); ?></td>
		<td><?php echo (isset($x)?'true':'false'); ?></td>
		<td><?php echo $x?'true':'false'; ?></td>
	</tr>
	<tr>
		<td>$x = -1;<?php $x = -1; ?></td>
		<td><?php echo gettype($x); ?></td>
		<td><?php echo (empty($x)?'true':'false'); ?></td>
		<td><?php echo (isset($x)?'true':'false'); ?></td>
		<td><?php echo $x?'true':'false'; ?></td>
	</tr>
	<tr>
		<td>$x = "1";<?php $x = "1"; ?></td>
		<td><?php echo gettype($x); ?></td>
		<td><?php echo (empty($x)?'true':'false'); ?></td>
		<td><?php echo (isset($x)?'true':'false'); ?></td>
		<td><?php echo $x?'true':'false'; ?></td>
	</tr>
	<tr>
		<td>$x = "0";<?php $x = "0"; ?></td>
		<td><?php echo gettype($x); ?></td>
		<td><?php echo (empty($x)?'true':'false'); ?></td>
		<td><?php echo (isset($x)?'true':'false'); ?></td>
		<td><?php echo $x?'true':'false'; ?></td>
	</tr>
	<tr>
		<td>$x = "-1";<?php $x = "-1"; ?></td>
		<td><?php echo gettype($x); ?></td>
		<td><?php echo (empty($x)?'true':'false'); ?></td>
		<td><?php echo (isset($x)?'true':'false'); ?></td>
		<td><?php echo $x?'true':'false'; ?></td>
	</tr>
	<tr>
		<td>$x = "php";<?php $x = "php"; ?></td>
		<td><?php echo gettype($x); ?></td>
		<td><?php echo (empty($x)?'true':'false'); ?></td>
		<td><?php echo (isset($x)?'true':'false'); ?></td>
		<td><?php echo $x?'true':'false'; ?></td>
	</tr>
	<tr>
		<td>$x = "true";<?php $x = "true"; ?></td>
		<td><?php echo gettype($x); ?></td>
		<td><?php echo (empty($x)?'true':'false'); ?></td>
		<td><?php echo (isset($x)?'true':'false'); ?></td>
		<td><?php echo $x?'true':'false'; ?></td>
	</tr>
	<tr>
		<td>$x = "false";<?php $x = "false"; ?></td>
		<td><?php echo gettype($x); ?></td>
		<td><?php echo (empty($x)?'true':'false'); ?></td>
		<td><?php echo (isset($x)?'true':'false'); ?></td>
		<td><?php echo $x?'true':'false'; ?></td>
	</tr>
	<br />
</table>
</body>
</html>