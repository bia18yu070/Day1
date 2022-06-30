<html>
	<head>
		<title>Самостоятельная работа</title>
		<meta charset="utf-8" />
	</head>
	<body>
		<h1>Ваша заявка рассмотрена</h1>
		<?php

		$x = $_REQUEST["num1"];
		$y = $_REQUEST["num2"];
		$result = $x+$y;
		echo "Результат сложения: $result";
		?>
	</body>
</html>