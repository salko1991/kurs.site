<br />
<?php
echo '<h3>DZ4</h3>';
//1
function drawTable($col = 10, $row = 10, $color = '#c299ef', $even = true) {
	echo "<table>";
	for($i = 1; $i <= $row; $i++){
		echo "<tr>";
		for($j = 1; $j <= $col; $j++){
			$z = $i * $j;
			$pos = $i + $j;
			if (($pos % 2 == 1 && $even) || ($pos % 2 == 0 && !$even)) {
				echo "<td style='background-color: $color;'>".$z."</td>";
			} else {
				echo "<td>".$z."</td>";
			}
		}
		echo "</tr>";
	}
	echo "</table><br />";
}
echo '<h3>Задание 1</h3>';
drawTable(); 
drawTable(5, 6, 'red'); 
drawTable(7, 7, 'green', false); 
//1

//2
function showMenu($menu, $horizontalShow) {
	echo '<ul>';
		foreach($menu as $item) {
			if((int)$item->visible == 1 && (int)$item->menu_id == 1) {
				echo "<li ".($horizontalShow?"style='display:inline-block; margin: 10px;'":"")."><a href=".$item->url.">$item->name</a></li>";
			}
		}
	echo '</ul>';
}
require_once 'pagesArray.php';

echo '<h3>Задание 2</h3>';
showMenu($dataPages_arr, false);
showMenu($dataPages_arr, true);
//2
//4
echo '<h3>Задание 4</h3>';
require 'categories_array.php';

function buildCategories(&$categories_data, $categoryItem = null) {
	if ($categories_data) {
		foreach ($categories_data as $key => $category) {
			if (is_null($categoryItem) && $category->parent_id != 0) {
				unset($categories_data[$key]);
				buildCategories($categories_data, $category);
			} elseif (!is_null($categoryItem) && $category->id == $categoryItem->parent_id) {
				$category->subcategories[] = $categoryItem;
			} elseif (isset($category->subcategories) && !empty($category->subcategories)) {
				buildCategories($category->subcategories, $categoryItem);
			}
		}
	}
}
buildCategories($categories_data);
function getCategories($categories) {
    if($categories) { // проверка лишней не бывает
        echo "<ul>";
        foreach ($categories as $category) {
           if($category->visible) { //важная проверка, которая позволит выводит только включенные категории на сайте
               echo "<li>$category->name </li>";
               if(isset($category->subcategories)) {
                   // проверяем есть ли подкатегории и вызываем заново функцию для вывода
                   getCategories($category->subcategories); // передаем в функцию уже массив обьектов покатегорий
               }
           }
        }
        echo "</ul>";
    }
}
getCategories($categories_data);
//4
?>