<?php
session_start();
if (isset($_SESSION['username'])) {
	$username = $_SESSION['username'];
} else {
	header('Location: ques1.php');
	exit;
}
?>

<!DOCTYPE html>
<html>

<head>
	<title>22MCA0125 DA4 Ques 1</title>
	<style>
		body {
			background-color: #ede8e1;
		}

		.main-content {
			text-align: center;
			color: black;
			font-family: sans-serif;
			font-size: 35px;
			margin-top: 200px;
		}

		.linkback {
			text-align: center;
			margin-top: 50px;
			font-family: sans-serif;
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
	<div class="main-content">
		<h1>This is the Next Page, for <?php echo $username; ?></h1>
	</div>
	<div class="linkback">
		<a href="ques1.php" target="_blank">Click Here to return to the first page </a>
	</div>
</body>

</html>