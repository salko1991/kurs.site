<?php
echo '<h3>DZ3</h3>';
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
//Задача 6
?>
<h3><a href="task_six.php">Задача 6</a></h3>