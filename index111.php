<?php
session_start();
session_name($_SERVER['HTTP_USER_AGENT']);
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
    </style>
</head>
<body>
<?php
/*require_once 'DZ1.php';
require_once 'DZ2.php';
require_once 'DZ3.php';
require_once 'DZ4.php';*/
//require_once 'register.php';
require_once 'files.php';
?>
<div style="width: 300px; height: 500px;"></div>
</body>
</html>