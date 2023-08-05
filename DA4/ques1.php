<?php
session_start();
$_SESSION['username'] = 'Anuj Koranga';
?>

<!DOCTYPE html>
<html>

<head>
	<title>22MCA0125 DA4 Ques 1</title>
	<style>
		body {
			background-color: #a0e6fd;
		}

		.heading {
			text-align: center;
			color: #231f47;
			font-size: 50px;
			margin-top: 200px;
		}

		.link {
			text-align: center;
			margin-top: 50px;

		}

		a {
			text-decoration: none;
			color: #fff;
			font-size: 30px;
			border: 1px solid #000000;
			padding: 10px;
			border-radius: 10px;
			background-color: black;
		}
	</style>
</head>

<body>
	<div class="heading">
		<h1>This is the First Page</h1>
	</div>
	<div class="link">
		<a href="nextPage.php" target="_blank">Click Here to go to next page</a>
	</div>
</body>

</html>