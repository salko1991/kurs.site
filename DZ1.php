<!DOCTYPE HTML>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <title>Курсы</title>
</head>
<body>
	<?php
		$euroRate_fl = 28.88; // Курс евро
		$moneyQuantity_fl = 10.99; // Сумма для обмена в грувнах
		$resultMoney_fl = round($euroRate_fl * $moneyQuantity_fl, 2); // Делаем расчет итоговая сумма в гривнах

		$pricePerMinuteTalk_fl = 0.3; // Цена за минуту разговора в гривнах
		$talkTime_fl = 1.20; // Длительность разговора в минутах
		$totalTalkCost_fl = $pricePerMinuteTalk_fl * ceil($talkTime_fl); // Делаем расчет итоговой цены за разговор

		$centimeterPerInch_fl = 2.54; // Сантиметров в дюйме
		$inchCount_fl = 5; // Количество дюймов
		$totalInchToCentimeter_fl = $centimeterPerInch_fl * $inchCount_fl; // Делаем расчет итоговой длины в сантиметрах
	?>
	<div id="currencyExchange">
		<h2>Конвертер валют</h2>
		<p>Здравствуйте! Вас приветствует обмен валют. Что желаете?</p>
		<p>Хочу обменять евро на гривны.</p>
		<p>Сколько желаете поменять?</p>
		<p><?php echo $moneyQuantity_fl; ?></p>
		<p>Курс 1 евро - <?php echo $euroRate_fl; ?> грн. Вас устраивает?</p>
		<p>Да</p>
		<p>Перевод <?php echo $moneyQuantity_fl; ?> евро в гривны по курсу 1 евро - <?php echo $euroRate_fl; ?> грн. Так?</p>
		<p>Да</p>
		<p>Итоговая сумма равна <?php echo $resultMoney_fl; ?> грн. Были рады Вас видеть! Приходите еще!</p>
		<p>Спасибо!</p>
		<p>Досвидания</p>
	</div>
	<div id="priseTalk">
		<h2>Стоимость разговора</h2>
		<p>Цена одной минуты исходящего звонка составляет: <?php echo $pricePerMinuteTalk_fl; ?> грн.</p>
		<p>Разговор длился: <?php echo $talkTime_fl; ?> мин.</p>
		<p>Итоговая стоимость разговора длительностью <?php echo $totalTalkCost_fl; ?> грн.</p>
	</div>
	<div id="inchTranslation">
		<h2>Перевод в дюймы</h2>
		<p>Один дюйм составляет: <?php echo $centimeterPerInch_fl; ?> сантиметра.</p>
		<p>Вы хотите перевести: <?php echo $inchCount_fl; ?> дюймов.</p>
		<p>Итого <?php echo $inchCount_fl; ?> дюйм(ов) = <?php echo $totalInchToCentimeter_fl; ?> сантиметров.</p>
	</div>
</body>
</html>