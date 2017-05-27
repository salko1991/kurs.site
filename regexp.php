<?php
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
echo 'REGEXP';
/*
$str1 = '112234'; //22
$str2 = 'Hello .Dnepr.'; //Dnepr
$str3 = '0972786401'; //от 10 до 12

$res = preg_match('/22/', $str1, $match1);
$res = preg_match('/Dnepr/', $str2, $match2);
$res = preg_match('/^\d{10,12}$/', $str3, $match3);

echo "<br>";
var_dump($match1);
echo "<br>";
var_dump($match2);
echo "<br>";
var_dump($match3);
echo "<br>";
//(\<(/?[^\>]+)\>)
$str4 = 'Hello Dear <div>test</div> friend +380972786401';
$res = preg_match('/([\w\d]+)(\s)?([\w\d]+)(\s)?(\<(\/?[^\>]+)\>)([\w\d]+)(\s)?(\<(\/?[^\>]+)\>)(\s)?([\w\d]+)(\s)?(\+\d+)/', $str4, $match4);
print_r($match4);*/
?>

<form method="post" action="index.php">
	<table>
		<tr>
			<td>login</td>
			<td><input type="text" name="login"></td>
		</tr>
		<tr>
			<td>name</td>
			<td><input type="text" name="name"></td>
		</tr>
		<tr>
			<td>email</td>
			<td><input type="text" name="email"></td>
		</tr>
		<tr>
			<td>password</td>
			<td><input type="text" name="password"></td>
		</tr>
		<tr>
			<td></td><td><input type="submit" value="Send"></td>
		</tr>
	</table>
</form>

<?php

if ($_SERVER["REQUEST_METHOD"] == 'POST') {
	$error = array();
	print_r($_POST);
	if (isset($_POST['login']) && $_POST['login']) {
		$login = $_POST['login'];
		$res = preg_match('/^[A-Za-z][A-Za-z0-9]{3,}$/', $login);
		if (!$res) {
			$error[] = 'login';
		}
	}
	if (isset($_POST['name']) && $_POST['name']) {
		$name = $_POST['name'];
		$res = preg_match('/[A-Za-z]/', $name);
		if (!$res) {
			$name = rus2translit($_POST['name']);
			$res = preg_match('/^([A-Z][a-z]+)(\s?\-\s?([A-Z][a-z]+))*$/', $name);
			if (!$res) {
				$error[] = 'name';
			}
		} else {
			$error[] = 'name';
		}
	}
	if (isset($_POST['email']) && $_POST['email']) {
		$email = $_POST['email'];
		$res = preg_match('/^[\w\.\-]+@[A-Za-z]+\.[a-zA-Z]{2,6}$/',$email);
		if (!$res) {
			$error[] = 'email';
		}
	}
	if (isset($_POST['password']) && $_POST['password']) {
		$password = $_POST['password'];
		$res = preg_match('/^[A-Za-z][A-Za-z0-9\/\*\-]{3,}/', $password);
		if (!$res) {
			$error[] = 'password';
		}
	}
	if (!empty($error)) {
		echo '<br />err: ';
		print_r($error);
		echo '<br />';
	}
}
?>

<form method="post" action="index.php">
	<table>
		<tr>
			<td>enter link</td>
			<td><input type="text" name="link"></td>
		</tr>
		<tr>
			<td></td><td><input type="submit" value="Send"></td>
		</tr>
	</table>
</form>
<?php
if ($_SERVER["REQUEST_METHOD"] == 'POST') {
	if (isset($_POST['link']) && $_POST['link']) {
		$link = strtolower(rus2translit($_POST['link']));
		$p = array('/^[\/\-]*/', '/[\/\-]*$/');
		$link1 = preg_replace($p, '',$link);
		echo "<br />";
		print_r($link1);
		$res = preg_match('/^[\/\-]*(.+?)[\/\-]*$/', $link, $link21);
		$link2 = $link21[1];
		echo "<br />";
		print_r($link2);
		$link3 = preg_replace('/^[\/\-]*(.+?)[\/\-]*$/', '${1}', $link);
		echo "<br />";
		print_r($link3);
	}
}
?>