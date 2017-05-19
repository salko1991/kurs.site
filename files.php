<style type="text/css">
	img {
		width: 100px;
	}
	table {
		width: 90%;
    	margin: 0 auto;
    	background-color: #dcdcdc;
	}
	input[type="file"] {
		margin-bottom: 20px;
	}
	.imgName {
		margin: 0px;
    	text-align: center;
	}
	form.fil {
		margin-left: 30px;
	}
	td {
		border: 2px solid white;
	}
	.center {
		box-sizing: border-box;
    	padding: 0px 50px;
	}
</style>
<?php

echo "FILES<br />";

function rus2translit($string) {
    $converter = array(
        'а' => 'a',   'б' => 'b',   'в' => 'v',
        'г' => 'g',   'д' => 'd',   'е' => 'e',
        'ё' => 'e',   'ж' => 'zh',  'з' => 'z',
        'и' => 'i',   'й' => 'y',   'к' => 'k',
        'л' => 'l',   'м' => 'm',   'н' => 'n',
        'о' => 'o',   'п' => 'p',   'р' => 'r',
        'с' => 's',   'т' => 't',   'у' => 'u',
        'ф' => 'f',   'х' => 'h',   'ц' => 'c',
        'ч' => 'ch',  'ш' => 'sh',  'щ' => 'sch',
        'ь' => '\'',  'ы' => 'y',   'ъ' => '\'',
        'э' => 'e',   'ю' => 'yu',  'я' => 'ya',
        
        'А' => 'A',   'Б' => 'B',   'В' => 'V',
        'Г' => 'G',   'Д' => 'D',   'Е' => 'E',
        'Ё' => 'E',   'Ж' => 'Zh',  'З' => 'Z',
        'И' => 'I',   'Й' => 'Y',   'К' => 'K',
        'Л' => 'L',   'М' => 'M',   'Н' => 'N',
        'О' => 'O',   'П' => 'P',   'Р' => 'R',
        'С' => 'S',   'Т' => 'T',   'У' => 'U',
        'Ф' => 'F',   'Х' => 'H',   'Ц' => 'C',
        'Ч' => 'Ch',  'Ш' => 'Sh',  'Щ' => 'Sch',
        'Ь' => '\'',  'Ы' => 'Y',   'Ъ' => '\'',
        'Э' => 'E',   'Ю' => 'Yu',  'Я' => 'Ya',
    );
    return strtr($string, $converter);
}
//phpinfo();
/*function mode($path) {
	return substr(decoct(fileperms('test.txt')), -3);
}
$file = fopen('test.txt', 'w+');
echo mode('test.txt').'<br />';
//if (mode('test.txt') != '777') {
chmod('test.txt', 0777);
//}
echo mode('test.txt').'<br />';
for ($i=0; $i < 100; $i++) { 
	fwrite($file, rand(1, 1000).PHP_EOL);
	if ($i == 99) {
		fwrite($file, rand(1, 1000));
	}
}
$numbers = array();
rewind($file);
while ($line = (int)fgets($file)) {
	if ($line % 2 == 0) {
		$numbers[] = $line;
	}
}
print_r($numbers);
fclose($file);*/
/*
$thisDir = opendir('.');

closedir($thisDir);*/
//33188 1000000110100100 100644
//33279 1000000111111111 100777
?>

<?php
if ($_SERVER["REQUEST_METHOD"] == 'POST' && isset($_POST['name']) && $_POST['name']) {
	$h = fopen('guestbook.txt', 'a+');
	fwrite($h, date('Y.m.d H:i:s') . ' :: ' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'] . ' :: ' . $_POST['name'] . PHP_EOL);
	fclose($h);
}
$guests = file('guestbook.txt', FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
?>
<form method="post" action="<?php echo $_SERVER['REQUEST_URI']; ?>">
	<input type="text" name="name" required="required">
	<input type="submit" name="submit" value="guest">
</form>
<?php 
	if (!empty($guests)) {
		foreach ($guests as $key => $value) { ?>
			<p><?php echo $value; ?></p>
<?php }} else echo "<p>Гостей не было!</p>"; ?>

<?php
if (($hNumbers = fopen('numbers.txt', 'w')) && ($numb = array())) {
	for ($i=0; $i < 1000; $i++) fwrite($hNumbers, rand(1, 500).PHP_EOL);
	fclose($hNumbers);
	if (($numb = file('numbers.txt', FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES)) && ($even = fopen('numbers0.txt', 'w+')) && ($odd = fopen('numbers1.txt', 'w+'))) {
		foreach ($numb as $key => $value) {
			if ($value % 2 == 0) fwrite($even, $key.' => '.$value.PHP_EOL);
			else fwrite($odd, $key.' => '.$value.PHP_EOL);
		}
	}
}
?>

<?php
$type = array('png', 'gif', 'jpg', 'jpeg', 'ico'); 
if ($_SERVER["REQUEST_METHOD"] == 'POST' && $_FILES) {
	$name = $tname = rus2translit(trim($_FILES['filename']['name']));
	$file = $_FILES['filename']['tmp_name'];
	$file_type = pathinfo($name, PATHINFO_EXTENSION);
	$i = 1;
	$justName = substr($name, 0, -1 * (strlen($file_type) + 1));
	while (file_exists('download/'.$tname)) {
		$tname = $justName . $i . '.' . $file_type;
		$i++;
	}
	$name = $tname;

	if (in_array($file_type, $type)) {
		$res = move_uploaded_file($file, 'download/'.$name);
		if ($res) {
			//echo 'OK';
		} else {
			echo 'Ошибка загрузки файла.';
		}
	} else {
		echo 'Неверный тип файла.';
	}
}
$downloadFiles = scandir('download');
$downloadFiles = array_flip($downloadFiles);
unset($downloadFiles['.']);
unset($downloadFiles['..']);
$downloadFiles = array_flip($downloadFiles);
?>

<table>
	<tr>
		<td>
			<form method="post" enctype="multipart/form-data" action="<?php echo $_SERVER['REQUEST_URI']; ?>" class="fil">
				<p>Загрузите фото!</p>
				<input type="file" name="filename" value="" required="required"><br />
				<input type="submit" name="go" value="upload">
			</form>
		</td>
		<td>
			<div class="center">
				<?php foreach($downloadFiles as $value) { ?>
					<div style="display: inline-block; margin: 10px;">
						<img src="download/<?php echo $value; ?>">
						<p class="imgName"><?php echo $value; ?></p>
					</div>
				<?php } ?>
			</div>
		</td>
	</tr>
</table>