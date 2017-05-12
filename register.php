<?php
if (!isset($_COOKIE['email']) && !isset($_COOKIE['password'])) {
	if ($_SERVER["REQUEST_METHOD"] == "POST") {
		if (!empty($_POST['name'])) {
			$name = trim(strip_tags($_POST['name']));
		} else {
			$error[] = 'empty_name';
		}
		if (!empty($_POST['surname'])) {
			$surname = trim(strip_tags($_POST['surname']));
		} else {
			$surname = '';
		}

		if (!empty($_POST['email'])) {
			$email = trim(strip_tags($_POST['email']));
		} else {
			$error[] = 'empty_email';
		}

		if (!empty($_POST['password'])) {
			$password = trim(strip_tags($_POST['password']));
		} else {
			$error[] = 'empty_password';
		}
		if (!empty($_POST['password_confirm'])) {
			$password_confirm = trim(strip_tags($_POST['password_confirm']));
		} else {
			$error[] = 'empty_password_confirm';
		}

		if (!empty($_POST['password']) && !empty($_POST['password_confirm'])) {
			if ($password != $password_confirm) {
				$error[] = 'error_password_&_password_confirm_not_equal';
			}
		}

		if(!isset($error) && $password === $password_confirm && isset($_POST['remember_me']) && $_POST['remember_me'] == 'on'){
			setcookie('name', $name, time() + 3600, '/');
			setcookie('surname', $surname, time() + 3600, '/');
			setcookie('email', $email, time() + 3600, '/');
			setcookie('password', $password, time() + 3600, '/');
			setcookie('time', time(), time() + 3600, '/');
		}
	}
} else {
	$name = $_COOKIE['name'];
	$surname = $_COOKIE['surname'];
	$email = $_COOKIE['email'];
	$password = $_COOKIE['password'];
	$password_confirm = $_COOKIE['password'];
	echo 'Мы вас помним, вы регистрировались в '.date('Y.m.d H:i:s', $_COOKIE['time']);
}
echo '<h3>HTTP task1</h3><br />';
?>
<style type="text/css">
	.table5 td {
		width: 200px;
		border: 0px;
		text-align: left;
	}
	.table5 input {
		width: 200px;
	}
</style>
<form method="post" action="index.php">
	<table class="table5">
		<tr>
			<td><label>Имя</label></td>
			<td><input type="text" name="name" value="<?php echo (isset($_POST['name'])?$_POST['name']:''); ?>"></td>
		</tr>
		<tr>
			<td><label>Фамилия</label></td>
			<td><input type="text" name="surname" value="<?php echo (isset($_POST['surname'])?$_POST['surname']:''); ?>"></td>
		</tr>
		<tr>
			<td><label>Email</label></td>
			<td><input type="text" name="email" value="<?php echo (isset($_POST['email'])?$_POST['email']:''); ?>"></td>
		</tr>
		<tr>
			<td><label>Пароль</label></td>
			<td><input type="password" name="password"></td>
		</tr>
		<tr>
			<td><label>Подтверждение пароля</label></td>
			<td><input type="password" name="password_confirm"></td>
		</tr>
		<tr>
			<td><label>Запомнить меня</label></td>
			<td><input type="checkbox" name="remember_me"></td>
		</tr>
		<tr>
			<td></td>
			<td><input type="submit" value="Зарегистрироваться!"></td>
		</tr>
	</table>
</form>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {

	/*if (!empty($_POST['name'])) {
		$name = trim(strip_tags($_POST['name']));
	} else {
		$error[] = 'empty_name';
	}
	if (!empty($_POST['surname'])) {
		$surname = trim(strip_tags($_POST['surname']));
	} else {
		$surname = '';
	}

	if (!empty($_POST['email'])) {
		$email = trim(strip_tags($_POST['email']));
	} else {
		$error[] = 'empty_email';
	}

	if (!empty($_POST['password'])) {
		$password = trim(strip_tags($_POST['password']));
	} else {
		$error[] = 'empty_password';
	}
	if (!empty($_POST['password_confirm'])) {
		$password_confirm = trim(strip_tags($_POST['password_confirm']));
	} else {
		$error[] = 'empty_password_confirm';
	}
	if (!empty($_POST['password']) && !empty($_POST['password_confirm'])) {
		if ($password != $password_confirm) {
			$error[] = 'error_password_&_password_confirm_not_equal';
		}
	}*/

	if(isset($error)){
		print_r($error);
	} else if($password === $password_confirm) {
		$user = new stdClass();
		$user->name = $name;
		$user->surname = $surname;
		$user->email = $email;
		$user->password = $password;
		$user->password_confirm = $password_confirm;
		echo 'Спасибо за регистрацию!<br>';
		print_r($user);
	}
}

?>